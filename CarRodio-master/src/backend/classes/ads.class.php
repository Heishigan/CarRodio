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
    protected function getFavouriteAd($ID)
    {
        $sql = "SELECT * FROM ad WHERE ID = ?";
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
    protected function getUnverifiedAds()
    {
        $sql = "SELECT * FROM ad WHERE Verify= 0";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setAd($Date, $CarID, $CarBrandName, $CarDetailsID, $UserID , $Verify)
    {
        $sql = "INSERT INTO ad(Date,CarID,CarBrandName,CarDetailsID,UserID,Verify) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Date, $CarID, $CarBrandName, $CarDetailsID, $UserID, $Verify]);
        

    }
    public function showVerifiedAds()
    {
       
        $sql = "SELECT count(ID) AS total FROM ad WHERE verify='1'";
        $result = $this->connect()->prepare($sql);
        $result->execute();
        $number_of_rows = $result->fetchColumn(); 
        echo $number_of_rows;



    }

    public function showUnVerifiedAds()
    {

        $sql = "SELECT count(ID) AS total FROM ad WHERE verify='0'";
        $result = $this->connect()->prepare($sql);
        $result->execute();
        $number_of_rows = $result->fetchColumn();
        echo $number_of_rows;
    }
    public function setVerification($ID)
    {

        $sql = "UPDATE ad SET Verify=1 WHERE CarID=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ID]);

        
    }

    public function getadid($ID)
    {
        $db = mysqli_connect('localhost', 'root', '', 'carrodio');
        $sql = "SELECT ID FROM ad WHERE CarDetailsID='$ID'";
        if ($result = $db->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                return $row['ID'];
            }
        }
    }
    public function addcr($comment, $rating, $val, $IDU)
    {
        echo "in";
        $sql = "INSERT INTO commentsrating(Comment,Rating,AdID,UserID) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$comment, $rating, $val, $IDU]);
    }

    public function getuid($val2)
    {
        $db = mysqli_connect('localhost', 'root', '', 'carrodio');
        $sql = "SELECT UserID FROM ad WHERE ID='$val2'";
        if ($result = $db->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                return $row['UserID'];
            }
        }
    }



}
