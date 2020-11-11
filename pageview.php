<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon/favicon.ico">
    <title>MUHESI</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <!-- <title> MyProject</title> -->
</head>
<body>

    <div class="container">
      <?php

      $login ='mo';
       $pwd ='1';

  if(isset($_POST['LOGIN'])AND !empty($_POST['LOGIN']) AND isset($_POST['PWD'])AND !empty($_POST['PWD'])){
     $log = $_POST['LOGIN'];
  $pd =$_POST['PWD'];
    if ($login == $log AND  $pwd == $pd ){
      
     // echo(' Connected <strong></stron>'.$login.'</strong>');
      //require('menub.php');
      //require('section.php');

       //require('composents/uploadview.php');
      

       }
    else{
      $_POST['LOGIN'] ="";
      $_POST['PWD']= "";
      $message ="Mauvais login ou paas word!";
      	//header('Location:default.php?$message');
     }
      }
       require('control/application.php');
      ?>


    </div>
   
    <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
