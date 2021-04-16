<?php
class Car extends Dbh
{


    protected function getCar($ID)
    {
        $sql = "SELECT * FROM car WHERE ID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ID]);
        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getCars()
    {
        $sql = "SELECT * FROM car";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }


    protected function searchCars($Keyword)
    {
        $sql = "SELECT * FROM car WHERE Name LIKE '$Keyword' OR CarBrandName  LIKE '$Keyword' OR Model LIKE '$Keyword' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Keyword]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setCar($Name,  $CarBrandName, $CarDetails, $Model, $Price, $VehicleCondition)
    {
        $sql = "INSERT INTO car(Name,CarBrandName,CarDetails,Model,Price,VehicleCondition) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Name,  $CarBrandName, $CarDetails, $Model, $Price, $VehicleCondition]);
        $lastId = $this->connect()->lastInsertId();
        return $lastId;
    }






}
