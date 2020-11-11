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
      <div class="row">
       <div class="col-sm-12 col-md-3 col-lg-3"></div>
      <div class="col-sm-12 col-md-6 col-lg-6" style="padding:5px;">
        <h3 class="text-center" >login</h3>
        <?php
          if(isset($_GET['message']) ){
            $message= $_GET['message'];
            echo('<div>'.$message.'</div>');
          }
          else{ /// echo('passss'); 
          }
        ?>  
          <form action='pageview.php' method='POST'>
            <label for="LOGIN"> Votre login </label>
            <input type="text" name="LOGIN" class="form-control" placeholder="LOGIN">
            <label for="PWD">Votre mot de pass</label>
             <input type="password" name="PWD" class="form-control" placeholder="PWD">

             <input type='submit'  class='btn btn-primary btn-sm' value='Connect'/>                                                              
          </form>
      </div>
       <div class="col-sm-12 col-md-3 col-lg-3"></div>
      </div>


    </div>
   
    <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

</body>
</html>