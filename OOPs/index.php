<?php
class  Player {
    // properties
    public $name;
    public $speed = 5;
    public $running = false;

    // Methods
    function set_name($name){
        $this-> name = $name;
    }
    function get_name() {
        return $this-> name;
    }
    function run(){
        $this->running = true;
    }
    function stopRun(){
        $this->running = false;
    }
}

echo "Lets undestand OOPs ";
// creating the object from the class.
// for accessing the method of object we use '->'.
$player1 = new Player();
$player1->set_name(" harry ");
// echo PHP_EOL;
// echo $player1->get_name();
// echo $player1-> speed;


// $player2 = new Player();
// $player2->set_name(" Rohan");
// echo PHP_EOL;
// echo $player2->get_name();


// $player3 = new Player();
// $player3->set_name(" Jack");
// echo PHP_EOL;
// echo $player3->get_name();



// 🧠 Think of it like this:
// ❌ Without constructor

// You build a room → then decorate it
// (You create object → then call setter)

// ✅ With constructor

// Room comes pre-decorated
// (You create object → name is already set)