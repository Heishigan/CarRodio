<?php
class CarDetailsContr extends CarDetails

{

    public function createCarDetails($EngineName,  $EngineCapacity, $BodyType, $Transmission, $FuelType, $Mileage, $Image_1, $Image_2)
    {
        $this->setCarDetails($EngineName,  $EngineCapacity, $BodyType, $Transmission, $FuelType, $Mileage, $Image_1, $Image_2);
       
    }
}
