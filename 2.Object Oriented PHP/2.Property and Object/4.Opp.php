<?php

class One{

    public $x =2;

    public function __construct(){
        echo $this->x;
    }

}
class Two {

    public function __construct(){
        $this->obj2 = new One();
    }

}

$obj1 = new Two();
?>

<hr>


<?php

class Three{

    public $x =2;

    public function __construct(){
        echo $this->x;
    }

}
class Four extends Three {

    public function __construct(){
    }

}

$obj1 = new Two();
?>