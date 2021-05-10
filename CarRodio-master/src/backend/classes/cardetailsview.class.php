<?php
include_once(__DIR__ . "./cars.class.php");
include_once(__DIR__ . "./carsview.class.php");
class CarDetailsView extends CarDetails
{


    public function showDetails()
    {
        $results = $this->getCarDetails();
        foreach ($results as $name) {
            echo <<<EOT
            <h3 class="title">{$name['EngineName']}</h3>
            <h3 class="title">{$name['EngineCapacity']}</h3>
            <h3 class="title">{$name['BodyType']}</h3>
            <h3 class="title">{$name['Transmission']}</h3>
            <h3 class="title">{$name['FuelType']}</h3>
            <h3 class="title">{$name['Mileage']}</h3>
            <h3 class="title">{$name['Image_1']}</h3>
            <img src="./imgs/uploads/{$name['Image_1']}" alt="">
             
             
EOT;
        }
    }
    
    public function showEditDetail($ID){
        $results = $this->getCarDetail($ID);
        foreach ($results as $name) {
            $Cars = new CarView();
            $Cars->getSingleCarforEdit($ID);
         
            echo <<<EOT
        
      <div class="field">
        <label>engine-name:</label>
        <input type="text" value="{$name['EngineName']}" name="engine-name" required>
      </div><br><br>
      <div class="field">
        <label>engine-capacity:</label>
        <input type="text" value="{$name['EngineCapacity']}" name="engine-capacity" required>
      </div><br><br>
    
      <div class="field">
        <label>body-type:</label>
        <input type="text" value="{$name['BodyType']}" name="body-type" required>
      </div><br><br>
      <div class="field">
        <label>transmission:</label>
        <input type="text" value="{$name['Transmission']}" name="transmission" required>
      </div><br><br>
      <div class="field">
        <label>fuel-type:</label>
        <input type="text" value="{$name['FuelType']}" name="fuel-type" required>
      </div><br><br>
      <div class="field">
        <label>mileage:</label>
        <input type="text" value="{$name['Mileage']}" name="mileage" required>
      </div><br><br>
      <div class= "">
        <label>image-1:</label>
        <input type="file" name="image" >
      </div>
      <div class="">
        <label>image-2:</label>
        <input type="file" name="image2" >
      </div>
   <br>
      <div class="field btn">
        <button type="submit" name="editpost" class="btn">Edit Advert</button>
      </div></div>
EOT;
    }
}

    public function showDetail($ID)
    {
        $results = $this->getCarDetail($ID);
        foreach ($results as $name) {
            echo <<<EOT
         
             
 <div class="row no-gutters">
                    <aside class="col-md-6">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img src="../src/frontend/assets/imgs/uploads/{$name['Image_1']}" alt="car image"></a></div>
                            </div> <!-- slider-product.// -->
                            <div class="thumbs-wrap">
                                <a href="#" class="item-thumb"> <img src="../src/frontend/assets/imgs/uploads/{$name['Image_2']}" alt="car image"></a>
                               
                               
                            </div> <!-- slider-nav.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <main class="col-md-6 border-left">
                        <article class="content-body">
EOT;
            $Cars = new CarView();
            $Cars->getSingleCar($ID);

            echo <<<EOT

         
                 <dl class="row">
                                <dt class="col-sm-3">Engine-Name</dt>
                                <dd class="col-sm-9">{$name['EngineName']}</dd>

                                <dt class="col-sm-3">Engine-Capacity</dt>
                                <dd class="col-sm-9">{$name['EngineCapacity']}</dd>

                                <dt class="col-sm-3">BodyType</dt>
                                <dd class="col-sm-9">{$name['BodyType']}</dd>

                                <dt class="col-sm-3">Transmission</dt>
                                <dd class="col-sm-9">{$name['Transmission']}</dd>

                                <dt class="col-sm-3">FuelType</dt>
                                <dd class="col-sm-9">{$name['FuelType']} </dd>

                                <dt class="col-sm-3">Mileage</dt>
                                <dd class="col-sm-9">{$name['Mileage']} </dd>
                                


                            </dl>

                            <hr>
                            <!-- row.// -->

                            <a href="./chatpage.php" class="btn  btn-primary">Enquire Seller </a>
                            <a href="./addTofavorites.php?id={$name['ID']}" class="btn  btn-outline-primary"> <span class="text">Add to Favourites</span> <i class="fas fa-shopping-cart"></i> </a>
                            </article> <!-- product-info-aside .// -->
                    </main> <!-- col.// -->
                </div>


             
EOT;
        }
    }
    
    public function getCarImage($ID)
    {
        $results = $this->getCarDetail($ID);
        foreach ($results as $name) {
            echo <<<EOT
           
          <img src="../src/frontend/assets/imgs/uploads/{$name['Image_1']}">
             
             
EOT;
        }
    }
    public function getCarImageforAdmin($ID)
    {
        $results = $this->getCarDetail($ID);
        foreach ($results as $name) {
            echo <<<EOT
           
     
    <td> {$name['EngineName'] } </td>
    <td>{$name['EngineCapacity']} </td>
    <td>{$name['BodyType'] } </td>
    <td> {$name['Transmission']}  </td>
    <td> {$name['FuelType'] }</td>
     <td> {$name['Mileage']}</td>
    <td><img src="../src/frontend/assets/imgs/uploads/{$name['Image_1']}" width="200" height="100"></td>
    <td><img src="../src/frontend/assets/imgs/uploads/{$name['Image_1']}" width="200" height="100"></td>
           <td><a href="#" class="btn-warning">verify</td>
                        <td><a href="#" class="btn-warning">delete</td>
              </div>
              </td>

              </tr>
  
             
EOT;
        }
    }

    public function getCarDetailLastID()
    {
        $results = $this->getCarDetailsLastID();
        foreach ($results as $name) {
            return $name['ID'];
        }
    }

  

}
