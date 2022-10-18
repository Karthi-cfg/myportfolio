 <!-- nav bar start -->
 <!-- <nav class="navbar  navbar-expand-lg ">
    <div class="container-fluid pt-3">
    <a href="#" class="navbar-brand text-light fs-3 ms-3"> <img src="/portfolio/karthi.jpg" id="pic" width="60" height="60" alt="my pic" style="border-radius: 50% !important; padding:10px;">Karthikeyan</a>
   
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="color:white;">
    <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
      </svg></span>
  </button>
        <div class="collapse navbar-collapse navs" id="navbarCollapse"  >
            <ul class="navbar-nav nav-ul" >
                <li class="nav-item px-3 "> 
                  <a class="bg nav-link " href="/portfolio2/index.php">Home</a>
                 </li>
                <li class=" nav-item px-3 ">
                  <a class="bg nav-link " href="/portfolio2/about.php">About</a>
                </li>
                <li class="nav-item px-3 "><a class="bg nav-link " href="/portfolio2/skills.php">Skills</a>
              </li>
                <li class="nav-item px-3 "><a class="bg nav-link  " href="/portfolio2/projects.php">Projects</a>
              </li> 
                <li class="nav-item px-3 "><a class="bg nav-link  " href="/portfolio2/contact.php">Contact me</a>
              </li> 
    </ul>  
  </div>
  </div>
  </nav> -->
<!-- nav bar end -->

<!-- contact form -->
<style>
* {
    box-sizing: border-box;
  }
  
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }
  input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  input[type=number], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #007ced;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }
  
  /* input[type=submit]:hover {
    background-color: #45a049;
  } */
  
  .container {
    border-radius: 5px;
    background-color: #2c3333;
    padding: 20px;
  }
  
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .popup{
    width: 400px;
    background-color: #fff;
    border-radius: 6px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align:center;
    padding: 0 30px 30px;
/* visibility: hidden; */
transition: transform 0.4s, top 0.4s;
  }

  
.popup h2 {
font-size: 38px;
font-weight: 500;
margin: 30px 0 10px;
}

.popup button{
  width: 100%;
  margin-top: 50px;
  padding: 10px 0;
  background-color: #007ced;
  color: #fff;
  border: 0;
  outline: none;
  font-size: 18px;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 0 5px 5px rgba(0,0, 0, 0.2);
}

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
</style>
</head>
<section id="contact">
<div class="container mt-5">
<h2 style="color:white;">Contact Me</h2>
  <form method="post"id="form">
    <div class="row">
      <div class="col-25">
        <label for="fname"style="color:white;">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="from_name" id="from_name" placeholder="Your name..."style="background-color:#d5d5d5;" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"style="color:white;">Email</label>
      </div>
      <div class="col-75">
        <input type="text" name="email" id="email" placeholder="Enter your email..."style="background-color:#d5d5d5;" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"style="color:white;">mobile no</label>
      </div>
      <div class="col-75">
        <input type="text" name="number" id="number" placeholder="Enter your mobile number..."style="background-color:#d5d5d5;" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject"style="color:white;">Subject</label>
      </div>
      <div class="col-75">
        <textarea type="text" name="message" id="message" placeholder="Write something..." style="height:200px;background-color:#d5d5d5;" required></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" id="button" value="Send Email" >
      <!-- <div class="popup" id="popup">
      <i class="bi bi-arrow-through-heart-fill heart" style="color: #007ced; font-size:80px;"></i>
      <h2>Thank you!</h2>
      <p>Your message has been successfully submited. Thanks!</p>
      <button type="button">OK</button>
      </div> -->
    </div>
  </form>
</div>
</section>
<?php

print("<script>
const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'default_service';
   const templateID = 'template_pmt57lo';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
       alert('Sent!');
    }, (err) => {
      btn.value = 'Send Email';
      alert(JSON.stringify(err));
    });
});


</script>");

?>