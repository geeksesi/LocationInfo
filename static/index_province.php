<?php
include '../StaticClass/Province.php';

Province::$data =
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

echo '<h1>Province</h1>';
echo '<h4> include Province Class in class/Country.php</h4>';

$province_one = Province::get_phone_code('zanjan');
$province_two = Province::get_phone_code('zanjan', 'name');
$province_three = Province::get('phone_code', '051', 'all');
$province_four = Province::get('phone_code', '021', ['name', 'longitude']);
$province_five = Province::get('phone_code', '051', 'name');
$province_six = Province::get_coordinates('zanjan');
echo '<h4>Set Province::$data like this :</h4>';
echo '<pre>';
print_r(Province::$data);
echo '</pre> ';
echo '<h4>use class like this method </h4>';
echo 'Province::get_phone_code(\'zanjan\') :';
print_r($province_one);
echo '<br>';
echo 'Province::get_phone_code(\'zanjan\', \'name\'):';
print_r($province_two);
echo '<br>';
echo 'Province::get(\'phone_code\', \'051\', \'all\')  :';
print_r($province_three);
echo '<br>';
echo 'Province::get(\'phone_code\', \'021\', [\'name\', \'longitude\')):';
print_r($province_four);
echo '<br>';
echo 'Province::get(\'phone_code\', \'051\', \'name\'):';
print_r($province_five);
echo '<br>';
echo 'Province::get_coordinates(\'zanjan\') : ';
print_r($province_six);
echo '<br>';
?>
<h3 style='text-align: center'> please check <a href='index_city.php'> city </a> and <a
href='index.php'> Country</a> Sample </h3>
