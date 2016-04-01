var app = angular.module("uiDevApp", ['ngSanitize']);

app.controller("uiDevCtrl", ["$scope", "$http", function(s, h){

	var jsonUrl = "data/uday.json";
	var path = window.location.hostname.substring(0, window.location.hostname.indexOf(".uidev"));
	if(path){
		jsonUrl = "data/"+path+".json";
	}

	//use http://jsonformat.com/#jsondataurllabel
	h.get(jsonUrl).then(function(successData){
		var data = successData.data;
		s.name = data.name;
		s.location = data.location;
		s.email = data.email;
		s.phNumber = data.phNumber;

		s.gitHubLink = data.gitHubLink;
		s.linkedInUrl = data.linkedInUrl;
		s.fbUrl = data.fbUrl;
		s.googlePlusUrl = data.googlePlusUrl;
		s.shortName = data.shortName;
		s.birthLocation = data.birthLocation;
		s.employerName = data.employerName;


		s.educationDetails = data.educationDetails;
		s.workExperience = data.workExperience;
		s.clients = data.clients;

	}, function(errData){

	})
	// s.name = "Uday Raju";
	// s.location = "Atlanta, GA";
	// s.email = "udayraju2008@gmail.com";
	// s.phNumber = "248-962-3785";

	// s.gitHubLink = "#";
	// s.linkedInUrl = "#";
	// s.fbUrl = "#";
	// s.googlePlusUrl = "#";
	// s.shortName = "Uday";
	// s.birthLocation = "Hyderabad, India";
	// s.employerName = "Capital Info Group, Inc.";

	// s.educationDetails = 
	// { 
	// 	title: "My Education",
	// 	year: "1989-2009",
	// 	body: "Thanks to my parents for helping and supporting me for what I am today.",
	// 	degrees: 
	// 	[
	// 		{
	// 			year: "2008 - 2009",
	// 			title: "Masters in Electrical and Electronics Engineering.",
	// 			collegeTitle: " - Wayne State University",
	// 			body:"Graduated with distinction majoring VLSI Systems design with specific interest in Embedded Systems and Sensor Cells."

	// 		},
	// 		{
	// 			year: "2003 - 2007",
	// 			title: "Bachelors in Electronics and Communications Engineering.",
	// 			collegeTitle: " - Jawaharlal Nehru Technology University",
	// 			body:"•	Designed applications using web technologies like HTML, DHTML, XHTML, and CSS based on the W3C standards.<br>•	Used AngularJS to make the HTML 5 and CSS code interact with the JavaScript functions to add dynamic data to the web pages at the client side. <br> •	Coordinate with team members to meet scheduled deadlines, review completed work requests.<br> •	Creating wireframes as per the functional specification document.<br> •	Integrated with the back-end code (JSP) using AngularJS, JSON and AJAX to get and post the data to backend servers. •	Applied XML into transferring administration data to the back end. <br> •	Developed interface to display report data using jQuery, AJAX, JavaScript and JSON, XML.<br> •	Used AngularJS Interceptors for communicate to remote HTTP server.<br> •	Having very good experience using Scaffolding tools like GIT, SVN and Gulp.<br> •	Used AJAX, JSON to send request to the server to check the functionality of the website.<br> •	Performed various mathematical calculations in JavaScript, jQuery.<br> •	Enhanced user experience by designing new web features using MVC Framework like Angularjs to accommodate these advanced and fast technologies.<br> •	Used various jQuery plugins like auto complete, date picker, color picker, document slider to enhance the usability, functionality and overall experience for website. <br> •	Validated the user input using jQuery validation plugin.<br> •	Used tools such as firebug, web developer tools for debugging and correcting errors.<br> "
	// 		},
	// 		{
	// 			year: "2001 - 2003",
	// 			title: "Board of Intermediate Education.",
	// 			collegeTitle: "  - Sri Aurobindo Jr. College",
	// 			body:" Excelled Intermediate Education (Class of 11 & 12) with top of the class marks mainly in Maths, Physics and Chemistry subjects."
	// 		},
	// 		{
	// 			year: "1989 - 2001",
	// 			title: "Board of Secondary School.",
	// 			collegeTitle: " - St. Ann's High School ",
	// 			body:"It's really hard to get back to those initial days of incubating maturedness which was filled with joy and learning things every day in a new fashion. I always feel that I was very well nourished with the qualities I carry myself to this day. I was a simple, sober and a very bright student who would complete his homeworks on time, taking examinations very seriously and had ambition towards any goals which were set forth."
	// 		}

	// 	]

		
	// }

	// s.workExperience = 
	// { 
	// 	title: "Work Experience",
	// 	year: "2008-Current",
	// 	body: "",
	// 	details: 
	// 	[
	// 		{
	// 			year: "2015 - Now",
	// 			title:"",
	// 			client: "Standard Chartered",
	// 			responsibilities: "•	Develop Web Application modules for customer service functionality using Angular JS, HTML5, CSS3, Javascript.<br/>•	Developed Application using Object-oriented JavaScript.<br> •	Enhance customer billing module to allow new customer types and rules.<br> •	Design and develop AngularJS single page web application for Customer Agent multimedia IPad app.<br> •	Have worked on Angular JS which combines web applications with Model View Controller capability to make development and testing of code efficient.<br> •	Have Identified common components in the application and built Custom Directives.<br> •	Used Angular Services to communicate with REST API services.<br> •	This system was written in Ajax, OO JavaScript, JSP, JQuery, HTML and CSS.<br> •	Used JavaScript and CSS for UI Design Mockup. Written code in JQuery/JavaScript /CSS/AJAX for the navigation oriented application.<br> •	Created Dynamic Integration of JQuery, and other JQuery component integration with Ajax.<br> •	Worked on JQuery mobile which is based on HTML 5 for designing user interfaces for web applications.<br> •	Implemented jQuery Filter search a JavaScript tool for adding a little search widget next to any page listing.<br> •	Worked on Jasmine and karma framework for doing JavaScript unit testing.<br> •	&lt;&lt;MORE TO COME&gt;&gt;"

	// 		},
	// 		{
	// 			year: "2012 - 2014",
	// 			title: "",
	// 			client: " Neiman Marcus, TX",
	// 			responsibilities:"•	Participated in guest lectures and training sessions for VCSA Installer, which was architected using AngularJs MVVM framework.<br>•	Responsible for fixing defects on both the client side (Adobe Flex) and Server side (Java/J2EE).<br> •	Worked on front end form field validations in VCSA Installer which is purely using AngularJs.<br> •	Used AJAX & JSON communication for accessing RESTful web services data payload.<br> •	Played with Web Socket Connections to communicate with VM and bring the same in action on all major browsers.<br> •	Communicated with CPP plugins for data retrieval and data post within Web Sockets.<br> •	Create Browser detection utility using Regular Expressions for different browser User Agents strings.<br> •	Used Advanced JavaScript ArrayBuffer Data Types to read and write binary data to Web Sockets.<br> •	Worked on Java Server Side Communication for Web Sockets to read and transfer data from ESX host machine to the client on Browser.<br> •	Resolved Cross Site Scripting (XSS) vulnerabilities within majorly used browsers by using OWASP Java HTML Sanitizer Google code project library.<br> •	Extensively used jQuery for faster javascript programming and followed better coding techniques for better performance and intuitiveness.<br> •	Kept in mind while coding about the performances of search techniques with Big-O notations.<br> •	Worked extensively on HTML5 div and canvas elements to demonstrate fullScreen prototypes.<br> •	Reduced the necessity of using JavaScript styling by using CSS3 wherever necessary.<br> •	Used GruntJS library to minify, unit test and compilation of java scripts.<br> •	Wrote various javascript utilities like XMLParser, DomainNameValidator, IpUtil etc.. with recommended RFC standards for easy code reuse for form validations.<br> •	Worked on setting the Reverse proxy for Web Sockets wss protocol to support HTML based Web Console for a Virtual Machine.<br> •	Well versed with the use of Perforce VCS with different branches on different P4 Servers and as well as Cross porting and Back porting files and folders.<br> •	Used Review Board for code reviewing and extensively used Maven and Ant for adding dependencies, installing, packaging and deployment."
	// 		},
	// 		{
	// 			year: "2010 - 2012",
	// 			title: "",
	// 			client: "Wellcare, FL",
	// 			responsibilities:"•	Designed web application user interface, interaction scenarios and navigation based on analysts, interpretations of requirement and use cases.<br>•	This is a configuration widget written in CSS 3, Java Script, and jQuery framework in UI Layer with Tag library, application deployed and tested on Linux.<br> •	Designed and Developed JavaScript framework, which is wrapper on top of JQUERY framework and AJAX based UI Configuration widgets.<br> •	This will hide all the list items that don't match the word that are being searched for •	Extensively used jQuery plug-in like Isotope and Masonry plug-in for multi column layout, Search plug-in, calendar plug-in, Ajax-queue plug-in, and Auto populating multiple select-boxes.<br> •	Used jQuery fancy box plug-in that adds stylish drop shadow to images posted on the webpage using jQuery.<br> •	Developed UI and implemented for some plug-in using JavaScript, HTML, CSS and XML.<br> •	Involved in the creation of interface to manage user menu and bulk update of attributes using Angularjs and JQuery.<br> "},
	// 		{
	// 			year: "2009 - 2010",
	// 			title: "",
	// 			client: "IDBI Bank, India ",
	// 			responsibilities:"•	Assisted in designing, creating and developing web portals. <br>•	Created graphics including Icons, Images and logos using Adobe Flash Catalyst. <br> •	Created appropriate concept models, site organization prototypes, navigation, page layouts and interaction. <br> •	Developed HTML prototype documents with CSS Style Sheets. <br> •	Designed dynamic client-side JavaScript codes to build web forms and simulate process for web application, page navigation and form validation using jQuery and JavaScript. <br> •	Worked closely with the programmers for project requirement analysis. <br> •	Created new static model pages with cross browser compatibility features. <br> "},
	// 		{
	// 			year: "2008 - 2009",
	// 			title: "",
	// 			client: "CYBAGE, INDIA",
	// 			responsibilities:"•	Developed the UI layout and front-end programming (HTML) for web application that matched requirements.<br> •	Extensively involved design discussions and user experience sessions to provide inputs on the layout and UX.<br> •	Built complex desktop - style UI using HTML, PHP, CSS, JavaScript and AJAX including configuration wizards and interactive reports.<br> •	Added social media links on the company’s primary website and worked on search engine optimization.<br> •	Web Application Developed using Web Technologies 2.0.<br> •	Participated in the functional testing and implementation of the website<br> "
	// 		}

	// 	]
		
	// }


	// s.clients = [

	// 		{
	// 			name: "Standard Chartered",
	// 			about: "Standard Chartered offers banking services in some of the world's most dynamic markets including Asia, Africa and the Middle East. It provides a wide-range of products and services for personal and business customers across 71 countries. Standard Chartered aims to be a positive force in the markets. Its brand promise, Here for good, underlines distinctive approach.",
	// 			myDesignation: "Sr Front End Developer",
	// 			duration: "Apr 2014 – Till Date",
	// 			logoUrl: "assets/images/clients/uday/1.jpg"
	// 		},
	// 		{
	// 			name: "Neiman Marcus",
	// 			about: "Neiman Marcus, originally Neiman-Marcus, is an American luxury specialty department store owned by the Neiman Marcus Group, headquartered in Dallas, Texas.[1] The company also owns the Bergdorf Goodman department stores, and operates a direct marketing division, Neiman Marcus Direct, which operates catalogue and online operations under the Horchow, Neiman Marcus and Bergdorf Goodman names. In the US, Neiman Marcus competes with luxury retailers such as Nordstrom, Saks Fifth Avenue, Lord & Taylor, and Bloomingdale's. Neiman Marcus is currently owned by CPP Investment Board and Ares Management.",
	// 			myDesignation: "Sr Front End Developer",
	// 			duration: "Apr 2012 – Mar 2014",
	// 			logoUrl: "assets/images/clients/uday/2.jpg"
	// 		},
	// 		{
	// 			name: "Wellcare",
	// 			about: "WellCare Health Plans, Inc. focuses exclusively on providing government-sponsored managed care services, primarily through Medicaid, Medicare Advantage and Medicare Prescription Drug Plans, to families, children, seniors and individuals with complex medical needs. The company served approximately 3.8 million members nationwide as of December 15, 2015. WellCare is a FORTUNE 500 company based in Tampa, Fla. that employs more than 6,900 associates nationwide.",
	// 			myDesignation: "Sr UI Developer",
	// 			duration: "Nov 2010 – Mar 2012",
	// 			logoUrl: "assets/images/clients/uday/3.jpg"
	// 		},
	// 		{
	// 			name: "IDBI Bank ",
	// 			about: "IDBI Bank Ltd. is a Universal Bank with its operations driven by a cutting edge core Banking IT platform. The Bank offers personalized banking and financial solutions to its clients in the retail and corporate banking arena through its large network of Branches and ATMs, spread across length and breadth of India. We have also set up an overseas branch at Dubai and have plans to open representative offices in various other parts of the Globe, for encashing emerging global opportunities.",
	// 			myDesignation: "Front End Developer",
	// 			duration: "May 2009 – Nov 2010",
	// 			logoUrl: "assets/images/clients/uday/4.jpg"
	// 		},
	// 		{
	// 			name: "CYBAGE",
	// 			about: "Cybage Software Pvt. Ltd. is a technology consulting organization specializing in outsourced product engineering services. As a leader in hi-tech and product engineering space, Cybage works with some of the world's best Independent Software Vendors (ISVs). Our solutions are focused on modern technologies, and are enabled by a scientific, data driven system called Excelshore® Model of Operational Excellence. This unique model de-risks our approach, provides better predictability, and ensures a better value per unit cost to our clients.",
	// 			myDesignation: "UI Developer",
	// 			duration: "Jul 2008 – Apr 2009",
	// 			logoUrl: "assets/images/clients/uday/5.jpg"
	// 		}
			


	// ]



}])