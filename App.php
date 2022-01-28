<?php 
    class App {
        public $name;
        public $release_date;
        public $version = '1.0';
        public $price;

        function __construct($_name, $_price) {
            $this->name = $_name;
            $this->price = $_price;
        }

        public function startApp() {
            return 'Launching the app...';
        }
        
    }
?>