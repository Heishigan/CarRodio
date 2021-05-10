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
    protected function getUnverifiedCars()
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

    protected function getFilteredCar(array $Brands)
    {
        $qMarks = str_repeat('?,', count($Brands) - 1) . '?';
        $sql = "SELECT * FROM car WHERE CarBrandName IN ($qMarks)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($Brands);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getCarLastID()
    {
        $sql = "SELECT * FROM car ORDER BY ID DESC LIMIT 1";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetch();
        return $results;
        
        
    }

    protected function setCar($Name,  $CarBrandName, $CarDetails, $Model, $Price, $VehicleCondition)
    {
        $sql = "INSERT INTO car(Name,CarBrandName,CarDetails,Model,Price,VehicleCondition) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Name,  $CarBrandName, $CarDetails, $Model, $Price, $VehicleCondition]);
   
    }
    public function DeleteCars($ID)
    {
     
        $sql = "DELETE FROM car WHERE ID=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ID]);
    }

    protected function updateCar($brandname, $carname, $model, $price, $condition,$ID)
    {
        $sql = "UPDATE car SET Name=?,CarBrandName=?,Model=?,Price=?,VehicleCondition=? WHERE ID =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$carname, $brandname, $model, $price, $condition, $ID]);
    }




}
