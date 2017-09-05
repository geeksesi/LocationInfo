<?php
trait Base
{
    // @variable  $data is define in "Country , City Or Province" Class

    /**
    * searchCountry( $_key , $_value ) :
    *
    * @param [string] $_key  static::$data["Country , City Or , Province
    * Name"]["$_key"]
    * @param  [string] $_value  static::$data["Country , City Or , Province
    * Name"]["$_key"]["$_value"]
    *
    * @return $key
    */
    public static function searchCountry($_key, $_value)
    {
        /**
         * Two Foreach to Get static::$data["Country , City Or , Province Name"]
         * The First : Get =>> every Country , City Or Province Name Value ;
         * secondary : get which Country , City Or Province has $_key && $_value
        */
        foreach (static::$data as $key => $value)
        {
            /**
             * @param [string] $key   static::$data["Country , City Or , Province Name"]
             * @param [string] $value array => static::$data["Country , City Or ,
             * Province Name"]["value"]
            */
            foreach ($value as $keyResult => $valueResult)
            {
                /**
                 * @param [string] $keyResult   static::$data["Country , City Or , Province
                 * Name"]["key"]["$keyResult"]
                 * @param [string] $valueResult  static::$data["Country , City Or , Province
                 * Name"]["key"]["$keyResult"]["$valueResult"]
                */
                if ( $keyResult == $_key && $valueResult == $_value )
                {
                    $return =  $key ;
                }

            }
        }
       
        if ( isset($return) )
        {
            return $return ;
        }
        else
        {
            return FALSE ;
        }
    }

    /**
     * __calStatic Function uses example : get_phone_code('iran')
     * @param [string] $_name is : get_phone_code
     * @param [string] $_arguments exam:'ایران' , 'name' or :  'iran' | if has
     # two parameter :
     * @param [string] $_arguments[0] static::$data["Country , City Or , Province
     * Name"]["key"]["value']
     * @param [string] $_arguments[1] static::$data["Country , City Or , Province
     * Name"]["key"]
     # one parameter
     * @param [string] $_arguments[0] static::$data["Country , City Or
     * Province Name"]
     *
     * @return $export
     */
    public static function __callStatic($_name, $_arguments = [] )
    {

        $name = str_replace("get_","", $_name);

        if ( !isset($_arguments) )
        {
            return "hey please check _arguments :) Thank you  ";
        }
        else
        {
            
            if ( isset($_arguments[0]) && isset($_arguments[1]) )
            {
                $value = $_arguments[0];
                $key = $_arguments[1];
                // need Country , City Or Province Name for export $name's value
                // if $country return !== false => return  static::$data[$country][$name] else return error
                $country = static::searchCountry($key , $value);
                if ( $country !== false  && isset(static::$data[$country][$name]))
                {
                   $export = static::$data[$country][$name] ;
                    return $export ;
                }
                else
                {
                    return "hey please change _arguments :)" ;
                }

            }
            else
            {
                $counts = array_keys(static::$data);
                foreach ( $counts as $count )
                {
                   /**
                    * @param ["string"] $count Country , City Or Province List
                    */
                    if ( isset($_arguments[0]) && $_arguments[0] == $count && isset
                    (static::$data[$count][$name]) )
                    {
                        $export = static::$data[$count][$name];
                    }


                }
               
                if ( !isset($export) )
                {
                    return "Sorry I Don't Know What Does You Need ! Please Tell Me ! : @geeksesi";
                }
                else
                {
                    return $export ;
                }
            }

        }
    }


    /**
     * get Static Function uses example : get("phone_code" , "1" , "name")
     *
     * @param ["string"] $_key   for search in $data
     * @param ["string"] $_value for search in $data
     * @param ["array" Or "string"] $_request  "all" or array| parameter need
     *
     * @return $result
     */
    public static function get($_key, $_value, $_request)
    {

        $_key = static::searchCountry($_key, $_value);
        if ($_key === FALSE)
        {
            return "Wrong , please check arguments ";
        }
        else {
            
            if ( is_array($_request) )
            {
                $i = 0;
                foreach ( $_request as $keyItem => $keyValue )
                {
                    if ( isset(static::$data[$_key][$keyValue]) )
                    {
                        $result[$i] = static::$data[$_key][$keyValue];
                    }
                    $i++;

                }
                if ( $result !== null && isset($result) )
                {
                    return $result;
                }else
                {
                    return "Wrong, array has problem . check please !" ;
                }

            }
            
            elseif ( $_request == "all" )
            {
                $i = 0;
                foreach ( static::$data[$_key] as $keyItem => $valueResult )
                {
                    $result[$i] = static::$data[$_key][$keyItem];
                    $i++;

                }
                if ( $result !== null && isset($result) )
                {
                    return $result;
                }else
                {
                    return "Wrong, '$_request' has problem . check please !" ;
                }

            }
            else {
                $result =  static::$data[$_key][$_request];
                if ( $result !== null )
                {
                    return $result;
                }else
                {
                    return "Wrong" ;
                }
            }
        }
    }

    /**
     * get Latitude and longitude
     *
     * @param ["string'] $_name Country, City Or Province Name
     *
     * @return ["array"] latitude and longitude
     */
    public static function get_coordinates($_name)
    {
        if ( !isset(static::$data[$_name]["latitude"]) && !isset(static::$data[$_name]["longitude"]) )
        {
            return  "Wrong , please check get_coordinates" ;
        }
        else
        {
            $return = array(
                'latitude' => static::$data[$_name]["latitude"] ,
                'longitude' => static::$data[$_name]["longitude"]
            );
            return $return ;
        }
    }
}