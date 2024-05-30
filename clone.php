<?php
class Bevarage{
    public $name;
    public function __construct(){
        echo "New bevarage was created";
    }
    public function __clone(){
        echo "Clone Bevarage was created";
    }

}

$bevarage = new Bevarage();
$bevarage->name = "Coffee"."<br/>";
echo $bevarage->name."<br/>";
$bevarage2 = clone $bevarage;
echo $bevarage2->name."<br/>";
$bevarage2->name = "tea";
echo $bevarage2->name."<br/>";