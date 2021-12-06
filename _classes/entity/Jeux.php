<?php

class Jeux{

    // attribut

    protected $jeuId;
    protected $nom;
    protected $description;
    protected $image_name;
    

    // constructeur

    public function __construct(string $nom, string $description, string $image_name)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->image_name = $image_name;     
    }
    /**
     * Get the value of jeuId
     */ 
    public function getJeuId()
    {
        return $this->jeuId;
    }

    /**
     * Set the value of jeuId
     *
     * @return  self
     */ 
    public function setJeuId($jeuId)
    {
        $this->jeuId = $jeuId;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image_name
     */ 
    public function getImage_name()
    {
        return $this->image_name;
    }

    /**
     * Set the value of image_name
     *
     * @return  self
     */ 
    public function setImage_name($image_name)
    {
        $this->image_name = $image_name;

        return $this;
    }


}

?>