var app = angular.module("uiDevApp", []);

app.controller("uiDevCtrl", ["$scope", function(s){


	s.name = "Uday Raju";
	s.location = "Atlanta, GA";
	s.email = "udayraju2008@gmail.com";
	s.phNumber = "248-962-3785";

	s.gitHubLink = "#";
	s.linkedInUrl = "#";
	s.fbUrl = "#";
	s.googlePlusUrl = "#";
	s.shortName = "Uday";
	s.birthLocation = "Hyderabad, India";
	s.employerName = "Capital Info Group, Inc.";

	s.educationDetails = 
	{ 
		title: "My Education",
		year: "1989-2009",
		body: "Thanks to my parents for helping and supporting me for what I am today.",
		degrees: 
		[
			{
				year: "2008 - 2009",
				title: "Masters in Electrical and Electronics Engineering.",
				collegeTitle: " - Wayne State University",
				body:"Graduated with distinction majoring VLSI Systems design with specific interest in Embedded Systems and Sensor Cells."

			},
			{
				year: "2003 - 2007",
				title: "Bachelors in Electronics and Communications Engineering.",
				collegeTitle: " - Jawaharlal Nehru Technology University",
				body:"Graduated with distinction with extensive interest in Embedded Systems, VLSI, Telecommunication, Electro Magnetic Theory and Networking theory but not limited to Computer Science subjects like Pulse & Digital Circuits, Operating Systems and Computer Networks."
			},
			{
				year: "2001 - 2003",
				title: "Board of Intermediate Education.",
				collegeTitle: "  - Sri Aurobindo Jr. College",
				body:" Excelled Intermediate Education (Class of 11 & 12) with top of the class marks mainly in Maths, Physics and Chemistry subjects."
			},
			{
				year: "1989 - 2001",
				title: "Board of Secondary School.",
				collegeTitle: " - St. Ann's High School ",
				body:"It's really hard to get back to those initial days of incubating maturedness which was filled with joy and learning things every day in a new fashion. I always feel that I was very well nourished with the qualities I carry myself to this day. I was a simple, sober and a very bright student who would complete his homeworks on time, taking examinations very seriously and had ambition towards any goals which were set forth."
			}

		]

		
	}

	s.workExperience = 
	{ 
		title: "Work Experience",
		year: "2006-Current",
		body: "",
		details: 
		[
			{
				year: "2015 - Now",
				title:"",
				client: "Goldman Sachs. - Sr. Full-Stack Software Engineer.",
				responsibilities: "•	Working on migrating the Flex based UI with HTML5, JS, AngularJs MVVM framework.<br>•	Incorporating HTML5/JS’s Slick Grid for data grid’s in the UI.<br>•	Using Slick Grid’s pagination mechanism.<br>•	UI Router to route and save states between pages.<br>•	Optimizing and improving existing SQL queries to improve Execution Time and Data Fetch time.<br>•	Improving existing Flex UI Screens to render quickly.<br>•	&lt;&lt;MORE TO COME&gt;&gt;"

			},
			{
				year: "2003 - 2007",
				title: "",
				client: " - Jawaharlal Nehru Technology University",
				responsibilities:"•	Participated in guest lectures and training sessions for VCSA Installer, which was architected using AngularJs MVVM framework.<br>•	Responsible for fixing defects on both the client side (Adobe Flex) and Server side (Java/J2EE).<br> •	Worked on front end form field validations in VCSA Installer which is purely using AngularJs.<br> •	Used AJAX & JSON communication for accessing RESTful web services data payload.<br> •	Played with Web Socket Connections to communicate with VM and bring the same in action on all major browsers.<br> •	Communicated with CPP plugins for data retrieval and data post within Web Sockets.<br> •	Create Browser detection utility using Regular Expressions for different browser User Agents strings.<br> •	Used Advanced JavaScript ArrayBuffer Data Types to read and write binary data to Web Sockets.<br> •	Worked on Java Server Side Communication for Web Sockets to read and transfer data from ESX host machine to the client on Browser.<br> •	Resolved Cross Site Scripting (XSS) vulnerabilities within majorly used browsers by using OWASP Java HTML Sanitizer Google code project library.<br> •	Extensively used jQuery for faster javascript programming and followed better coding techniques for better performance and intuitiveness.<br> •	Kept in mind while coding about the performances of search techniques with Big-O notations.<br> •	Worked extensively on HTML5 div and canvas elements to demonstrate fullScreen prototypes.<br> •	Reduced the necessity of using JavaScript styling by using CSS3 wherever necessary.<br> •	Used GruntJS library to minify, unit test and compilation of java scripts.<br> •	Wrote various javascript utilities like XMLParser, DomainNameValidator, IpUtil etc.. with recommended RFC standards for easy code reuse for form validations.<br> •	Worked on setting the Reverse proxy for Web Sockets wss protocol to support HTML based Web Console for a Virtual Machine.<br> •	Well versed with the use of Perforce VCS with different branches on different P4 Servers and as well as Cross porting and Back porting files and folders.<br> •	Used Review Board for code reviewing and extensively used Maven and Ant for adding dependencies, installing, packaging and deployment."
			},
			{
				year: "2003 - 2007",
				title: "",
				client: " - Jawaharlal Nehru Technology University",
				responsibilities:"•	Participated in guest lectures and training sessions for VCSA Installer, which was architected using AngularJs MVVM framework.<br>•	Responsible for fixing defects on both the client side (Adobe Flex) and Server side (Java/J2EE).<br> •	Worked on front end form field validations in VCSA Installer which is purely using AngularJs.<br> •	Used AJAX & JSON communication for accessing RESTful web services data payload.<br> •	Played with Web Socket Connections to communicate with VM and bring the same in action on all major browsers.<br> •	Communicated with CPP plugins for data retrieval and data post within Web Sockets.<br> •	Create Browser detection utility using Regular Expressions for different browser User Agents strings.<br> •	Used Advanced JavaScript ArrayBuffer Data Types to read and write binary data to Web Sockets.<br> •	Worked on Java Server Side Communication for Web Sockets to read and transfer data from ESX host machine to the client on Browser.<br> •	Resolved Cross Site Scripting (XSS) vulnerabilities within majorly used browsers by using OWASP Java HTML Sanitizer Google code project library.<br> •	Extensively used jQuery for faster javascript programming and followed better coding techniques for better performance and intuitiveness.<br> •	Kept in mind while coding about the performances of search techniques with Big-O notations.<br> •	Worked extensively on HTML5 div and canvas elements to demonstrate fullScreen prototypes.<br> •	Reduced the necessity of using JavaScript styling by using CSS3 wherever necessary.<br> •	Used GruntJS library to minify, unit test and compilation of java scripts.<br> •	Wrote various javascript utilities like XMLParser, DomainNameValidator, IpUtil etc.. with recommended RFC standards for easy code reuse for form validations.<br> •	Worked on setting the Reverse proxy for Web Sockets wss protocol to support HTML based Web Console for a Virtual Machine.<br> •	Well versed with the use of Perforce VCS with different branches on different P4 Servers and as well as Cross porting and Back porting files and folders.<br> •	Used Review Board for code reviewing and extensively used Maven and Ant for adding dependencies, installing, packaging and deployment."
			},
			{
				year: "2003 - 2007",
				title: "",
				client: " - Jawaharlal Nehru Technology University",
				responsibilities:"•	Participated in guest lectures and training sessions for VCSA Installer, which was architected using AngularJs MVVM framework.<br>•	Responsible for fixing defects on both the client side (Adobe Flex) and Server side (Java/J2EE).<br> •	Worked on front end form field validations in VCSA Installer which is purely using AngularJs.<br> •	Used AJAX & JSON communication for accessing RESTful web services data payload.<br> •	Played with Web Socket Connections to communicate with VM and bring the same in action on all major browsers.<br> •	Communicated with CPP plugins for data retrieval and data post within Web Sockets.<br> •	Create Browser detection utility using Regular Expressions for different browser User Agents strings.<br> •	Used Advanced JavaScript ArrayBuffer Data Types to read and write binary data to Web Sockets.<br> •	Worked on Java Server Side Communication for Web Sockets to read and transfer data from ESX host machine to the client on Browser.<br> •	Resolved Cross Site Scripting (XSS) vulnerabilities within majorly used browsers by using OWASP Java HTML Sanitizer Google code project library.<br> •	Extensively used jQuery for faster javascript programming and followed better coding techniques for better performance and intuitiveness.<br> •	Kept in mind while coding about the performances of search techniques with Big-O notations.<br> •	Worked extensively on HTML5 div and canvas elements to demonstrate fullScreen prototypes.<br> •	Reduced the necessity of using JavaScript styling by using CSS3 wherever necessary.<br> •	Used GruntJS library to minify, unit test and compilation of java scripts.<br> •	Wrote various javascript utilities like XMLParser, DomainNameValidator, IpUtil etc.. with recommended RFC standards for easy code reuse for form validations.<br> •	Worked on setting the Reverse proxy for Web Sockets wss protocol to support HTML based Web Console for a Virtual Machine.<br> •	Well versed with the use of Perforce VCS with different branches on different P4 Servers and as well as Cross porting and Back porting files and folders.<br> •	Used Review Board for code reviewing and extensively used Maven and Ant for adding dependencies, installing, packaging and deployment."
			},

		]
		
	}


	s.clients = [

			{
				name: "Goldman Sachs",
				about: "The Expense Management Application supports Goldman customers to raise Invoices for their monthly businesses. It allows the customers to Self Service themselves with followings tasks like, assigning Invoices to Anlysts, Coders, Reviewers, Administrators, etc., This Application user interface has been built using Adobe Flex and the middleware with Java Technology. Current engagement is with migrating user interface with HTML5, AngularJs framework, with business rules and logic in the middleware.",
				myDesignation: "Sr Front End UI Developer",
				duration: "Jan 2015 – Till Date",
				logoUrl: "assets/images/clients/HortonworksLogo.jpg"
			},
			{
				name: "Goldman Sachs",
				about: "",
				myDesignation: "Sr Front End UI Developer",
				duration: "Jan 2015 – Till Date",
				logoUrl: "assets/images/clients/HortonworksLogo.jpg"
			},
			{
				name: "Goldman Sachs",
				about: "",
				myDesignation: "Sr Front End UI Developer",
				duration: "Jan 2015 – Till Date",
				logoUrl: "assets/images/clients/HortonworksLogo.jpg"
			},
			{
				name: "Goldman Sachs",
				about: "",
				myDesignation: "Sr Front End UI Developer",
				duration: "Jan 2015 – Till Date",
				logoUrl: "assets/images/clients/HortonworksLogo.jpg"
			}


	]



}])