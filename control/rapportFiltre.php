<?php
 require('composents/function.php');

  if($_POST['filtre'] == 'date'){
  
    $donnees_date= getarticle();
?>

<h3>Selon la date</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Article</th>
      <th scope="col">NbreVendu</th>
      <th scope="col">prixAU</th>
      <th scope="col">prixAT</th>
    </tr>
  </thead>
  <tbody>
    
<?php foreach ($donnees_date as $item){
    ?>
    <tr>
      <th scope="row"><?=$item['id']?></th>
      <td><?=$item['date_m']?></td>
      <td><?=$item['article']?></td>
      <td><?=$item['nbvendu']?></td>
       <td><?=$item['prixAU']?></td>
       <td><?=$item['prixAT']?></td>
       
    </tr>
<?php
 }
 ?>
   </tbody>
</table>
<button class="btn btn-primary">Imprimer</button>
<?php  
}
 
    elseif ($_POST['filtre'] == 'article') {
        require('exportation.php');

    }

    else{
        require('exportation.php');

    }

?>