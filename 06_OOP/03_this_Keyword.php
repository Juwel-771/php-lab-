<?php 
    // *** - $this means “this object” — it refers to the current object you are working with inside a class.

    class Box {
        public $width;
        public $height;

        function setSize($w, $h){
            $this->width = $w;
            $this->height = $h;
        }

        function area(){
            echo $this->width * $this->height;
        }
    }

    $area1 = new Box();
    $area1->setSize(5,5);
    $area1->area();


?>