
<?php include "captcha.php" ?>

<?php
session_start();

$duration=180;

$_SESSION['duration']=$duration;
$_SESSION["start_time"]=date("Y-m-d H:i:s");

$end_time=date("Y-m-d H:i:s", strtotime('+'.$_SESSION["duration"].'seconds',strtotime($_SESSION["start_time"])));

$_SESSION["end_time"]=$end_time;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso16.css" /> 
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Register</title>
</head>
<body>





<form action="feedback.php" method="POST">
  <div class="container">
    <h1>Register </h1>
    
    <div>
    
           
           <div id="response" style="Text-align:right;float:left"></div>
           
           
</div>
   
   
<script type="text/javascript">

setInterval(function(){

    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","response.php",false);
    xmlhttp.send(null);
    document.getElementById("response").innerHTML=xmlhttp.responseText;
    if(xmlhttp.responseText=="00:00"){
        window.location="first.php";
    }

},1000);



</script>

    
    <hr>

    <br><br>
    <div class="form-group">
    <label for="name"><b>Name</b></label>
    <input  class="form-control" type="text" placeholder="Enter Name" name="name" id="name" required>
    </div>
   
    <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input class="form-control" type="email" placeholder="Enter Email" name="email" id="email" required>
    </div>

    <div class="form-group">
    <label for="bod"><b>Date Of Birth</b></label>
    <input class="form-control" type="date" placeholder="dd-mm-yyyy" name="dob" id="dob" required>
    </div>

    
    <div class="form-group ">
      <label  for="message">About yourself</label>
       <textarea type="text"class="form-control" cols="40" id="message" name="message" rows="3"></textarea>
      
</div>
     <div class="formgroup">
     
    <label for="captcha" class="add_space">Please Enter the Captcha Text:</label>
    
 <button type="button" class="btn btn-primary disabled add_space"><?php echo $captcha_string; ?></button>
  
 <br>
    <input type="text" class="form-control id="captcha" name="captcha_challenge" pattern="[A-Z]{6}" style="width:100px;" required>   

     </div>
    <button type="submit" class="registerbtn">Submit</button>
  

 
</form>

    
</body>
</html>


<?php
 
 

?>


