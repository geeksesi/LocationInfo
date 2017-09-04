<?php
include "../StaticClass/Province.php";

Province::$data = [
   'qom' => [
      'name'       =>  'قم',
      'phone_code' =>  '025',
      'loc'        =>  'qom',
      'latitude'   =>  146,
      'longitude'  =>  467
   ],
   'tehran' => [
      'name'       =>  'تهران',
      'phone_code' =>  '021',
      'latitude'   =>  123,
      'longitude'  =>  852
   ],
   'zanjan' => [
      'name'       =>  'زنجان',
      'phone_code' =>  '051',
      'loc'        =>  'زنجان',
      'latitude'   =>  268,
      'longitude'  =>  753
   ],
];

echo "<h1>Province</h1>";
echo '<h4>
    include Province Class in class/Country.php
      </h4>';

echo '<h4>
    Set Province::$data like this :
      </h4>';
echo "<pre>";
print_r(Province::$data);
echo "</pre> ";

   $provinceOne   = Province::get_phone_code('zanjan');
   $provinceTwo   = Province::get_phone_code('زنجان', 'name');
   $provinceThree = Province::get("phone_code", "051", "all");
   $provinceFour  = Province::get("phone_code", "021", ["name", "longitude"]);
   $provinceFive  = Province::get("phone_code", "051", "name");
   $provinceSix   = Province::get_coordinates('zanjan');
      echo "<h4>use class like this method </h4>";
      echo "Province::get_phone_code('zanjan') :";
      print_r( $provinceOne );
      echo "<br> \n ";
      echo "Province::get_phone_code('زنجان', 'name'):";
      print_r( $provinceTwo );
      echo "<br> \n ";
      echo "Province::get(\"phone_code\", \"051\", \"all\")  :";
      print_r( $provinceThree );
      echo "<br> \n ";
      echo "Province::get(\"phone_code\", \"021\", [\"name\", \"longitude\")):";
      print_r( $provinceFour );
      echo "<br> \n ";
      echo "Province::get(\"phone_code\", \"051\", \"name\"):";
      print_r( $provinceFive );
      echo "<br> \n ";
      echo "Province::get_coordinates('zanjan') : ";
      print_r( $provinceSix );
      echo "<br> \n ";

?>
<h3 style="text-align: center"> please check <a href="index_city.php"> city </a> and <a
      href="index.php"> Country
   </a> Sample </h3>
