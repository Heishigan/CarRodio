<?php
class CarContr extends Car

{

    public function createCar($Name,  $CarBrandName, $CarDetails, $Model, $Price, $VehicleCondition)
    {
        $this->setCar($Name, $CarBrandName, $CarDetails, $Model, $Price, $VehicleCondition);
    }
    public function DeleteCar($ID)
    {
        $this->DeleteCars($ID);
    }

    public function UpdateCars($carname, $brandname, $model, $price, $condition, $ID){
        $this->UpdateCar($carname, $brandname, $model, $price, $condition, $ID);

    }
}
