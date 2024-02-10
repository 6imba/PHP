<?php
    class ClassA
    {
        public $name,$age;
        public static $sciencetificname ="HomoSepiens",$date;//static property

        public function SetInfo($data1,$data2)// object_method
        {
            $this->name=$data1;//query1 ---- here name is property so no $ sign 
            $this->age=$data2;
        }

        public static function set_coded_date($data3)//static method
        {
            self::$date=$data3;//Instead of $this, for static class_members(variables or functions), we use self, along with scope resolution operator ::
        }         //query2 ----- here $date is static property not the property of an object, so we need to refernce to the variable or use $ sign
    
        public function OOPechoproperty()// object-method 3
        {
            echo self::$sciencetificname;//static property
        }
        public function OOPreturnproperty()// object-method 4
        {
            return self::$date;//static property
        }
    }

//here,  object-method  object-3 and  object-method 4 show the working process of return

?>

