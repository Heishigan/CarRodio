<?php

class MessagesContr extends Messages

{

    public function SendMessage($incomingID, $outgoingID, $msg)
    {
        $this->setMessage($incomingID, $outgoingID, $msg);
        header("Location: ./chatarea.php?id={$incomingID}");
    }
}