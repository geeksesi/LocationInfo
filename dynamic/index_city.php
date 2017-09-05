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

   
   $city_one   = $city->get_phone_code('qom') ;
   $city_two   = $city->get_phone_code("قم" , 'name') ;
   $city_three = $city->get("phone_code" , '025' , "all") ;
   $city_four  = $city->get("phone_code" , "025" , ["name" , "longitude"]) ;
   $city_five  = $city->get("phone_code" , "025" , "name") ;
   $city_six   = $city->get_coordinates('qom');
      echo "<h4>use class like this method </h4>";
      echo "$city->get_phone_code('qom') :" ;
      print_r( $city_one ) ;
      echo "<br> \n ";
      echo "$city->get_phone_code(\"قم\" , 'name'):";
      print_r( $city_two ) ;
      echo "<br> \n ";
      echo "$city->get(\"phone_code\" , '025' , \"all\") :";
      print_r( $city_three ) ;
      echo "<br> \n ";
      echo "$city->get(\"phone_code\" , \"025\" , [\"name\" , \"longitude\")):";
      print_r( $city_four ) ;
      echo "<br> \n ";
      echo "$city->get(\"phone_code\" , \"025\" , \"name\"):";
      print_r( $city_five ) ;
      echo "<br> \n ";
      echo "$city->get_coordinates('qom') : ";
      print_r( $city_six ) ;
      echo "<br> \n ";

$city->data = [
   'shiraz' => [
      'name'      =>  'شیراز',
      'phone_code'=>  '063',
      'language'  =>  'fa',
      'latitude'  =>  123,
      'longitude' =>  852
   ],
];
echo '<h3>New Array</h3>';
echo "<pre>";
print_r($city->data);
echo "</pre>";

    $city_seven  = $city->get_coordinates('shiraz');
    $city_eight  = $city->get_phone_code('shiraz');
    $city_nine   = $city->get_phone_code('شیراز', 'name');
    $city_ten    = $city->get('phone_code', '063', 'all');
    $city_eleven = $city->get('phone_code', '063', ['name', 'longitude']);
    $city_twelve = $city->get('phone_code', '063', 'language');
        echo '$city->get_coordinates("shiraz"):';
        print_r( $city_seven );
        echo '<br>';
        echo '$city->get_phone_code("shiraz"):';
        print_r( $city_eight );
        echo '<br>';
        echo '$city_nine   = $city->get_phone_code(\'شیراز\', \'name\'):';
        print_r( $city_nine );
        echo '<br>';
        echo '$city->get(\'phone_code\', \'063\', \'all\') :';
        print_r( $city_ten );
        echo '<br>';
        echo '$city->get(\'phone_code\', \'063\', array(\'name\', \'longitude\')):';
        print_r( $city_eleven );
        echo '<br>';
        echo '$city->get(\'phone_code\', \'063\', \'language\'):';
        print_r( $city_twelve );
        echo '<br>';


$city->data = [
   'mashhad' => [
      'name'      =>  'مشهد',
      'phone_code'=>  '097',
      'language'  =>  'fa',
      'latitude'  =>  123,
      'longitude' =>  852
   ],
];
echo '<h3>New Array</h3>';
echo "<pre>";
print_r($city->data);
echo "</pre>";

    $city_thirteen  = $city->get_coordinates('mashhad');
    $city_fourteen  = $city->get_phone_code('mashhad');
    $city_fifteen   = $city->get_phone_code('مشهد', 'name');
    $city_sixteen   = $city->get('phone_code', '097', 'all');
    $city_seventeen = $city->get('phone_code', '097', ['name', 'longitude']);
    $city_eighteen  = $city->get('phone_code', '097', 'language');
        echo '$city->get_coordinates(\'mashhad\'):';
        print_r( $city_thirteen );
        echo '<br>';
        echo '$city->get_phone_code("mashhad"):';
        print_r( $city_fourteen );
        echo '<br>';
        echo '$city->get_phone_code(\'مشهد\', \'name\') :';
        print_r( $city_fifteen );
        echo '<br>';
        echo '$city->get(\'phone_code\', \'097\', \'all\') :';
        print_r( $city_sixteen );
        echo '<br>';
        echo '$city->get(\'phone_code\', \'097\', array(\'name\', \'longitude\')):';
        print_r( $city_seventeen );
        echo '<br>';
        echo '$city->get(\'phone_code\', \'097\', \'language\'):';
        print_r( $city_eighteen );
        echo '<br>';


?>

<h3 style="text-align: center">please check <a href="index.php"> Country </a> and <a href="index_city
.php">
      Province
   </a> Sample </h3>
