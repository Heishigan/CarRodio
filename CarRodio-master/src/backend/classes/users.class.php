<?php
class Users extends Dbh
{


    protected function getUser($firstname)
    {
        $sql = "SELECT * FROM users WHERE firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname]);

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
}
