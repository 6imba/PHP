<?php

class homeModel{
    public function __construct(){
        echo 'Hi I am constructor of class homeModel<br>';

    }
}


class homeController{
    public function __construct(){
        echo 'Hi I am constructor of class homeController<br>';
        $this->obj2 = new homeModel(); // instanciate object of this class homeModel
        print_r($this->obj2);
        echo '<br>';
    }
}

$obj1 = new homeController();
echo 'Print object ! <br>';
print_r($obj1);


?>