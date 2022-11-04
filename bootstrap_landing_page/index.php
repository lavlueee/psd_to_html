<?php

$con = new mysqli("localhost","root","","psdtohtml");
if($con->connect_error){
echo "Failed to connect to Mysql:".$con->connect_error;
exit();
}


$error =array();
$full_name= '';
$email ='';
$phone ='';
$message ='';

if(isset($_POST['submit'])){

  //echo "<pre>";
  //print_r($_POST);
 
 extract($_POST);

 if(empty($full_name)){
  $error["full_name"]="please type full name";

 }

 if(empty($email)){
  $error["email"]="please type email";
 }

 if(empty($phone)){
  $error["phone"]="please type phone";
 }

 if(empty($message)){
  $error["message"]="please type message";
 }
  
//// echo "<Pre>";
//print_r($error);
//die("stop");
if(count($error)==0) {
  //die("inside");
  $filed="";
  $filed.="full_name='$full_name'";
  $filed.=",email='$email'";
  $filed.=",phone='$phone'";
  $filed.=",message='$message'";
 

  $sqli="INSERT INTO contact SET ".$filed;
  $result = mysqli_query($con,$sqli);

  if($result){

    $error['success'] = "Data Successfully save database.";
   $successmsg= $error['success'];

    }else{
    $error['warning'] = "Data not save. something is woring!!";
   }



}



}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="30">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--The above 3 meta tags *must* come first in the head;any other head content must come *after* these tags-->
  <title>Bootstrap Example</title>
  <!--Bootstrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">

  
</head>
<body>

<!--NAVIGATION-->
<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a href="#" class="navbar-brand">CodeFuny.org</a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#header">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</div>

<!--END Navigation-->

<!--Header-->

<div id="header" class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 wow bounceInLeft">
        <h1>Responsive Web Design</h1>
        <p>Lorem ispum is simply dummy text of the printing and typesetting industry.Lorem ispum is simply dummy text of the printing and typesetting industry.Lorem ispum is simply dummy text of the printing and typesetting industry.Lorem ispum is simply dummy text of the printing and typesetting industry.Lorem ispum is simply dummy text of the printing and typesetting industry. </p>
        <button class="btn btn-lg btn-primary">Buy Now</button>
        <button class="btn btn-lg btn-success">View Detail</button>
      </div>
      <div class="col-lg-6 col-md-6 wow bounceInRight">
        <img src="images/responsive-web-design.png" alt="">
      </div>
    </div>
  </div>
</div>


<!--End Header-->

<!--SERVICES-->

<div id="services" class="services">
  <div class="container">
     <h2 class="wow fadeInUp">Services</h2>
     <p>Lorem ispum is simply dummy text of the printing and typesetting industry.</p>
     <div class="row">
         <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
           <i class="fa fa-desktop" aria-hidden="true"></i>
           <h4>Web Design</h4>
           <p>Lorem ispum is simply dummy text of the printing and typesetting industry.</p>
         </div>

         <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
           <i class="fa fa-mobile" aria-hidden="true"></i>
           <h4>Mobile App</h4>
           <p>Lorem ispum is simply dummy text of the printing and typesetting industry.</p>
         </div>

         <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
           <i class="fa fa-database" aria-hidden="true"></i>
           <h4>Database</h4>
           <p>Lorem ispum is simply dummy text of the printing and typesetting industry.</p>
         </div>
         <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
           <i class="fa fa-university" aria-hidden="true"></i>
           <h4>Consulting</h4>
           <p>Lorem ispum is simply dummy text of the printing and typesetting industry.</p>
         </div>

     </div>
  </div>
</div>


<!--END SERVICES-->

<!--PRICING-->


<div id="pricing" class="pricing">
  <div class="container">
    <div class="row">
      <h2 class="wow fadeInUp">Pricing</h2>
      <p>Lorem ispum is simply dummy text of the printing and typesetting industry</p>
      <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="0.8s">
        <div class="packages">
          <h4>Bronze</h4>
          <h1>9.99</h1>
          <b>Monthly</b>
          <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
          <hr>
          <li>100 Users</li>
          <li>SSL Certificate</li>
          <li>300GB Disckspace</li>
          <li>100 Email Address</li>
          <li>MySQL Database</li>
          <button class="btn btn-success">Get Started</button>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="1.2s">
        <div class="packages">
          <h4>Silver</h4>
          <h1>19.99</h1>
          <b>Monthly</b>
          <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
          <hr>
          <li>100 Users</li>
          <li>SSL Certificate</li>
          <li>300GB Disckspace</li>
          <li>100 Email Address</li>
          <li>MySQL Database</li>
          <button class="btn btn-success">Get Started</button>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="1.6s">
        <div class="packages">
          <h4>Gold</h4>
          <h1>29.99</h1>
          <b>Monthly</b>
          <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
          <hr>
          <li>100 Users</li>
          <li>SSL Certificate</li>
          <li>300GB Disckspace</li>
          <li>100 Email Address</li>
          <li>MySQL Database</li>
          <button class="btn btn-success">Get Started</button>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="2s">
        <div class="packages">
          <h4>Premium</h4>
          <h1>39.99</h1>
          <b>Monthly</b>
          <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
          <hr>
          <li>100 Users</li>
          <li>SSL Certificate</li>
          <li>300GB Disckspace</li>
          <li>100 Email Address</li>
          <li>MySQL Database</li>
          <button class="btn btn-success">Get Started</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!--END PRICING-->

<!--Team-->


<div id="team" class="team">
  <div class="container">
    <div class="row">
      <h2 class="wow fadeInUp">Meet our team</h2>
      <p>Lorem ispum is simply dummy text of the printing and typesetting</p>

      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="2s">
        <img src="images/team/team-1.jpg" class="img-circle" alt="">
        <h4>Ekramul Lavlu</h4>
        <b>CEO and Founder</b>
        <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
      </div>

      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
        <img src="images/team/team-2.jpg" class="img-circle" alt="">
        <h4>Ekramul Lavlu</h4>
        <b>CEO and Founder</b>
        <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
      </div>

      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
        <img src="images/team/team-3.jpg" class="img-circle" alt="">
        <h4>Ekramul Lavlu</h4>
        <b>CEO and Founder</b>
        <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
      </div>

      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
        <img src="images/team/team-4.jpg" class="img-circle" alt="">
        <h4>Ekramul Lavlu</h4>
        <b>CEO and Founder</b>
        <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
      </div>

    </div>
  </div>
</div>

<!--End Team-->

<!--Client-->

<div id="clients" class="clients">
  <div class="container">
    <div class="row">
      <h2 class="wow fadeInUp">Trusted by</h2>
      <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="2s">
        <li><img src="images/clients/client1.png" alt=""></li>
      </div>

      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
        <li><img src="images/clients/client2.png" alt=""></li>
      </div>

      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
        <li><img src="images/clients/client3.png" alt=""></li>
      </div>

      <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
        <li><img src="images/clients/client4.png" alt=""></li>
      </div>


    </div>
  </div>
</div>


<!--End Client-->

<!--Contact-->

<div id="contact" class="contact">
  <div class="container">
    <div class="row">
      <form method="POST" action="">
      <h2 class="wow fadeInUp">Contact</h2>



      <?php if(!empty($error['success'])){
    
    echo '<div class="alert alert-success">';
     echo '<strong>Success!'.$successmsg.'</strong>';
   echo '</div>';
  }?>
 
   <?php if(!empty($error['warning'])): ?>
     <div class="alert alert-warning">
     <strong>Warning!<?php echo $error['warning'];?></strong> .
   </div>
   <?php endif;  ?>


      <p>Lorem ispum is simply dummy text of the printing and typesetting</p>
      <div class="col-lg-6 col-md-6">
        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
          <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
          <input name="full_name" type="text" class="form-control" value="<?php if(!empty($full_name)){ echo $full_name; } ?>" aria-describedby="sizaing-addon1" placeholder="Full Name" >
       <span style="color:red;"> <?php if(!empty($error['full_name'])):  echo $error['full_name']; endif; ?></span>
        
        </div>

        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
          <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
          <input name="email" type="email" class="form-control" aria-describedby="sizaing-addon1" placeholder="Email Address" >
          <span style="color:red;"> <?php if(!empty($error['email'])):  echo $error['email']; endif; ?></span>
        </div>

        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
          <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
          <input name="phone" type="tel" class="form-control" aria-describedby="sizaing-addon1" placeholder="Phone Number">
          <span style="color:red;"> <?php if(!empty($error['phone'])):  echo $error['phone']; endif; ?></span>
        </div>

      </div>
      <div class="col-lg-6 col-md-6">
        <div class="input-group wow fadeInUp" data-wow-delay="2s">
          <textarea name="message" id="" cols="80" rows="6" class="form-control"></textarea>
          <span style="color:red;"> <?php if(!empty($error['message'])):  echo $error['message']; endif; ?></span>
        </div>
        <button class="btn btn-lg wow fadeInUp" type="submit" name="submit" data-wow-delay="2.4s"">Submit Your Message</button>
      </div>
    </div>
</form>
  </div>
</div>


<!--End Contact-->

<!--Footer-->

<div id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <h4>Contuct Us</h4>
        <p><i class="fa fa-home" aria-hidden="true">&nbsp;&nbsp;298-299/A,Tilpapara,Khilgao,Dhaka-1219</i></p>
        <p><i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;lavlut31@gmail.com</i></p>
        <p><i class="fa fa-phone" aria-hidden="true">&nbsp;&nbsp;+8801812745201</i></p>
        <p><i class="fa fa-globe" aria-hidden="true">&nbsp;&nbsp;<a href="#">www.lavlu.me</a></i></p>
        <p><i class="fa fa-globe" aria-hidden="true">&nbsp;&nbsp;<a href="#">www.codefuny.org</a></i></p>
      </div>
      <div class="col-lg-4 col-md-4">
        <h4>About</h4>
        <p><i class="fa fa-square-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;About Us</i></p>
        <p><i class="fa fa-square-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Privacy</i></p>
        <p><i class="fa fa-square-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Term & Condition</i></p>
      </div>
      <div class="col-lg-4 col-md-4">
        <h4>Stay in touch</h4>
        <i class="social fa fa-facebook" aria-hidden="true"></i>
        <i class="social fa fa-twitter" aria-hidden="true"></i>
        <i class="social fa fa-linkedin" aria-hidden="true"></i>
        <i class="social fa fa-youtube" aria-hidden="true"></i>
        <i class="social fa fa-github" aria-hidden="true"></i><br>
        <input type="email" placeholder="Subscriber For Updates" name=""><button class="btn btn-success">Subscribe</button>

      </div>
    </div>
  </div>
</div>


<!--End Footer-->


<!--Jquery (Necessary for bootstrap javascript plugin)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Include all compiled plugins (below) or include individual files as needed-->

 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
