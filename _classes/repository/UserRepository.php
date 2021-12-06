<?php 

class UserRepository{

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
            return $this->pdo->query("SELECT * FROM user");
        }
        catch(PDOException $e)
        {
            echo "erreur Query : " . $e->getMessage();
        }
    }
    public function find($userId) {
        try {
            return $this->pdo->query("SELECT * FROM user WHERE id = $userId;");
        }catch(PDOException $e)
        {
            echo "erreur Query : " . $e->getMessage();
        }
    }

}

?>