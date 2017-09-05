<?php
include "../StaticClass/City.php";

City::$data =
   [
      'qom' =>
         [
            'name' => 'qom',
            'phone_code' => '025',
            'localname' => 'قم',
            'latitude' => 146,
            'longitude' => 467
         ],
      'tehran' =>
         [
            'name' => 'tehran',
            'phone_code' => '021',
            'latitude' => 123,
            'longitude' => 852
         ],
      'zanjan' =>
         [
            'name' => 'zanjan',
            'phone_code' => '051',
            'localname' => 'زنجان',
            'latitude' => 268,
            'longitude' => 753
         ],
   ];


echo "<h1>City</h1>";
echo '<h4>include City Class in class/Country.php</h4>';

$city_one = City::get_phone_code('qom');
$city_two = City::get_phone_code("qom", 'name');
$city_three = City::get("phone_code", '025', "all");
$city_four = City::get("phone_code", "025", ["name", "longitude"]);
$city_five = City::get("phone_code", "025", "name");
$city_six = City::get_coordinates('qom');
echo '<h4>Set City::$data like this :</h4>';
echo "<pre>";
print_r(City::$data);
echo "</pre> ";
echo "<h4>use class like this method </h4>";
echo "City::get_phone_code('qom') :";
print_r($city_one);
echo "<br>";
echo "City::get_phone_code(\"qom\" , 'name'):";
print_r($city_two);
echo "<br>";
echo "City::get(\"phone_code\" , '025' , \"all\") :";
print_r($city_three);
echo "<br>";
echo "City::get(\"phone_code\" , \"025\" , [\"name\" , \"longitude\")):";
print_r($city_four);
echo "<br>";
echo "City::get(\"phone_code\" , \"025\" , \"name\"):";
print_r($city_five);
echo "<br>";
echo "City::get_coordinates('qom') : ";
print_r($city_six);
echo "<br>";


?>

<h3 style="text-align: center">please check <a href="index.php"> Country </a> and <a href="index_province
.php">Province</a> Sample </h3>
