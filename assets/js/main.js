$(function(){

    /*-------------------------------------------------------------------*/
    /*  1. Preloader. Requires jQuery jpreloader plugin.
    /*-------------------------------------------------------------------*/
    $(document).ready(function() {
        if ($.fn.jpreLoader){
            $('body').jpreLoader({
                showPercentage: false,
                loaderVPos: '50%'
            });
        }

        // save the texts in an array for re-use
        loadProverbs()
            .done(
                function(data, status, jqXHR) {
                    proverbs = data;
                    $.each(proverbs.inspirationalProverbs, function(i, proverb) {
                        texts[cnt++]=proverb;
                    });
                    slide();
                }
            )
            .fail(
                function(jqXHR,status,err) {
                   // alert("Error loading Proverb Data " + err);
                }
            );

        // Do not show the contact form initially
        $(".contact-form").css('display', 'none');
    });

    var ajaxindicatorstart = function(text)
    {
        if($('body').find('#resultLoading').attr('id') != 'resultLoading'){
            $('body').append('<div id="resultLoading" style="display:none"><div><img src="../assets/images/ajax_loader_blue.gif" width="50%" height="50%"><div>'+text+'</div></div><div class="bg"></div></div>');
        }

        $('#resultLoading').css({
            'width':'100%',
            'height':'100%',
            'position':'fixed',
            'z-index':'10000000',
            'top':'0',
            'left':'0',
            'right':'0',
            'bottom':'0',
            'margin':'auto'
        });

        $('#resultLoading .bg').css({
            'background':'#000000',
            'opacity':'0.7',
            'width':'100%',
            'height':'100%',
            'position':'absolute',
            'top':'0'
        });

        $('#resultLoading>div:first').css({
            'width': '250px',
            'height':'75px',
            'text-align': 'center',
            'position': 'fixed',
            'top':'0',
            'left':'0',
            'right':'0',
            'bottom':'0',
            'margin':'auto',
            'font-size':'16px',
            'z-index':'10',
            'color':'#ffffff'

        });

        $('#resultLoading .bg').height('100%');
        $('#resultLoading').fadeIn(300);
        $('body').css('cursor', 'wait');
    }

    var ajaxindicatorstop = function () {
        $('#resultLoading .bg').height('100%');
        $('#resultLoading').fadeOut(300);
        $('body').css('cursor', 'default');
    }


    var proverbs;// Proverb Changer
    var cnt=0, texts=[];
    
    var loadProverbs = function() {
        return $.ajax({
            type: 'GET',
            url: 'data/InspirationalProverbs.json',
            async: true,
            //jsonpCallback: 'jsonCallback',
            contentType: "application/json; charset=utf-8",
            dataType: 'json'
        });
    };

    var slide = function() {
        if (cnt>=texts.length) cnt=0;
        $('#fadingProverbs').html(texts[cnt++]);
        $('#fadingProverbs')
            .fadeIn('slow').animate({opacity: 1.0}, 8000).fadeOut('slow',
            function() {
                return slide();
            }
        );
    }
    

    /*-------------------------------------------------------------------*/
    /*  2. Makes the height of all selected elements (".match-height")
    /*  exactly equal. Requires jQuery matchHeight plugin.
    /*-------------------------------------------------------------------*/
    $(window).smartload(function(){
        if ($.fn.matchHeight){
            $('.match-height').matchHeight();
        }
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  3. Full screen
    /*-------------------------------------------------------------------*/
    function setResizeContent() {
        var minHeight = $(window).height();
        $('.full-screen').css('min-height', minHeight);
    }
    
    setResizeContent();

    $(window).smartresize(function(){
        setResizeContent();
    });

    
    /*-------------------------------------------------------------------*/
    /*  4. Just did another hack of dropdown menu for Bootstrap scrollspy.
    /*-------------------------------------------------------------------*/
    $('body').on('activate.bs.scrollspy', function(){
        $('.page-scroll.dropdown > .dropdown-toggle').each(function(){
            $(this).attr('data-target', '#');
        });
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  5. Page scrolling feature, requires jQuery Easing plugin.
    /*-------------------------------------------------------------------*/
    var pageScroll = function(){
        $('.page-scroll > a').bind('click', function(e){
            e.preventDefault();
            
            var anchor = $(this),
            href = anchor.attr('href'),
            offset = $('body').attr('data-offset');
            
            $('html, body').stop().animate({
                scrollTop: $(href).offset().top - (offset - 1)
            }, 1500, 'easeInOutExpo');
            
            /*
             * Automatically retract the navigation after clicking 
             * on one of the menu items.
             */
            if(!$(this).parent().hasClass('dropdown')){
                $('.Chouhan-collapse').collapse('hide');
            }
        });
    };
    
    pageScroll();
    
    
    /*-------------------------------------------------------------------*/
    /*  6. Make navigation menu on your page always stay visible.
    /*  Requires jQuery Sticky plugin.
    /*-------------------------------------------------------------------*/
    var stickyMenu = function(){
        var ww = Math.max($(window).width(), window.innerWidth),
        nav = $('.navbar.navbar-fixed-top');

        if ($.fn.unstick){
            nav.unstick();
        }
        
        if ($.fn.sticky && ww >= 992){
            nav.sticky({topSpacing: 0});
        }
    };
    
    stickyMenu();
    
    // Call stickyMenu() when window is resized.
    $(window).smartresize(function(){
        stickyMenu();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  7. Navbar dropdown opening on hover,
    /*  and opening on click for collapsed navbar.
    /*-------------------------------------------------------------------*/
    var toggleNavbarMethod = function(){
        var ww = Math.max($(window).width(), window.innerWidth),
        dropdown = $('.navbar .dropdown');
        
        if (ww >= 992){
            dropdown.on('mouseover', function(){
                if (!$(this).hasClass('open')){
                    $(this).addClass('open');
                }
            }).on('mouseout', function(){
                if ($(this).hasClass('open')){
                    $(this).removeClass('open');
                }
            });
        }
        else {
            dropdown.off('mouseover').off('mouseout');
        }
    };
    
    toggleNavbarMethod();
    
    // Call toggleNavbarMethod(); when window is resized.
    $(window).smartresize(function(){
        toggleNavbarMethod();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  8. Prevent bootstrap dropdown closing when clicked.
    /*-------------------------------------------------------------------*/
    $('.dropdown-menu').click(function(e){
        e.stopPropagation();
    });
    
 
    /*-------------------------------------------------------------------*/
    /*  9. Portfolio gallery. Requires jQuery Magnific Popup plugin.
    /*-------------------------------------------------------------------*/
    if ($.fn.magnificPopup){
        $('.portfolio').magnificPopup({
            delegate: 'a.zoom',
            type: 'image',
            fixedContentPos: false,

            // Delay in milliseconds before popup is removed
            removalDelay: 300,

            // Class that is added to popup wrapper and background
            mainClass: 'mfp-fade',

            gallery: {
                enabled: true,
                preload: [0,2],
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                tPrev: 'Previous Project',
                tNext: 'Next Project'
            }
        });
    }
    
    
    /*-------------------------------------------------------------------*/
    /*  10. Column Chart (Section - My Strengths)
    /*-------------------------------------------------------------------*/
    var columnChart = function (){
        $('.column-chart').find('.item-progress').each(function(){
            var itemProgress = $(this);
            var itemProgressHeight = $(this).parent().height() * ($(this).data('percent') / 100);
            
            itemProgress.css('height', itemProgressHeight);
        });
    };
    
    // Call columnChart() when window is loaded.
    $(window).smartload(function(){
        columnChart();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  11. Section - My Resume
    /*-------------------------------------------------------------------*/
    var resumeCollapse = function (){
        var ww = Math.max($(window).width(), window.innerWidth),
        workItem = $('.collapse:not(:first)', '#work'),
        educationItem = $('.collapse:not(:first)', '#education');
        
        if (ww < 768){
            workItem.collapse('show');
            educationItem.collapse('show');
        }
        else{
            workItem.collapse('hide');
            educationItem.collapse('hide');
        }
    };
    
    // Call resumeCollapse() when window is loaded.
    $(window).smartload(function(){
        resumeCollapse();
    });
    
    // Call resumeCollapse() when window is resized.
    $(window).smartresize(function(){
        resumeCollapse();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*	12. References slider. Requires Flexslider plugin.
    /*-------------------------------------------------------------------*/
    $(window).smartload(function(){
        if ($.fn.flexslider){
            var flex = $('.flexslider.clients');
    
            flex.flexslider({
                selector: ".slides > .item",
                manualControls: ".flex-control-nav li",
                directionNav : false,
                slideshowSpeed: 30000,
                after: function(slider){
                    if (!slider.playing) {
                        slider.play();
                    }
                }
            }); 
        }
    });
    
    $('a.flex-prev').on('click', function(e){
        e.preventDefault();
        $('.flexslider').flexslider('prev');
    });
    
    $('a.flex-next').on('click', function(e){
        e.preventDefault();
        $('.flexslider').flexslider('next');
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  13. Circle Chart (Section - Skills & Expertise)
    /*-------------------------------------------------------------------*/
    var circleChart = function (){
        $('.circle-chart').find('.item-progress').each(function(){
            var item = $(this),
            maxHeight = 108,
            newHeight = maxHeight * ($(this).data('percent') / 100);
            
            // Only animate elements when using non-mobile devices    
            if (jQuery && jQuery.browser&& jQuery.browser.mobile === false){
                item.one('inview', function(isInView) {
                    if (isInView){
                        // Animate item
                        item.animate({
                            height: newHeight
                        },1500);
                    }
                });
            }
            else{
                item.css('height', newHeight);
            }
        });
    };
    
    // Call circleChart() when window is loaded.
    $(window).smartload(function(){
        circleChart();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  14. Bar Chart (Section - Knowledge)
    /*-------------------------------------------------------------------*/
    var barChart = function (){
        $('.bar-chart').find('.item-progress').each(function(){
            var item = $(this),
            percent = $(this).prev(),
            newWidth = $(this).parent().width() * ($(this).data('percent') / 100);
            
            // Only animate elements when using non-mobile devices    
            if (jQuery && jQuery.browser&& jQuery.browser.mobile === false){
                item.one('inview', function(isInView) {
                    if (isInView){
                        // Animate item
                        item.animate({
                            width: newWidth
                        },1500);
                        
                        percent.animate({
                            left: newWidth - percent.width()
                        },1500);
                    }
                });
            }
            else{
                item.css('width', newWidth);
                percent.css('left', newWidth - percent.width());
            }
        });
    };
    
    // Call barChart() when window is loaded.
    $(window).smartload(function(){
        barChart();
    });

    // Call barChart() when window is resized.
    $(window).smartresize(function(){
        barChart();
    });

    
    /*-------------------------------------------------------------------*/
    /*  15. Milestones counter.
    /*-------------------------------------------------------------------*/

    var counter = function (){
        var number = $('.milestones').find('.number');

        if ($.fn.countTo){
            number.countTo({
                speed: 3000
            });
        }
    };


    /*-------------------------------------------------------------------*/
    /*  16. Contact Form.
    /*-------------------------------------------------------------------*/

    /*var sayHello = function(formData) {
        return $.ajax({
            url: 'services/contact/sendEmail.php',
            data: formData,
            method: 'POST',
            async: true,
            dataType:'html'
        });
    };

    $('.submit').click(function(e){
        e.preventDefault();
        e.stopPropagation();

        sayHello($("#contact-form").serialize())
            .done(function(responseText){
                alert("Success " + responseText);
            })
            .fail(function(responseText, jqXHR){
                alert("Failed " + responseText);
            });
    });*/

    $(".sayHello").click(function(e){
        $(".contact-details").toggle();
        $(".contact-form").css('display', 'inline');
    });


    /*-------------------------------------------------------------------*/
    /*  17. Download Resume GeoLocation Restriction.
     /*-------------------------------------------------------------------*/

    $(".downloadResumeAnchor").click(function(e){
        if(e.currentTarget.text === "Request Resume"){
            window.open("#contact", "_self");
            $(".contact-details").toggle();
            $(".contact-form").css('display', 'inline');
            return;
        } else
            ajaxindicatorstart('Downloading.. please wait..');
        e.preventDefault();
        //"http://ip-api.com/json/?callback=?"
        //http://freegeoip.net/json/?callback=?
        var gotLocation = false;
        $.getJSON("http://ip-api.com/json/?callback=?", function(data) {
            gotLocation = true;
            /*if((data.country_code === 'US' && data.country_name === "United States" && data.time_zone === "America/New_York")
                && (data.region_code === "NJ" || data.region_code === "NY")
                && (data.region_name === "New Jersey" || data.region_name === "New York")){*/
            if((data.city === "Jersey City" || data.city === "New York City")
                && data.country === "United States"
                && data.countryCode === "US"
                && (data.region === "NJ" || data.region === "NY")
                && (data.regionName === "New Jersey" || data.regionName === "New York")
                && data.status === "success"){
                window.open(resumePath, '_self');

                setTimeout(function(){
                    ajaxindicatorstop();
                    BootstrapDialog.show({
                        id: 'downloadResumeDialog',
                        type: BootstrapDialog.TYPE_PRIMARY,
                        title: 'Gracias !',
                        message: 'Thanks for having my resume. Hope to hear back from you soon.',
                        closable: false
                    });

                }, 1000);

                setTimeout(function(){
                    $(".modal-dialog").fadeTo(500,0).slideUp(500, function(){
                        $("#downloadResumeDialog").modal('hide');
                    })
                }, 4000);
            }
            else {
                ajaxindicatorstop();
                BootstrapDialog.show({
                    id: 'downloadResumeDialog',
                    type: BootstrapDialog.TYPE_PRIMARY,
                    title: 'Oops !!!',
                    message: 'Trouble downloading resume, please email me',
                    closable: false
                });

                setTimeout(function(){
                    $(".modal-dialog").fadeTo(2000,500).slideUp(500, function(){
                        $("#downloadResumeDialog").modal('hide');
                    });
                    $("a.downloadResumeAnchor").text("Request Resume");
                }, 10000);
            }
        })
            .fail(function() {
                ajaxindicatorstop();
                console.log( "error" );
                BootstrapDialog.show({
                    id: 'downloadResumeDialog',
                    type: BootstrapDialog.TYPE_PRIMARY,
                    title: 'Oops !!!',
                    message: 'Seems there occurred some error. Please try again in sometime.',
                    closable: false
                    /*buttons: [{
                         label: 'Ok',
                         action: function (dialogRef) {
                         dialogRef.close();
                         }
                     }]*/
                });

                setTimeout(function(){
                    $(".modal-dialog").fadeTo(2000,500).slideUp(500, function(){
                        $("#downloadResumeDialog").modal('hide');
                    })
                }, 5000);
            });
        setTimeout(function() {
            ajaxindicatorstop();
            if (!gotLocation)
            {
                BootstrapDialog.show({
                    id: 'downloadResumeDialog',
                    type: BootstrapDialog.TYPE_PRIMARY,
                    title: 'Oops !!!',
                    message: 'Looks like you\'ve AdBlocker enabled, please disable and try again.',
                    closable: false
                });

                setTimeout(function(){
                    $(".modal-dialog").fadeTo(2000,500).slideUp(500, function(){
                        $("#downloadResumeDialog").modal('hide');
                    })
                }, 2000);
            }
        }, 30000);
    });

    if (jQuery && jQuery.browser&& jQuery.browser.mobile === false){
        var number = $('.milestones .number');

        number.one('inview', function(isInView) {
            if (isInView){
                counter();
            }
        });
    }
    else{
        counter();
    }
});
