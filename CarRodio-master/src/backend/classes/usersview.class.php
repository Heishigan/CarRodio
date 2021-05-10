<?php

class Usersview extends Users{

    public function displayCurrentUser($ID){
        $results = $this->getUser($ID);
        foreach ($results as $name) {
            echo <<<EOT
  <div class="content">
                    <img src="../src/frontend/assets/imgs/user-profile.png" alt="">
                    <div class="details">
                        <span>{$name['username']}</span>
                        <p>Active now</p>
                    </div>
                </div>          
EOT;
        }

    }
    public function displayCurrentTextingUser($ID){
        $results = $this->getUser($ID);
        foreach ($results as $name) {
            echo <<<EOT
   <div class="details">
                    <span>{$name['username']}</span>
                    <p>Active now</p>
                </div>          
EOT;
        }

    }


    public function displaySellers(){
        $results = $this->getAllSellersUser();
        foreach ($results as $name) {
            echo <<<EOT
   <a href="./chatarea.php?id={$name['ID']}">
                    <div class="content">
                        <img src="../src/frontend/assets/imgs/user.png" alt="">
                        <div class="details">
                            <span>{$name['username']}</span>
                            <p>Test messahe</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>      
EOT;
        }
    }

    public function displayBuyers()
    {
        $results = $this->getAllBuyersUser();
        foreach ($results as $name) {
            echo <<<EOT
   <a href="./chatarea.php?id={$name['ID']}">
                    <div class="content">
                        <img src="../src/frontend/assets/imgs/user.png" alt="">
                        <div class="details">
                            <span>{$name['username']}</span>
                            <p>Test messahe</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>      
EOT;
        }
    }


}