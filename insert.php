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

    $codArticle= "li";
    $NomArticle="car";
    $codArticle=mysql_real_escape_string($conn, $codArticle);
    $NomArticle=mysql_real_escape_string($conn,$NomArticle);
    $PrixArticle=1981;
    $Stock=21;

// $sql= "INSERT INTO `articles`(`codearticle`, `nomarticle`, `prix`, `stock`) VALUES
//  ("."'".$codArticl."'".","."'".$NomArticle."'".",".$PrixArticle.",".$Stock.")";
$sql= "INSERT INTO `articles`(`codearticle`, `nomarticle`, `prix`, `stock`) VALUES
  ('{$codArticle}','{$NomArticle}',{$PrixArticle},{$Stock})";
 
 //echo $sql;
 if(mysqli_query($conn,$sql)&&mysqli_affected_rows($conn)>0){

    echo " new ligne a été ajouter";
 }else{
     echo "ERROR: ".$sql."<br>". mysqli_error($conn);
 }
?>



<?php
// a chaque fois connect il faut fermer la connection a la fin !!!!! 
mysqli_close($conn);
?>