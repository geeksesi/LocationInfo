<?php
error_reporting(1);
include '../DynamicClass/Country.php';
$country = new Country();
$country2 = new Country();
$country3 = new Country();
$country->data=
   [
   'iran' =>
    [
      'name'       => 'iran',
      'phone_code' => '98',
      'language'   => 'fa',
      'local_name'  => 'ir',
      'latitude'   => 146 ,
      'longitude'  => 467
    ] ,
   'usa' =>
     [
      'name'      =>  'usa',
      'phone_code'=>  '1',
      'language'  =>  'en',
      'local_name' =>  'usa',
      'latitude'  =>  123,
      'longitude' =>  852
    ],
   'ENG' =>
   [
      'name'      =>  'english',
      'phone_code'=>  '55',
      'language'  =>  'en',
      'local_name' =>  'en',
      'latitude'  =>  268 ,
      'longitude' =>  753
    ]
];

$country2->data =
[
   'china' =>
   [
      'name'      =>  'china',
      'phone_code'=>  '90',
      'language'  =>  'Hànyǔ',
      'local_name' =>  'China',
      'latitude'  =>  123,
      'longitude' =>  852
   ],
];
$country3->data =
[
   'japan' =>
   [
      'name'      =>  'japan',
      'phone_code'=>  '55',
      'language'  =>  'Japanese',
      'local_name' =>  'Japan',
      'latitude'  =>  123,
      'longitude' =>  852
   ],
];

echo '<h1>Country  </h1>';
echo '<h4> include Country Class in class/Country.php </h4>';

$country_one   = $country->get_phone_code('iran');
$country_two   = $country->get_phone_code('iran', 'name');
$country_three = $country->get('phone_code', '1', 'all');
$country_four  = $country->get('phone_code', '1', ['name', 'longitude']);
$country_five  = $country->get('phone_code', '1', 'name');
$country_six   = $country->get_coordinates('iran');
echo '<h4>Set $country->data like this :</h4>';
echo '<pre>';
print_r($country->data);
echo '</pre> ';
echo '<h4>use class like this method </h4>';
echo '$country->get_phone_code(\'iran\') :';
print_r( $country_one );
echo '<br>';
echo '$country->get_phone_code(\'iran\', \'name\'):';
print_r( $country_two );
echo '<br>';
echo '$country->get(\'phone_code\', \'1\', \'all\') :';
print_r( $country_three );
echo '<br>';
echo '$country->get(\'phone_code\', \'1\', array(\'name\', \'longitude\')):';
print_r( $country_four );
echo '<br>';
echo '$country->get(\'phone_code\', \'1\', \'name\'):';
print_r( $country_five );
echo '<br>';
echo '$country->get_coordinates(\'iran\') : ';
print_r( $country_six );


echo '<h3>New Array</h3>';
echo '<pre>';
print_r($country2->data);
echo '</pre>';

$country2_seven  = $country2->get_coordinates('china');
$country2_eight  = $country2->get_phone_code('china');
$country2_nine   = $country2->get_phone_code('china', 'name');
$country2_ten    = $country2->get('phone_code', '90', 'all');
$country2_eleven = $country2->get('phone_code', '90', ['name', 'longitude']);
$country2_twelve = $country2->get('phone_code', '90', 'language');
echo '$country2->get_coordinates(\'china\'):';
print_r( $country2_seven );
echo '<br>';
echo '$country2->get_phone_code(\'china\'):';
print_r( $country2_eight );
echo '<br>';
echo '$country2->get(\'phone_code\', \'90\', \'all\') :';
print_r( $country2_nine );
echo '<br>';
echo '$country2->get(\'phone_code\', \'90\', array(\'name\', \'longitude\')):';
print_r( $country2_ten );
echo '<br>';
echo '$country2->get(\'phone_code\', \'90\', \'language\'):';
print_r( $country2_eleven );
echo '<br>';
echo '$country2->get_coordinates(\'iran\') :';
print_r( $country2_twelve );

echo '<h3>New Array</h3>';
echo '<pre>';
print_r($country3->data);
echo '</pre>';

$country3_thirteen  = $country3->get_coordinates('japan');
$country3_fourteen  = $country3->get_phone_code('japan');
$country3_fifteen   = $country3->get_phone_code('japan', 'name');
$country3_sixteen   = $country3->get('phone_code', '55', 'all');
$country3_seventeen = $country3->get('phone_code', '55', ['name', 'longitude']);
$country3_eighteen  = $country3->get('phone_code', '55', 'language');
echo '$country3->get_coordinates(\'japan\'):';
print_r( $country3_thirteen );
echo '<br>';
echo '$country3->get_phone_code(\'japan\'):';
print_r( $country3_fourteen );
echo '<br>';
echo '$country3->get(\'phone_code\', \'55\', \'all\') :';
print_r( $country3_fifteen );
echo '<br>';
echo '$country3->get(\'phone_code\', \'55\', array(\'name\', \'longitude\')):';
print_r( $country3_sixteen );
echo '<br>';
echo '$country3->get(\'phone_code\', \'55\', \'language\'):';
print_r( $country3_seventeen );
echo '<br>';
echo '$country3->get_coordinates(\'china\') :';
print_r( $country3_eighteen );
?>
<br>
<h3 style='text-align: center ; font-style: oblique'>please check <a href='index_city.php'> city </a> and <a
href='index_province.php'> Province </a>Sample </h3>
