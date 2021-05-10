<?php
class Users extends Dbh
{


    protected function getUser($ID)
    {
        $sql = "SELECT * FROM users WHERE ID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ID]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getAllSellersUser()
    {
        $sql = "SELECT * FROM users WHERE usertype = 'seller' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getAllBuyersUser()
    {
        $sql = "SELECT * FROM users WHERE usertype = 'buyer' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }



    protected function setUser($firstname, $email, $password)
    {
        $sql = "INSERT INTO users(firstname,email,password) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $email, $password]);
    }

    protected function checkUser($email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getname($uuid)
    {
        $sql = "SELECT username FROM users WHERE ID='$uuid'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uuid]);
        $results = $stmt->fetchAll();
        return $results;
    }

}
