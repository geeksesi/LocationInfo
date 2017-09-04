# SimpleData
 The Simple PHP Library to Get Country,City,Province Information 
# Library
<h3>static</h3> 
<pre><code>

-Trait :
------- StaticClass/Base.php
-Class : 
------- StaticClass/Country
------- StaticClass/City
------- StaticClass/Province
-Sample : 
-static/index.php :: Country
-static/index_city.php :: City
-static/index_province.php :: Province
</code></pre>
<h3>dynamic</h3>
<pre><code>
-Trait :
------- DynamicClass/Base.php
-Class : 
------- DynamicClass/Country
------- DynamicClass/City
------- DynamicClass/Province
-Sample : 
-dynamic/index.php :: Country
-dynamic/index_city.php :: City
-dynamic/index_province.php :: Province
</code></pre>
# HowToUse
<h2>Include Classes :</h2>
<h3>dynamic</h3>
<pre><code>
include "DynamicClass/Country.php";
include "DynamicClass/City.php";
include "DynamicClass/Province.php";
</code></pre>
<h3>static</h3> 
<pre><code>
include "StaticClass/Country.php";
include "StaticClass/City.php";
include "StaticClass/Province.php";
</code></pre>
<h2> make array like this :</h2>
<h3>static</h3> 

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
<h3>dynamic</h3>
```
$country->data= array(
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
<h2> Use Static Function :</h2>
<h3>static</h3>
<pre><code>
    Country::get_$_key('CountryName'); 
    Country::get_$_key('Value','Key');
    Country::get($_key,$_value,$_parametr);
    Country::get_coordinates('CountryName');
</code></pre>
<h6> example :</h6>
<pre><code>
    Country::get_phone_code('iran'); //98
    Country::get_name('1','phone_code'); //ایالات متحده
    Country::get('localname','usa',"phone_code");
    Country::get_coordinates('ENG');
</code></pre>
<h3>dynamic</h3>
<pre><code>
    $country->get_$_key('CountryName'); 
    $country->get_$_key('Value','Key');
    $country->get($_key,$_value,$_parametr);
    $country->get_coordinates('CountryName');
</code></pre>
<h6> example :</h6>
<pre><code>
    $country->get_phone_code('iran'); //98
    $country->get_name('1','phone_code'); //ایالات متحده
    $country->get('localname','usa',"phone_code");
    $country->get_coordinates('ENG');
</code></pre>

**you can use those example in City And Province**

`please check Sample File in static & dynamic Folder`

# Licence 
_what does it means ?_