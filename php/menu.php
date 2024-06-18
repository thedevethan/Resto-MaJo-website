<?php

require("header.php");


?>

<div class="menucontainer">
    <p class="menu">Nos spécialités</p>
    <img src="dinner.png" alt="dinner" height="30">
</div>

<?php

echo '<div class="hrmenu"></div>';

class Plat
{
    // Les attributs de la classe
    public $name;
    public $price;
    public $description;
    public $image;

    // Le constructeur de la classe
    public function __construct($name = "", $price = "", $description = "", $image = "")
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }

    // Les méthodes de la classe

    public function Card()
    {
?>

        <div class="card">

            <img <?php echo "src= $this->image"; ?> alt="pic_image" height="130">

            <p class="name">
                <?php echo $this->name; ?> <br>
            </p>

            <p class="price">
                <?php echo $this->price; ?> CFA
            </p>

        </div>

    <?php
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chezmajo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("SELECT * FROM plat");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($results as $column) {
        $tab_name[] = $column->name; // Accéder aux données de la colonne par son nom
        $tab_price[] = $column->price;
        $tab_image[] = $column->image;
    }


    $plat = new Plat();

    ?>

    <div class="card_menu d-flex flex-wrap">
        <?php
        for ($i = 0; $i < count($tab_name); $i++) {
            $plat->name = $tab_name[$i];
            $plat->price = $tab_price[$i];
            $plat->image = $tab_image[$i];
            
            $plat->Card();
        }
        ?>
    </div>

    <div class="voir">
        <a href="#">Voir plus</a>
    </div>

    <?php

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>