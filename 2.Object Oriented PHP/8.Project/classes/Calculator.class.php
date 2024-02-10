<?php

class Calculator{

    public $numb1, $numb2, $operation;

    public function __construct($arg1, $arg2, $arg3){
        $this->numb1=$arg1;
        $this->numb2=$arg2;
        $this->operation=$arg3;
        // echo 'check constructor'.$this->numb1.$this->numb2.$this->operation;
    }

    public function calculator(){
        if($this->operation=="sum"){
            return $this->numb1+$this->numb2;
        }
        elseif($this->operation=="diff"){
            return $this->numb1-$this->numb2;
        }
        elseif($this->operation=="of"){
            return $this->numb1*$this->numb2;
        }
        elseif($this->operation=="by"){
            return $this->numb1/$this->numb2;
        }
    }
}

?>