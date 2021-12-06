<?php 

class JeuxRepository{

    //attribut

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function findall()
    {   
        try
        {
            return $this->pdo->query("SELECT * FROM jeux");
        }
        catch(PDOException $e)
        {
            echo "erreur Query : " . $e->getMessage();
        }
    }
    public function find($jeuId) {
        try {
            return $this->pdo->query("SELECT * FROM jeux WHERE id = $jeuId;");
        }catch(PDOException $e)
        {
            echo "erreur Query : " . $e->getMessage();
        }
    }

}

?>