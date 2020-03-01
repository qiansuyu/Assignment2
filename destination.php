<?php

class destination{
    private $destList = array(
        "Mercury" =>array(
            "distance" => 56974146,
            "travelSpeed" => 1000000,
            "costPerMile" => 0.15),
        "Venus" => array(
            "distance" => 25724767,
            "travelSpeed" => 209099,
            "costPerMile" => 0.12),
        "Mars" => array(
            "distance" => 48678219,
            "travelSpeed" => 225150,
            "costPerMile" => 0.12),
        "Jupiter" => array(
            "distance" => 390674710,
            "travelSpeed" => 22555150,
            "costPerMile" => 0.20),
        "Saturn" => array(
            "distance" => 792248270,
            "travelSpeed" => 90295150,
            "costPerMile" => 0.20),
        "Neptune" => array(
            "distance" => 2703959960,
            "travelSpeed" => 10990909,
            "costPerMile" => 0.22),
        "Uranus" => array(    "distance" => 1692662530,
            "travelSpeed" => 55555150,
            "costPerMile" => 0.22),
        "Pluto" => array(
            "distance" => 4670000000,
            "travelSpeed" => 55555150,
            "costPerMile" => 0.22),
    );

    function getDest() {


        $array = ( array_keys($this->destList));
        asort($array);
        return $array;

     }
     function getDistance($name){

        foreach ($this->destList as $key=>$value){
                    if($name == $key){
                    return number_format($value['distance']);
                }

        }

     }
     function getDay($name){
         foreach ($this->destList as $key=>$value){
             if($name == $key){
               $day  = ($value['distance'] / $value['travelSpeed'])  ;
                return round($day);

         }


     }}
    function getSpeed($name){
        foreach ($this->destList as $key=>$value){
            if($name == $key){

                return  number_format($value['travelSpeed']);

            }


        }}
    function getCost($name){
        foreach ($this->destList as $key=>$value){
            if($name == $key){

                $cost =  ( $value['costPerMile'] * $value['distance']);
                return  number_format($cost,2);

            }



        }



}}
