<?php
 // méthide de connection procedure 
$hostname ="localhost";
$username = "Ayoub";
$password = "Ayoub";
$dbname= "gestioncommande";

$conn =mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    
        die("connection failed:".mysqli_connect_error());
    }else {echo " connect <br> ";}
    
    $codArticl= "Tsh";
    $NomArticle="voiture";
    $PrixArticle=198000;
    $Stock=21;

$sql="UPDATE `articles` set `nomarticle`="."'".$NomArticle."'".",`prix`=".$PrixArticle.",`stock`=".$Stock."
 where`codearticle`="."'".$codArticl."';";
// echo $sql;
if(mysqli_query($conn,$sql)){
    
        echo "updated rows:" . mysqli_affected_rows($conn);
     }else{
         echo "ERROR: ".$sql."<br>". mysqli_error($conn);
     }


?>


 <?php
// a chaque fois connect il faut fermer la connection a la fin !!!!! 
mysqli_close($conn);
 ?>