<?php

include "../DynamicClass/Country.php";
$country = new Country();
$country->data= [
   'iran' => [
      'name'       => 'ایران',
      'phone_code' => '98',
      'language'   => 'fa',
      'localname'  => 'ir',
      'latitude'   => 146 ,
      'longitude'  => 467
    ] ,
   'usa' => [
      'name'      =>  'ایالات متحده',
      'phone_code'=>  "1",
      'language'  =>  'en',
      'localname' =>  'usa',
      'latitude'  =>  123,
      'longitude' =>  852
    ],
   'ENG' => [
      'name'      =>  'انگلستان',
      'phone_code'=>  '55',
      'language'  =>  'en',
      'localname' =>  'en',
      'latitude'  =>  268 ,
      'longitude' =>  753
    ]
];

echo "<h1>Country  </h1>";
echo '<h4>
    include Country Class in class/Country.php
    </h4>';
echo '<h4>
    Set $country->data like this :
</h4>';
echo "<pre>";
print_r($country->data);
echo "</pre> ";

   $countryOne   = $country->get_phone_code('iran');
   $countryTwo   = $country->get_phone_code('ایران', 'name');
   $countryThree = $country->get("phone_code", "1", "all");
   $countryFour  = $country->get("phone_code", "1", ["name", "longitude"]);
   $countryFive  = $country->get("phone_code", "1", "name");
   $countrySix   = $country->get_coordinates('iran');

      echo "<h4>use class like this method </h4>";
      echo "$country->get_phone_code('iran') :";
      print_r( $countryOne );
      echo "<br> \n ";
      echo "$country->get_phone_code('ایران', 'name'):";
      print_r( $countryTwo );
      echo "<br> \n ";
      echo "$country->get(\"phone_code\", \"1\", \"all\") :";
      print_r( $countryThree );
      echo "<br> \n ";
      echo "$country->get(\"phone_code\", \"1\", array(\"name\", \"longitude\")):";
      print_r( $countryFour );
      echo "<br> \n ";
      echo "$country->get(\"phone_code\", \"1\", \"name\"):";
      print_r( $countryFive );
      echo "<br> \n ";
      echo "$country->get_coordinates('iran') : ";
      print_r( $countrySix );

      
echo "<br> \n ";

?>

<h3 style="text-align: center ; font-style: oblique">please check <a href="index_city.php"> city </a> and <a
      href="index_province.php"> Province </a>
   Sample </h3>
