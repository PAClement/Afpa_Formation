<?php
require_once "Connexion.php";


class ModelContact
{
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $tel;

    public function __construct($id = null, $nom = null, $prenom = null, $mail = null, $tel = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
    }


    function listeContacts()
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
          SELECT * FROM contacts ;
        ");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    function ajoutContact($nom, $prenom, $mail, $tel)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
            INSERT INTO `contact` VALUES (null,?,?,?,?)
        ");
        return $requete->execute($nom, $prenom, $mail, $tel);
    }


    /*
  
  GETTERS ET SETTERS

  */

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

    public function getMail()
    {
        return $this->mail;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setId($id)
    {
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

    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
        return $this;
    }
}
