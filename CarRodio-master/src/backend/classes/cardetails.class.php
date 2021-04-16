<?php
class CarDetails extends Dbh
{


    protected function getCarDetail($ID)
    {
        $sql = "SELECT * FROM cardetails WHERE ID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ID]);
        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getCarDetails()
    {
        $sql = "SELECT * FROM cardetails";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setCarDetails($EngineName,  $EngineCapacity, $BodyType, $Transmission, $FuelType, $Mileage, $Image_1, $Image_2)
    {
        $sql = "INSERT INTO cardetails(EngineName,EngineCapacity,BodyType,Transmission,FuelType,Mileage,Image_1,Image_2) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$EngineName,  $EngineCapacity, $BodyType, $Transmission, $FuelType, $Mileage, $Image_1, $Image_2]);
        $lastId = $this->connect()->lastInsertId();
        echo $lastId;
    }
}
