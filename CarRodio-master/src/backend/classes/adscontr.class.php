<?php

class AdsContr extends Ads

{

    public function createAd($Date, $CarID, $CarBrandName, $CarDetailsID, $UserID, $Verify)
    {
        $this->setAd($Date, $CarID, $CarBrandName, $CarDetailsID, $UserID, $Verify);
    }
    public function setTheVerification($ID)
    {
        $this->setVerification($ID);
    }
}
