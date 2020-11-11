<?php
    //require('includes/function.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

       if ( isset($_POST['title'], $_POST['autor'], $_POST['cellule'], $_POST['article']) AND !empty($_POST['autor']) AND !empty($_POST['title']) AND !empty($_POST['cellule'])  AND !empty($_POST['article']) AND !empty($_POST['progressBar'])){

           //$autor = htmlspecialchars($_POST['autor']);
           //$title = $_POST['title'];
          // $cellule = $_POST['cellule'];
          // $article = htmlspecialchars($_POST['article']);
          // $progressBar = htmlspecialchars($_POST['progressBar']);
         
           //if(saveArticle($title, $autor, $cellule, $article, $new_name, $progressBar)){   }
           
            $messageError = '';
}
           
       else{
       
          $message = "Veuiller remplir tout les champs";
       }
  }

    

    else{
        $message = " Veuiller remplir le formulaire";
    }


   require('view/importation.view.php');
?>
