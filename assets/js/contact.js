$(function(){
    
    /*-------------------------------------------------------------------*/
    /*  1. jQuery replacement for select boxes. Requires
    /*  select2.full.js in order to support the containerCssClass and
    /*  dropdownCssClass option.
    /*-------------------------------------------------------------------*/
    if ($.fn.select2){
        $(".select2").select2({
            minimumResultsForSearch: 'Infinity',
            containerCssClass: 'select2-container-custom',
            dropdownCssClass: 'select2-dropdown-custom'
        });
    }


    /*-------------------------------------------------------------------*/
    /*  2. Contact form request. Requires jquery validation js.
    /*-------------------------------------------------------------------*/
    $('.validate').validate({
        errorPlacement: function(error, element) {
            if (element.attr('type') == 'radio' || element.attr('type') == 'checkbox') {
                error.appendTo(element.parent().parent());
            }
            else {
                error.appendTo(element.parent());
            }
        },
        /*rules: {
            'project_class': { // Makes "field (radio button - project_class)" always required
                required: true
            },
            'services[]': { // Makes "field (checkbox - services[])" always required
                required: true
            }
        }*/
    });
    
    $(document).on('submit', '#contact-form', function(e){
        e.preventDefault();
        
        var buttonCopy = $('#contact-form button').html(),
            sendingMessage = 'Sending...',
            errorMessage = 'Error Sending. Try Again Later',
            okMessage = 'Thanks ! I will be in touch.';
            
        $('#contact-form button').html("<i class='icon-Mail-Send'></i> " + sendingMessage);
        
        $.ajax({
            url: $('#contact-form').attr('action'),
            type: 'post',
            dataType: 'html',
            data: $("#contact-form").serialize(),
            success: function(data){
                if (data == "Mail Sent Successfully"){
                    $('#contact-form button').html("<i class='icon-Paper-Plane'></i> " + okMessage);
                    $('#contact-form')[0].reset();
                } else {
                    $('#contact-form button').html("<i class='icon-Danger'></i> " + errorMessage);
                }

                setTimeout(function(){
                    $('#contact-form button').html(buttonCopy);
                    $(".contact-details").toggle();
                    $(".contact-form").css('display', 'none');
                }, 3000);
            },
            error: function(xhr, err){
                $('#contact-form button').html("<i class='icon-Danger'></i> " + errorMessage);
                
                setTimeout(function(){
                    $('#contact-form button').html(buttonCopy);
                }, 3000);
            }
        });
    });
});