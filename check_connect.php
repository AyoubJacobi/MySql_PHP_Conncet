
 <?php
 // méthide de connection procedure 
$hostname ="localhost";
$username = "Ayoub";
$password = "Ayoub";
$dbname= "gestioncommande";

$conn =mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    
        die("connection failed:".mysqli_connect_error());
    }else {echo "connect";}

$query= "SELECT * FROM articles WHERE 1";
$result=mysqli_query($conn,$query);
// if vérifier esk ya des lignes ou pas 
if(mysqli_num_rows($result)>0){
    while($row= mysqli_fetch_assoc($result)){

        echo "id: ".$row["codearticle"]." "."nom: ".$row["nomarticle"]."  "."prix: ".$row["prix"]."stock :".$row["stock"];
        echo "<br>";
    }
    // mysqli_fetch_row il prend les clé avec des nombres 
    // while($row= mysqli_fetch_row($result)){
        
    //             echo "id: ".$row[0]." "."nom: ".$row[1]."  "."prix: ".$row[2]."stock :".$row[3];
    //             echo "<br>";
    //         }
    // mysqli_fetch_array on peut utilisé les deux façons possible soit row ou bien assoc
    //  efficace c'est assoc
}else {
    echo "ya aucun ligne a lire ";
};


?> 

<?php
// méthode de connection programing POO 
// $hostname ="localhost";
// $username = "Ayoub";
// $password = "Ayoub";
// $dbname= "gestioncommande";

// $conn = new mysqli($hostname,$username,$password,$dbname);
// if($conn->connect_error){

//     die("connection failed:".$conn->connect_error);
// }else {echo "connect";} 

// ?>
<?php
// a chaque fois connect il faut fermer la connection a la fin !!!!! 
mysqli_close($conn);
?>