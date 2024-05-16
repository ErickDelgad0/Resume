<?php

include('../includes/functions.php');

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Delgado Erick Resume</title>
  <meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <style>
      body {
        overflow: hidden;
        font-family: Arial, sans-serif;
        margin: 0;
      }

      .navbar {
        background-color: #333;
        overflow: hidden;
      }

      .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      .navbar a:hover {
        background-color: #ddd;
        color: black;
      }

      .navbar a.active {
        background-color: #4CAF50;
        color: white;
      }
      .resume-wrapper {
        max-height: 100vh; /* Set maximum height to 100% of viewport height */
        overflow-y: auto; /* Enable vertical scrolling if content overflows */
      }

      #resume-download {
        text-align: center;
        margin-bottom: 20px;
      }

      #download-button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      #download-button:hover {
        background-color: #45a049;
      }

  </style>

</head>
<body>
<!-- Navbar -->
<div class="navbar">
  <a class="active" href="/">Resume</a>
  <a href="projects.php">Projects</a>
</div>


<!-- partial:index.partial.html -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<div class="resume-wrapper">
	<section class="profile section-padding">
		<div class="container">
			<div class="picture-resume-wrapper">
        <div class="picture-resume">
        <span><img src="../img/ErickDelgado-modified.png" alt="" style="max-width: 100%; max-height: 100%;" /></span>
        <svg version="1.1" viewBox="0 0 350 350">
  
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -9" result="cm" />
    </filter>
  </defs>
  
  
<g filter="url(#goo)" >  
  
  <circle id="main_circle" class="st0" cx="171.5" cy="175.6" r="130"/>
  
  <circle id="circle" class="bubble0 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble1 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble2 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble3 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble4 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble5 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble6 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble7 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble8 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble9 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble10 st1" cx="171.5" cy="175.6" r="122.7"/>

</g>  
</svg>
      </div>
         <div class="clearfix"></div>
 </div>
      <div class="name-wrapper">
        <h1>Erick <br/>Delgado</h1><!-- YOUR NAME AND LAST NAME  -->
        <p>Willing to Relocate</p>

        <!-- Button to download resume -->
        <div id="resume-download">
          <button id="download-button">Download Resume</button>
        </div>
      </div>
      
      <div class="clearfix"></div>
      <div class="contact-info clearfix">
      	<ul class="list-titles">
      		<li>Cell</li>
      		<li>E-Mail</li>
      		<li>Home</li>
      	</ul>
        <ul class="list-content ">
        	<li>+1 305 965 4400</li> <!-- YOUR PHONE NUMBER  -->
        	<li>delrick2323@outlook.com</li> <!-- YOUR EMAIL -->
        	<li>Palmetto Bay, FL</li> <!-- YOUR STATE AND COUNTRY  -->
        </ul>
      </div>
      <div class="contact-presentation"> <!-- YOUR PRESENTATION RESUME  -->
      	<p><span class="bold">Dynamic and innovative IT professional with a strong drive to automate tasks, solve intricate problems, and devise effective business strategies. Extensive experience in various IT domains, including cybersecurity and revenue management. Possesses a meticulous attention to detail and a sharp analytical acumen for crafting cutting-edge solutions that optimize processes and boost productivity. Skilled in utilizing a range of tools such as Microsoft Office suite, Python, C++, as well as managing databases like MySQL and leveraging cloud services like AWS. </p>
      </div>
      <div class="contact-social clearfix">
      	<ul class="list-titles">
      		<li>Twitter/ X</li>
      		<li>GitHub</li>
          <li>Linkedin</li>
      	</ul>
        <ul class="list-content"> <!-- REMEMBER TO PUT THE URL ON THE HREF TAG  -->
      		<li><a href="https://twitter.com/CheeseStickR1ck">/CheeseStickR1ck</a></li> <!-- YOUR TWITTER USER  -->
      		<li><a href="https://github.com/ErickDelgad0">/ErickDelgad0</a></li> <!-- YOUR github USER  -->
          <li><a href="https://www.linkedin.com/in/erick-delgado-777a8b1b9/">/erick-delgado-777a8b1b9</a></li> <!-- YOUR linkedin USER  -->
      	</ul>
      </div>
		</div>

    

	</section>
  
  <section class="experience section-padding">
  	<div class="container">
      <h3 class="experience-title">Education</h3>

      <div class="experience-wrapper">
      	<div class="company-wrapper clearfix">
      		<div class="experience-title">The College of Wooster <br> Wooster, OH</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time">Aug 12th, 2020 - May 11th, 2024 </div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
      	</div>
        
        <div class="job-wrapper clearfix">
        	<div class="experience-title">B.A. Computer Science; Departmental Honors; 3.45 CGPA </div> <!-- JOB TITLE  -->
          <div class="company-description">
          	<p>- Mastery in algorithm analysis, programming languages, and data science coursework.
              <br>
              <br>- Actively involved in competitive programming through the founding and lead of Computer Science Club.
          </div>
        </div>
      </div><!--Education experience-->

  		<h3 class="experience-title">Experience</h3>
      
      <div class="experience-wrapper">
      	<div class="company-wrapper clearfix">
      		<div class="experience-title">Myaca <br> Miami, FL</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time">Aug 12th, 2023 - Present </div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
      	</div>
        
        <div class="job-wrapper clearfix">
        	<div class="experience-title">Software Development & Reporting </div> <!-- JOB TITLE  -->
          <div class="company-description">
          	<p> - Created a centralized platform that allows healthcare exchange employees to manage member relations with more than 24,000 active members, lead acquisitions, enrollment tracking, reporting and employee management; PHP, MySQL, and Apache
            <br>  
            <br> - Automated daily data collection processes from health carriers, weekly data analysis of lead generation, and monthly reports to visualize which members opted out throughout the month.</p>  <!-- JOB DESCRIPTION  -->
          </div>
        </div>
        
        <div class="company-wrapper clearfix">
      		<div class="experience-title">Oceania Cruise Line <br> Miami, FL</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time">May 31st, 2023 - August 3rd, 2023</div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
      	</div>
        
         <div class="job-wrapper clearfix">
        	<div class="experience-title">Revenue Managment Intern</div> <!-- JOB TITLE  -->
          <div class="company-description">
          	<p>- Developed comprehensive algorithm to forecast cruise cancellation trends to assist in general oversell strategy, propelling the business to capitalize on $8.8 million dollars annually or an additional 800 cabins booked.
              <br><br> - Created a compensation tool to accurately and consistently compensate customers for itinerary changes using Python and Excel
              <br><br> - Spearheaded the advancement of quarterly price changes using python to perform extensive testing and rule-based logic, saving days of labor</p>  <!-- JOB DESCRIPTION  -->
          </div>
        </div>
        
        <div class="company-wrapper clearfix">
      		<div class="experience-title">Norwegian Cruise Line Holdings <br> Miami, FL</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time">June 1st, 2022 - August 4th, 2022</div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
      	</div> 
        
         <div class="job-wrapper clearfix">
        	<div class="experience-title">Cybersecurity & IT Intern </div> <!-- JOB TITLE  -->
          <div class="company-description">
          	<p>- Developed a Power Shell script that enabled security engineers to pull user information across the varying enterprise domains from active directory.
            <br><br>- Assisted the creation of an API that allowed Semantic Endpoint Protection (SEP) to communicate with active directory</p>   <!-- JOB DESCRIPTION  -->
          </div>
        </div>
        
      </div><!--Skill experience-->
      
      <div class="section-wrapper clearfix">
      	<h3 class="section-title">Skills</h3>  <!-- YOUR SET OF SKILLS  -->
        	<ul>
        		<li class="skill-percentage">Python, C++</li>
        		<li class="skill-percentage">Javascript/ HTML/ CSS</li>
        		<li class="skill-percentage">PHP/ MYSQL</li>
        		<li class="skill-percentage">Docker</li>
        		<li class="skill-percentage">G-Suite/ Microsoft 365</li>
            
        	</ul>
        
      </div>
      
      <div class="section-wrapper clearfix">
        <h3 class="section-title">Hobbies</h3>  <!-- DESCRIPTION OF YOUR HOBBIES -->
        <p>I enjoy embedded programming and hardware tinkering, and creating unique contraptions. I also like to spend time soldering and flying my FPV drone.</p>
        <br>
        <p>I am also looking further into finance, particularly focusing on investing in the NYSE, exploring opportunities for personal growth and financial acumen. ($RKLB!)</p>
      </div>

      


      
  	</div>
  </section>
  
  <div class="clearfix"></div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script><script  src="../js/index.js"></script>
  <script>
  // JavaScript to handle navigation
  document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.navbar a');
    
    navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        const targetId = link.getAttribute('href');
        if (targetId && targetId !== '#') {
          // Navigate to the target URL
          window.location.href = targetId;
        }
      });
    });
  });

  document.addEventListener('DOMContentLoaded', () => {
  // Get the download button element
  const downloadButton = document.getElementById('download-button');
  
  // Add click event listener to the download button
  downloadButton.addEventListener('click', () => {
    // Replace 'path_to_your_resume.pdf' with the actual path to your PDF file
    const pdfUrl = '../includes/DelgadoErickResume.pdf';
    
    // Create an anchor element
    const link = document.createElement('a');
    
    // Set the href attribute to the PDF URL
    link.href = pdfUrl;
    
    // Set the download attribute with the desired filename
    link.download = 'DelgadoErickResume.pdf';
    
    // Append the anchor element to the document body
    document.body.appendChild(link);
    
    // Click the anchor element to trigger the download
    link.click();
    
    // Remove the anchor element from the document body
    document.body.removeChild(link);
  });
});
</script>

<br><br>
</body>
</html>
