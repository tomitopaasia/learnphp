<?php

class cat {
    use MakesSounds;
}

class dog {
    use HasSmell, makeSound;
}

trait hasSmell {
    public $smell;
    public function sniff() {
        return 'Smells like ' . $this->smell;
    }
}

trait MakeSound {
    public $sound;
    public function noise() {
        return 'Makes a ' . $this->sound . ' sound';
    }
}