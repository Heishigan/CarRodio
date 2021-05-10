<?php

class Messages extends Dbh
{


    protected function GetMessages($incomingID, $outgoingID)
    {
        $sql = "SELECT * FROM messages WHERE outgoing_msg_ID = '$outgoingID' AND incoming_msg_ID = '$incomingID'
        OR outgoing_msg_ID = '$incomingID' AND incoming_msg_ID = '$outgoingID' ORDER BY ID ASC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$incomingID, $outgoingID]);

        $results = $stmt->fetchAll();
        return $results;
    }

  


    protected function setMessage($incomingID, $outgoingID, $msg)
    {
        $sql = "INSERT INTO messages(incoming_msg_ID,outgoing_msg_ID,msg) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$incomingID, $outgoingID, $msg]);
    }


}
