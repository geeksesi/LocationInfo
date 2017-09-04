<?php
include "../DynamicClass/City.php";
$city = new City() ;

$city->data = [
   'qom' => [
      'name'          =>  'قم',
      'phone_code'    =>  '025',
      'loc'           =>  'qom',
      'latitude'      =>  146 ,
      'longitude'     =>  467
   ],
   'tehran' => [
      'name'          =>  'تهران',
      'phone_code'    =>  '021',
      'latitude'      =>  123 ,
      'longitude'     =>  852
   ],
   'zanjan' => [
      'name'          => 'زنجان',
      'phone_code'    => '051',
      'loc'           => 'زنجان',
      'latitude'      => 268 ,
      'longitude'     =>753
   ],
];


echo "<h1>City</h1>";
echo '<h4>
    include City Class in class/Country.php
      </h4>';

echo '<h4>
    Set $city->data like this :
      </h4>';
echo "<pre>";
print_r($city->data);
echo "</pre> ";

   
   $cityOne   = $city->get_phone_code('qom') ;
   $cityTwo   = $city->get_phone_code("قم" , 'name') ;
   $cityThree = $city->get("phone_code" , '025' , "all") ;
   $cityFour  = $city->get("phone_code" , "025" , ["name" , "longitude"]) ;
   $cityFive  = $city->get("phone_code" , "025" , "name") ;
   $citySix   = $city->get_coordinates('qom');
      echo "<h4>use class like this method </h4>";
      echo "$city->get_phone_code('qom') :" ;
      print_r( $cityOne ) ;
      echo "<br> \n ";
      echo "$city->get_phone_code(\"قم\" , 'name'):";
      print_r( $cityTwo ) ;
      echo "<br> \n ";
      echo "$city->get(\"phone_code\" , '025' , \"all\") :";
      print_r( $cityThree ) ;
      echo "<br> \n ";
      echo "$city->get(\"phone_code\" , \"025\" , [\"name\" , \"longitude\")):";
      print_r( $cityFour ) ;
      echo "<br> \n ";
      echo "$city->get(\"phone_code\" , \"025\" , \"name\"):";
      print_r( $cityFive ) ;
      echo "<br> \n ";
      echo "$city->get_coordinates('qom') : ";
      print_r( $citySix ) ;
      echo "<br> \n ";


?>

<h3 style="text-align: center">please check <a href="index.php"> Country </a> and <a href="index_province
.php">
      Province
   </a> Sample </h3>
