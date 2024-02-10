<?php

class homeModel{

    public function __construct(){
        echo 'homeModel class Contructor <br>';

    }

    public function homeModelFunction(){
        echo 'HomePageModelFunction<br>';
        $arr = array('title'=>'HomeTitle', 'data'=>'Home_Data');
        return $arr;
    }

    public function aboutModelFunction(){
        echo 'HomePageModelFunction<br>';
        $arr = array('title'=>'AboutTitle', 'data'=>'About_Data');
        return $arr;
    }

    public function contactModelFunction(){
        echo 'HomePageModelFunction<br>';
        $arr = array('title'=>'ContactTitle', 'data'=>'Contact_Data');
        return $arr;
    }

}

?>