<?php
// La regle de sécurité implique que tous les attributs de l’objet soient en PRIVE (private), à l’exception des attributs qu’on veut les faire hériter dans les classes filles, on les met en protected.
// ==> ce qui implique que les données deviennent non accessibles en lecture et en écriture en dehors de la classe.
// La solution : prevoir ce qu’on appelle des getters et des setters qui sont des fonctions publiques (qu’on peut appeler de l’extérieur) qui ont accès aux attributs privés dans la meme classe.
class User
{
    private $id;
    private $nom;
    private $prenom;

    public function __construct($id, $nom, $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    // le param est la nouvelle valeur
    public function setId($id)
    {
        // $this->id : id de l'objet  (la valeur actuelle)
        // $id : la nouvelle valeur
        $this->id = $id;
        return $this;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
}

$p1 = new User(100, "paquentin", "clement");
echo $p1->getId();
echo $p1->getNom();
echo $p1->getPrenom();
// $p1->setId(10);

// $p1->setId(10)->setNom("Paquentin")->setPrenom("Clément");


//-----------------------------------------------

/*Le constructeur permet d’initialiser les attributs de l’objet lors de L’INSTANCIATION.
On n’est pas oblige d’initialiser tous les attributs.
NB : ce N’EST PAS le constructeur qui permet de créer l’objet, la création se fait avec l’opérateur new, le constructeur permet SEULEMENT d’INITIALISER les valeurs de ses attributs

public function __construct($id, $nom, $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

*/