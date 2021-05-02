<?php
include_once(__DIR__ . './cars.class.php');
include_once(__DIR__ . './carsview.class.php');
class AdsView extends Ads{

    public function showAds()
    {
        
        $results = $this->getAds();
        foreach ($results as $name) {
            $cars = new CarView();
            $carID = $name['CarID'];
            $cars->showCarsforAds($carID);
            
        }
    }
    public function showAdsforSeller()
    {

        $results = $this->getAds();
        foreach ($results as $name) {
            $cars = new CarView();
            $carID = $name['CarID'];
            $cars->showCarsforSeller($carID);
        }
    }

    public function showAdsforAdmin()
    {
        
        $results = $this->getUnverifiedAds();
        foreach ($results as $name) {
            $cars = new CarView();
            $carID = $name['CarID'];
            $cars->showCarsforAdmin($carID);
            
        }
    }


    
    public function showSearchedAds($keyword)
    {

        $cars = new CarView();
        $carID = $cars->getSearchedCar($keyword);
        $cars->showCarsforAds($carID);
       

        }
    }

//     public function showSearchedAds($brand)
//     {

//         $results = $this->searchAds($brand);
//         foreach ($results as $name) {

//             echo <<<EOT
             
//              <h1> {$name['CarBrandName']} </h1>
             
// EOT;
//         }
//     }



