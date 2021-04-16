<?php
class Brands extends Dbh
{

  

    protected function getBrands()
    {
        $sql = "SELECT * FROM brand";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setBrand($Name)
    {
        $sql = "INSERT INTO brand(Name) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Name]);
    }
}
