<?php
class FavouritesView extends Favourites
{


    public function getAdID($ID)
    {
        $results = $this->getFavourites($ID);
        foreach ($results as $name) {
    return $name['AdID'];
        }
    }
}

