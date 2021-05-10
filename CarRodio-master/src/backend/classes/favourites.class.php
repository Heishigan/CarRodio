<?php
class Favourites extends Dbh
{

  

    protected function getFavourites($ID)
    {
        $sql = "SELECT * FROM favourites WHERE UserID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ID]);
        $results = $stmt->fetchAll();
        return $results;

        
    }

    protected function deleteFavourite()
    {
        $sql = "TRUNCATE favourites";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        $results = $stmt->fetchAll();
        return $results;
    }
    
}

