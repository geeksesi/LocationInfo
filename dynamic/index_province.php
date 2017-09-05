<?php
include '../DynamicClass/Province.php';
$province = new Province();
$province2 = new Province();
$province3 = new Province();
$province->data =
[
   'qom' =>
   [
      'name'       =>  'qom',
      'phone_code' =>  '025',
      'language'   =>  'fa',
      'latitude'   =>  146,
      'longitude'  =>  467
   ],
   'tehran' =>
   [
      'name'       =>  'tehran',
      'phone_code' =>  '021',
      'language'   =>  'fa',
      'latitude'   =>  123,
      'longitude'  =>  852
   ],
   'zanjan' =>
   [
      'name'       =>  'zanjan',
      'phone_code' =>  '051',
      'language'   =>  'fa',
      'localname'  =>  'زنجان',
      'latitude'   =>  268,
      'longitude'  =>  753
   ],
];
$province2->data =
[
   'shiraz' =>
   [
      'name'      =>  'shiraz',
      'phone_code'=>  '063',
      'language'  =>  'fa',
      'latitude'  =>  123,
      'longitude' =>  852
   ],
];
$province3->data =
[
   'mashhad' =>
   [
      'name'      =>  'mashhad',
      'phone_code'=>  '097',
      'language'  =>  'fa',
      'latitude'  =>  123,
      'longitude' =>  852
   ],
];

echo '<h1>Province</h1>';
echo '<h4>include Province Class in class/Country.php</h4>';
echo '<h4>Set $province->data like this :</h4>';
echo '<pre>';
print_r($province->data);
echo '</pre> ';

$province_one   = $province->get_phone_code('zanjan');
$province_two   = $province->get_phone_code('zanjan', 'name');
$province_three = $province->get('phone_code', '051', 'all');
$province_four  = $province->get('phone_code', '021', ['name', 'longitude']);
$province_five  = $province->get('phone_code', '051', 'name');
$province_six   = $province->get_coordinates('zanjan');
echo '<h4>use class like this method </h4>';
echo '$province->get_phone_code(\'zanjan\') :';
print_r( $province_one );
echo '<br> \n ';
echo '$province->get_phone_code(\'zanjan\', \'name\'):';
print_r( $province_two );
echo '<br> \n ';
echo '$province->get(\'phone_code\', \'051\', \'all\')  :';
print_r( $province_three );
echo '<br> \n ';
echo '$province->get(\'phone_code\', \'021\', [\'name\', \'longitude\')):';
print_r( $province_four );
echo '<br> \n ';
echo '$province->get(\'phone_code\', \'051\', \'name\'):';
print_r( $province_five );
echo '<br> \n ';
echo '$province->get_coordinates(\'zanjan\') : ';
print_r( $province_six );
echo '<br> \n ';

echo '<h3>New Array</h3>';
echo '<pre>';
print_r($province2->data);
echo '</pre>';

$province_seven  = $province2->get_coordinates('shiraz');
$province_eight  = $province2->get_phone_code('shiraz');
$province_nine   = $province2->get_phone_code('shiraz', 'name');
$province_ten    = $province2->get('phone_code', '063', 'all');
$province_eleven = $province2->get('phone_code', '063', ['name', 'longitude']);
$province_twelve = $province2->get('phone_code', '063', 'language');
echo '$province2->get_coordinates(\'shiraz\'):';
print_r( $province_seven );
echo '<br>';
echo '$province2->get_phone_code(\'shiraz\'):';
print_r( $province_eight );
echo '<br>';
echo '$province_nine   = $province2->get_phone_code(\'shiraz\', \'name\'):';
print_r( $province_nine );
echo '<br>';
echo '$province2->get(\'phone_code\', \'063\', \'all\') :';
print_r( $province_ten );
echo '<br>';
echo '$province2->get(\'phone_code\', \'063\', array(\'name\', \'longitude\')):';
print_r( $province_eleven );
echo '<br>';
echo '$province2->get(\'phone_code\', \'063\', \'language\'):';
print_r( $province_twelve );
echo '<br>';

echo '<h3>New Array</h3>';
echo '<pre>';
print_r($province3->data);
echo '</pre>';

$province_thirteen  = $province3->get_coordinates('mashhad');
$province_fourteen  = $province3->get_phone_code('mashhad');
$province_fifteen   = $province3->get_phone_code('mashhad', 'name');
$province_sixteen   = $province3->get('phone_code', '097', 'all');
$province_seventeen = $province3->get('phone_code', '097', ['name', 'longitude']);
$province_eighteen  = $province3->get('phone_code', '097', 'language');
echo '$province3->get_coordinates(\'mashhad\'):';
print_r( $province_thirteen );
echo '<br>';
echo '$province3->get_phone_code(\'mashhad\'):';
print_r( $province_fourteen );
echo '<br>';
echo '$province3->get_phone_code(\'mashhad\', \'name\') :';
print_r( $province_fifteen );
echo '<br>';
echo '$province3->get(\'phone_code\', \'097\', \'all\') :';
print_r( $province_sixteen );
echo '<br>';
echo '$province3->get(\'phone_code\', \'097\', array(\'name\', \'longitude\')):';
print_r( $province_seventeen );
echo '<br>';
echo '$province3->get(\'phone_code\', \'097\', \'language\'):';
print_r( $province_eighteen );
echo '<br>';
?>
<h3 style='text-align: center'> please check <a href='index_city.php'> city </a> and
<a href='index.php'> Country</a> Sample </h3>
