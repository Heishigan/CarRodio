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

                            <a href="#" class="btn  btn-primary"> Buy now </a>
                            <a href="#" class="btn  btn-outline-primary"> <span class="text">Add to cart</span> <i class="fas fa-shopping-cart"></i> </a>
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

    
  

}
