<?php

echo 'POO : <br>';

class Vehicule
{
    public $marque;
    public $modele;
    public $couleur;
    public $nbRoues;
    public $puissance;
    public $vitesse = 0;

    const MESSAGE = "Ceci est un véhicule";

    // un attribut statique peut etre utilisé sans avoir besoin d’instancier un objet de sa classe.
    // On l’appelle attribut de classe parce qu’il ne concerne pas un objet en particulier mais il concerne toute la classe. On le declare avec le mot cle static.
    public static $nbUnitesVendues = 0;

    public function rouler()
    {
        $this->vitesse = 1;
        echo "Le véhicule roule<br>";
    }

    public function accelerer($v)
    {
        $this->vitesse += $v;
        echo "Le véhicule accélère<br>";
        echo "La nouvelle vitesse : $this->vitesse<br>";
    }

    public function freiner($v)
    {
        $this->vitesse -= $v;
        echo "Le véhicule freine<br>";
        echo "La nouvelle vitesse : $this->vitesse<br>";
    }

    //     pour accéder à une constante à l’intérieur de sa classe, on peut utiliser deux syntaxes différentes
    // self ::CONSTANTE  ou NomClasse :: CONSTANTE

    public function getConstante()
    {
        echo self::MESSAGE;
        echo Vehicule::MESSAGE;
    }

    // pour accéder à un attribut statique de l’intérieur, on peut utiliser self ::$attibutStatique ou NomClasse :: $attibutStatique
    public function getStatic()
    {
        echo self::$nbUnitesVendues;
        echo "<br>";
        echo Vehicule::$nbUnitesVendues;
    }

    // on definit la fonction vendre()
    public function vendre($nb)
    {
        Vehicule::$nbUnitesVendues += $nb;
    }

    //     une methode statique peut etre appelée sans avoir créé d’instance au prealable. Elle est déclarée avec le mot clé static.
    // Pour accéder à une methode statique à l’intérieur de sa classe, on utilise self ::nomMethode() ou NomClasse :: nomMethode().
    public static function methodeStatique()
    {
        echo "methode statique implémentée";
    }

    public function appelMethodeStatique()
    {
        self::methodeStatique();
        Vehicule::methodeStatique();
        echo "methode statique appelée";
    }
}

// instanciation de la classe Vehicule
$voiture = new Vehicule(); //  $voiture est une instance de la classe Vehicule
$camion = new Vehicule(); //  $camion est une instance de la classe Vehicule

$voiture->rouler();
$voiture->accelerer(30);
$voiture->accelerer(20);
$voiture->freiner(10);

$camion->rouler();
$camion->accelerer(89);

// Pour accéder à la constante de l’extérieur, on utilise la 2eme syntaxe
echo Vehicule::MESSAGE;

// var_dump($voiture instanceof Vehicule); // pour verifier si $voiture est une instance de la classe Vehicule

// pour accéder à l'attribut statique de l’extérieur, on utilise NomClasse ::$nomAttribut  (on garde le $ apres les ::)
echo Vehicule::$nbUnitesVendues;

//=============
// nbUnitesVendues est initialisé à 0
echo "<br>vendre 20 voitures";
$voiture->vendre(20);
echo "<br>unités vendues : ";
$voiture->getStatic(); //20

echo "<br>vendre 30 camions : ";
$camion->vendre(30);
echo "<br>unités vendues : ";
$camion->getStatic(); //50 (20 + 30)

echo "<br>unités vendues : ";
$voiture->getStatic(); //50
// En 1er lieu, on a vendu 20 voitures, donc nbUnitesVendues devient 20 dansla totalité de la classe, donc dans TOUS LES OBJETS, 
// ensuite on vend encore 30 camions, donc le nombre nbUnitesVendues devient 50 
// pour la totalité de la classe (donc 50 pour la voiture et pour le camion, et non pas 20 et 30 respectivement).

// Pour accéder à la méthode statique de l’extérieur, on utilise NomClasse :: nomMethode().
Vehicule::methodeStatique();
// Dans le cas d’héritage, la methode statique doit etre déclarée public 
//ou protected pour pouvoir etre utilsée dans d’autres classes.

//------------------------------------------------------------------------------

class Personne
{
    public $nom = "HIDRI";
    public $prenom;
    public $age;
    protected $nomMedecin = "Docteur Le Grand";
    private $taille = 1.5;
}

class Enfant extends Personne
{
    public $nbPoucettes;

    public function getNom()
    {
        echo "<br>" . $this->nom;  // accessible partout car c'est public
    }

    public function getNomMedecin()
    {
        echo "<br>" . $this->nomMedecin; // accessible dans la classe fille
    }

    public function getTaille()
    {
        echo "<br>" . $this->taille; // erreur car attribut privé
    }
}

class Adulte extends Personne
{
    public  $profession;
}

$p1 = new Personne();
echo "<br>" . $p1->nom; // OK
echo "<br>" . $p1->nomMedecin; // erreur car on n'est pas dans une classe fille
echo "<br>" . $p1->taille; // erreur car c'est privé

$e1 = new Enfant();
$e1->getNom();
$e1->getNomMedecin();
$e1->getTaille();
