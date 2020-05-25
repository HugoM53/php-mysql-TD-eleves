<html>
    <head>
    <meta http-esquiv="Content-type" content="text/html; charset=utf-8"/>
      <title>TD1-SIN 2020</title>
  </head>
  <body>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="tabl_famille";
    
    $conn= new mysqli($servername, $username, $password, $dbname);
   $conn->set_charset('utf8');
    
    if ($conn->connect_error){
      die("Connection failed:". $conn->connect_error);
    }
    
    echo "Q1: tous les éléments de la table sans condition:"."<br>"."<br>";
   $sql = "SELECT * FROM famille_tbl";
  $result = $conn->query($sql);

    if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo $row["nom"]. " " . $row["prenom"]. " (" . $row["statut"]."), date de naissance : " . $row["date"]."<br>"
}
} else {
echo "0 results";
}

 echo "<br>"."<br>";

 echo "Q2: liste en ordre décroissant du prénom:"."<br>"."<br>";

 $sql = "SELECT * FROM famille_tbl ORDER BY prenom DESC";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo $row["nom"]. " " . $row["prenom"]. " (" . $row["statut"]."), date de naissance : " . $row["date"]."<br>"
}
} else {
echo "0 results";
}
 echo "<br>"."<br>";

 echo "Q3: liste avec les dates antérieures à 1960-01-01:"."<br>"."<br>";

 $sql = "SELECT * FROM famille_tbl WHERE date<'1960-01-01'";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["nom"]. " " . $row["prenom"]. " (" . $row["statut"]."), date de naissance : " . $row["date"]."<br>"
}
} else {
echo "0 results";
}

$conn->close();
?>
</body>
</html>
