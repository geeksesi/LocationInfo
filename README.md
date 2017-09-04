# SimpleData
+ The Simple Php Library to Get Country,City,Province Data 
# Library
<pre><code>
-Trait :
------- class/Base.php
-Class : 
------- class/Country
------- class/City
------- class/Province
-Sample : 
-index.php :: Country
-index_city.php :: City
-index_province.php :: Province
</code></pre>
# HowToUse
+ Include Classes :
<pre><code>
include "class/Country.php";
include "class/City.php";
include "class/Province.php";
</code></pre>
+ make array like this :
```
Country::$data= array(
   'iran' => array(
      'name'       => 'ایران',
      'phone_code' => '98',
      'language'   => 'fa',
      'localname'  => 'ir',
      'latitude'   => 146 ,
      'longitude'  => 467
   ),
   'usa' => array(
      'name'      =>  'ایالات متحده',
      'phone_code'=>  "1",
      'language'  =>  'en',
      'localname' =>  'usa',
      'latitude'  =>  123,
      'longitude' =>  852
   ),
   'ENG' => array(
      'name'      =>  'انگلستان',
      'phone_code'=>  '55',
      'language'  =>  'en',
      'localname' =>  'en',
      'latitude'  =>  268 ,
      'longitude' =>  753
   ),
);
```
+ Use Static Function :
<pre><code>
    Country::get_$_key('CountryName'); 
    Country::get_$_key('Value','Key');
    Country::get($_key,$_value,$_parametr);
    Country::get_coordinates('CountryName');
</code></pre>
+ example :
<pre><code>
    Country::get_phone_code('iran'); //98
    Country::get_name('1','phone_code'); //ایالات متحده
    Country::get('localname','usa',"phone_code");
    Country::get_coordinates('ENG');
</code></pre>
**you can use those example in City And Province**
`please check index.php & index_city.php & index_province.php to get More example`

# Licence 
_what does it means ?_