<?php

class BrandsView extends Brands
{

    public function showBrands()
    {
        $results = $this->getBrands();
        foreach ($results as $name) {
            echo <<<EOT
             <div class="col-md-4">     
             <span>
             

     <tr>
                    <td>
   
                              </td>
                              <td class="text-center">
                                <div class="">
                                 <h3 class="title">{$name['Name']}</h3>
                     </div>
                                                </td>
                                                
                                            </tr>
             
             
EOT;
        }
    }
}
