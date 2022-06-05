<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>testJob</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
  }
  body{
    height: :100vh;
    background: linear-gradient(90deg,cyan,grey);
    }
    .search-container{
      position: relative;
    }
    .input{
padding: 2px;
 margin-left: 190px;
 outline: none;
 border: none;
 font-size: inherit;
    }
    .button{
position: absolute;
top: 0;
margin-top: 6px;
margin-right: 6px;
right: 0;
height: 35px;
border-radius:50%;
background: linear-gradient(90deg,black,grey);
color: white;
    }
  </style>
<body>
    <div class="container">
    <h1 class="display-3">la listes des travaileurs de l'entreprise</h1> 
    <p class="lead">nous trouvons la listes de tous les employés de ItssolutionEntreprener</p>  
    </div>
       <span class="search-container">
    <form method="GET">
   
    <input type="search"  name="search" class="input" placeholder="recherches personnelles" id="search" icon="search" style="">
      <button type="submit"  class="button">Q</button>
    </form>
    </span>
<i class="fas fa-search" style="color:cyan; opacity: 0.1;" ></i>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=testjob',"root","");
$req = $bdd->query('SELECT distinct prenom,nom FROM personnelles');
$req = $bdd->query('SELECT distinct prenom,nom,tel,postes FROM personnelles  ORDER BY id DESC');
	
if(isset($_GET['search']) AND !empty($_GET['search'])){
$search = htmlspecialchars($_GET['search']);
    $req = $bdd->query('SELECT prenom,nom,tel,postes,images FROM personnelles  WHERE prenom LIKE "%'.$search.'%"  ORDER BY id DESC');	

  ?>
   <?php
					while($donnee = $req->fetch()){ ?>
		        <span id="yup">
                <img id="img" class="img-fluid img-thumbnail" src="ImagesPersonnelles/<?= $donnee['images']; ?>" alt="">
                    <?php 
                $search = $_GET['search'];
                echo $donnee['prenom']," ",$donnee['nom']," ",$donnee['tel']," ",$donnee['postes'];  ?> 
                </span>
                <?php
            }
            ?>
		       <?php 
}
		   ?>
  <style>
      #img{
          width: 100px;
          height: 100px;
      }
      #yup{
          text-align: center;
          float: right;
      }
      #search{
         
          width: 300px;
          height: 50px;
          float: left;
          border-radius: 15px;
          /*background: url('search-line.png') no-repeat right;*/
          padding-left: 20px;
          margin-bottom: 5px;
      }
  
  </style>
  <div class="container">
  <table class="table">
      <th>Noms</th>
      <th>Prenoms</th>
      <th>Telephone</th>
      <th>Postes</th>
      <th>Images</th>
     
  </div>
  
          <?php
$req = $bdd->query('SELECT nom, prenom, tel, postes, images FROM personnelles order by nom asc');
      while ($donnees = $req->fetch()){
          ?>
 <tr>
          <td><?php echo ucfirst($donnees['nom']);?></td>
          <td><?php echo ucfirst($donnees['prenom']);?></td>
          <td><?php echo $donnees['tel'];?></td>
          <td><?php echo $donnees['postes'];?></td>
          <td><?php echo $donnees['images'];?></td>
          <?php
}
?>
      </tr>
  </table>


  <style>
      #intervalle
  </style>
</body>
<script>
var variable1 = "tyg";
var variable2 = variable1.toString();
alert("type de variable2:"+(typeof variable1));
</script>
</html>