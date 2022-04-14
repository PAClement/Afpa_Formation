<?php
require_once "Connexion.php";


class ModelAdmin
{
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $tel;
    private $address;

    public function __construct($id = null, $nom = null, $prenom = null, $mail = null, $address = null, $tel = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->address = $address;
    }

    function getAllUser()
    {

        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT
            u.id, u.mail, u.password, uF.nom, uF.prenom, uF.address, uF.tel, uF.date_inscription, r.role
        FROM
            users u
        INNER JOIN user_info uF ON uF.user_id = u.id
        INNER JOIN roles r ON u.role_id = r.id       
    ");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
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

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}
