<?php

class Messages extends Dbh
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



    protected function setMessage($incomingID, $outgoingID, $msg)
    {
        $sql = "INSERT INTO messages(incoming_msg_ID,outgoing_msg_ID,msg) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$incomingID, $outgoingID, $msg]);
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
