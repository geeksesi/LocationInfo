<?php
trait Base
{
    // @variable  $data is define in "Country , City Or Province" Class

    /**
    * searchCountry( $_key , $_value ) :
    *
    * @param [string] $_key  $this->data["Country , City Or , Province
    * Name"]["$_key"]
    * @param  [string] $_value  $this->data["Country , City Or , Province
    * Name"]["$_key"]["$_value"]
    *
    * @return $key
    */
    public function searchCountry($_key, $_value)
    {
        /**
         * Two Foreach to Get $this->data["Country , City Or , Province Name"]
         * The First : Get =>> every Country , City Or Province Name Value ;
         * secondary : get which Country , City Or Province has $_key && $_value
        */
        foreach ($this->data as $key => $value)
        {
            /**
             * @param [string] $key   $this->data["Country , City Or , Province Name"]
             * @param [string] $value array => $this->data["Country , City Or ,
             * Province Name"]["value"]
            */
            foreach ($value as $keyResult => $valueResult)
            {
                /**
                 * @param [string] $keyResult   $this->data["Country , City Or , Province
                 * Name"]["key"]["$keyResult"]
                 * @param [string] $valueResult  $this->data["Country , City Or , Province
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
     * @param [string] $name is : get_phone_code
     * @param [string] $arguments exam:'ایران' , 'name' or :  'iran' | if has
     # two parameter :
     * @param [string] $arguments[0] $this->data["Country , City Or , Province
     * Name"]["key"]["value']
     * @param [string] $arguments[1] $this->data["Country , City Or , Province
     * Name"]["key"]
     # one parameter
     * @param [string] $arguments[0] $this->data["Country , City Or
     * Province Name"]
     *
     * @return $export
     */
    public function __call($_name, $_arguments = [] )
    {

        $name = str_replace("get_","", $_name);

        if ( !isset($_arguments) )
        {
            return "hey please check arguments :) Thank you  ";
        }
        else
        {
            
            if ( isset($_arguments[0]) && isset($_arguments[1]) )
            {
                $value = $_arguments[0];
                $key = $_arguments[1];
                // need Country , City Or Province Name for export $name's value
                // if $country return !== false => return  $this->data[$country][$name] else return error
                $country = static::searchCountry($key , $value);
                if ( $country !== false  && isset($this->data[$country][$name]))
                {
                   $export = $this->data[$country][$name] ;
                    return $export ;
                }
                else
                {
                    return "hey please change arguments :)" ;
                }

            }
            else
            {
                $counts = array_keys($this->data);
                foreach ( $counts as $count )
                {
                   /**
                    * @param ["string"] $count Country , City Or Province List
                    */
                    if ( isset($_arguments[0]) && $_arguments[0] == $count && isset
                    ($this->data[$count][$name]) )
                    {
                        $export = $this->data[$count][$name];
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
     * @param ["string"] $key   for search in $data
     * @param ["string"] $value for search in $data
     * @param ["array" Or "string"] $request  "all" or array| parameter need
     *
     * @return $result
     */
    public function get($_key, $_value, $_request)
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
                    if ( isset($this->data[$_key][$keyValue]) )
                    {
                        $result[$i] = $this->data[$_key][$keyValue];
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
                foreach ( $this->data[$_key] as $keyItem => $valueResult )
                {
                    $result[$i] = $this->data[$_key][$keyItem];
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
                $result =  $this->data[$_key][$_request];
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
     * @param ["string'] $name Country, City Or Province Name
     *
     * @return ["array"] latitude and longitude
     */
    public function get_coordinates($_name)
    {
        if ( !isset($this->data[$_name]["latitude"]) && !isset($this->data[$_name]["longitude"]) )
        {
            return  "Wrong , please check get_coordinates" ;
        }
        else
        {
            $return = array(
                'latitude' => $this->data[$_name]["latitude"] ,
                'longitude' => $this->data[$_name]["longitude"]
            );
            return $return ;
        }
    }
}