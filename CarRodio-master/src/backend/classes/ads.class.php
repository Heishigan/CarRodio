<?php
class Ads extends Dbh
{


    protected function getAd($ID)
    {
        $sql = "SELECT * FROM ad WHERE UserID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ID]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function searchAds($brandName)
    {
        $sql = "SELECT * FROM ad WHERE CarBrandName LIKE '$brandName' OR Date LIKE '$brandName' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$brandName]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getAds()
    {
        $sql = "SELECT * FROM ad WHERE Verify= 1";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setBooking($userID,  $roomID, $dateStart, $dateEnd)
    {
        $sql = "INSERT INTO booking(UserID,RoomID,dateStart,dateEnd) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userID,  $roomID, $dateStart, $dateEnd]);
        

    }
}
