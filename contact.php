<?php include('nav.php')?>


<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">




<div class="container">
<div class="contact-section">
<h2 class="ct-section-head" style="padding-top: 25px;">
   CONTACT US
</h2>
<div class="row contact-fields">
<div class="col-md-8 left-form">
   <form method="post" action="" style="padding-top: 25px; padding-right: 80px;">
      <div class="form-group">
         <label class="sr-only" for="fname">First Name *</label>
         <input class="required form-control" id="fname" name="fname" placeholder="First Name&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="lname">Last Name *</label>
         <input class="required form-control" id="lname" name="lname" placeholder="Last Name&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="contactEmail">Email *</label>
         <input class="required form-control h5-email" id="contactEmail" name="contactEmail" placeholder="Email&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="contactPhone">Phone *</label>
         <input class="required form-control h5-phone" id="contactPhone" name="contactPhone" placeholder="Phone&nbsp;*" type="text">
      </div>
      <div class="form-group">
         <label class="sr-only" for="comment">Type your message here</label>
         <textarea class="required form-control" id="comment" name="comment" placeholder="Type your message here&nbsp;*" rows="6"></textarea>
      </div>
      <button class="btn btn-accent" type="submit">Submit</button>  
   </form>
</div>
<div class="col-md-4 contact-info">
<div class="socials">
   <h2>Socials</h2>
<a href="https://www.linkedin.com/in/7d1247c0d716e23119f93ed2978ccca31581495f853d8e47b945e5d6f4747b7b/" class="fa fa-linkedin" style="font-size: 30px;"></a>
&nbsp; 
<a href="https://github.com/pertempcent" class="fa fa-github" style="font-size: 30px;"></a>
</div>
<div class="phone">
   <h2>Call</h2>
   <a href="tel:+1234567890">9998887776</a>
</div>
<div class="email">
   <h2>Email</h2>
   <a href="mailto:info@decidedekalb.com">example@gmail.com</a>
</div>
<div class="location">
   <h2>Visit</h2>
   <p>Apartment A-101, skylark heights </br>
      123 generic Street </br>
      Andheri East, Mumbai </br>
      Maharastra, 400047
      <br>
   </p>
</div>