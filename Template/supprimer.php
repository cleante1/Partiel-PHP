
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "informations";
  
  // connexion a la base de données
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  //récupération de l'id dans le lien
  $id = $_GET['id'];
  
  //requête de suppression
  $sql = "DELETE FROM utilisateurs WHERE id = $id";
  
  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
  } else {
      echo "Error: " . $conn->error;
  }
  
  //redirection vers la page index.php
  header("Location: index.php");


  ?>




  