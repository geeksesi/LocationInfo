<?php

include "../StaticClass/Country.php";

Country::$data=
[
   'iran' =>
   [
      'name'       => 'ایران',
      'phone_code' => '98',
      'language'   => 'fa',
      'localname'  => 'ir',
      'latitude'   => 146 ,
      'longitude'  => 467
    ] ,
   'usa' =>
   [
      'name'      =>  'ایالات متحده',
      'phone_code'=>  "1",
      'language'  =>  'en',
      'localname' =>  'usa',
      'latitude'  =>  123,
      'longitude' =>  852
    ],
   'ENG' =>
   [
      'name'      =>  'انگلستان',
      'phone_code'=>  '55',
      'language'  =>  'en',
      'localname' =>  'en',
      'latitude'  =>  268 ,
      'longitude' =>  753
    ]
];

echo "<h1>Country:</h1>";
echo '<h4>include Country Class in class/Country.php\</h4>';

$country_one   = Country::get_phone_code('iran');
$country_two   = Country::get_phone_code('ایران', 'name');
$country_three = Country::get("phone_code", "1", "all");
$country_four  = Country::get("phone_code", "1", ["name", "longitude"]);
$country_five  = Country::get("phone_code", "1", "name");
$country_six   = Country::get_coordinates('iran');
echo '<h4>Set Country::$data like this :</h4>';
echo "<pre>";
print_r(Country::$data);
echo "</pre> ";
echo "<h4>use class like this method </h4>";
echo "Country::get_phone_code('iran') :";
print_r( $country_one );
echo "<br>";
echo "Country::get_phone_code('ایران', 'name'):";
print_r( $country_two );
echo "<br>";
echo "Country::get(\"phone_code\", \"1\", \"all\") :";
print_r( $country_three );
echo "<br>";
echo "Country::get(\"phone_code\", \"1\", array(\"name\", \"longitude\")):";
print_r( $country_four );
echo "<br>";
echo "Country::get(\"phone_code\", \"1\", \"name\"):";
print_r( $country_five );
echo "<br>";
echo "Country::get_coordinates('iran') : ";
print_r( $country_six );
echo "<br>";

?>

<h3 style="text-align: center ; font-style: oblique">please check <a href="index_city.php"> city </a> and <a
href="index_province.php"> Province </a>Sample </h3>
