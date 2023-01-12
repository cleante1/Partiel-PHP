<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier l'employé : <?= $row['nom'] ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="">
            <label>Prénom</label>
            <input type="text" name="prenom" value="">
            <label>âge</label>
            <input type="number" name="age" value="">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>


    <?php
include "connexion.php"; // pour se connecter a la base de données

$id = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM utilisateurs WHERE id = :id");
$query->execute(['id' => $id]);
$row = $query->fetch();

if(isset($_POST['button'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    $query = $pdo->prepare("UPDATE utilisateurs SET nom = :nom, prenom = :prenom, age = :age WHERE id = :id");
    $query->execute(['nom' => $nom, 'prenom' => $prenom, 'age' => $age, 'id' => $id]);

    header("location:index.php");
    exit();
}
?>




</body>

</html

