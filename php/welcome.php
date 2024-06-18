<?php

require("header.php");

require("navbar.php");



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chezmajo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO email (email_client)
    VALUES (:email)");
    $stmt->bindParam(':email', $_POST["email"]);

    $stmt->execute();


    ?>

    <div class="succes">
        <img src="check (1).png" alt="check" class="check" height="30">

        <p>
            Votre adresse mail a été enregistrée avec succès!<br>
            Vous serez informés en temps réel des annonces du restaurant.<br>
            Merci pour votre intérêt!<br>
            <a href="index.php">Retourner a l'acceuil</a>
        </p>
    </div>


    <?php

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

require("footer.php");

?>