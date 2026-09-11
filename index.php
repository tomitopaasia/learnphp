<?php

class Box {

    public function __construct(private $w, private $h, private $l) {
        var_dump('Box has been created');
    }

    public function volume(){
        return $this->w * $this->h * $this->l;
    }

    public function __toString() {
        return "I'm a box with W: $this->w H: $this->h L: $this->l";
    }

    public function __destruct() {
        var_dump('Box was destroyed');
    }
}

$box1 = new Box(1, 2, 3);
$box4 = $box1;
$box1 = 1;
$box2 = new Box(4, 5, 6);
var_dump($box1, $box2);
$box3 = clone $box2;
echo $box1;
