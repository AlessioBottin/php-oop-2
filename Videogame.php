<?php 
    require_once __DIR__ . './App.php';

    class Videogame extends App {
        public $multiplayer = true;
        private $available_on = [];

        function __construct($_name, $_price, $_available_on) {
            parent::__construct($_name, $_price);
            $this->available_on = $_available_on;
        }
        
        public function startGame() {
            return 'Searching for a match...';
        }
    }
?>