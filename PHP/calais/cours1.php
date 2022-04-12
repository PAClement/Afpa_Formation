<?php
session_start();
?>

<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page</h1>

    <?php

    // class Car
    // {
    //     public $color;
    //     public $model;

    //     public function __construct($color, $model)
    //     {
    //         $this->color = $color;
    //         $this->model = $model;
    //     }

    //     public function message()
    //     {
    //         return "My car is a " . $this->color . " !";
    //     }

    //     public function warning()
    //     {
    //         return "attention le model est " . $this->model;
    //     }
    // }

    // $myCar = new Car("black", "Volvo");
    // echo $myCar->message();
    // echo "<br>";
    // echo $myCar->warning();
    // echo '<br><br><br><br><br>';

    // $voitures = array(
    //     array("marque" => "Volvo", "vendus" => 22, "reste" => 18),
    //     array("marque" => "BMW", "vendus" => 15, "reste" => 13),
    //     array("marque" => "Saab", "vendus" => 5, "reste" => 2),
    //     array("marque" => "Land Rover", "vendus" => 17, "reste" => 15)
    // );

    // //var_dump($voitures);

    // echo 'Land Rover vendu = ' . $voitures[3]["vendus"];
    // $voitures[2]["vendus"] += 20;

    // 
    ?>

    <!-- <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nom: <input type="text" name="nom"> <br><br>
        prenom: <input type="text" name="prenom">
        <input type="submit">
        </form> -->

    <?php
    // echo $_SERVER["REQUEST_METHOD"] . "  --  ";

    // echo $_GET['prenom'] . " " . $_GET['nom'];
    // 
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

    ?>

    <!--       _
       .__(.)< (MEOW)
        \___)   
 ~~~~~~~~~~~~~~~~~~-->


</body>

</html>