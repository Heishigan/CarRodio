<?php 


Class MessagesView extends Messages{

    public function DisplayMessages($incomingID, $outgoingID)
    {
        $results = $this->GetMessages($incomingID, $outgoingID);
        foreach ($results as $name) {
if($name['outgoing_msg_ID']== $outgoingID){
                echo <<<EOT
          <div class="chat outgoing">
                    <div class="details">
                        <p>{$name['msg']}</p>

                    </div>

                </div>
EOT;
}else{
                echo <<<EOT
        <div class="chat incoming">
                    <img src="../src/frontend/assets/imgs/user.png" alt="">
                    <div class="details">
                        <p>{$name['msg']}</p>

                    </div>

                </div>
EOT;
}

        
        }
    }
}

