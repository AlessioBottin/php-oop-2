<?php 
    require_once __DIR__ . '/ProductAccountability.php';
    class App {
        use ProductAccountability;
        
        public $name;
        public $release_date;
        public $version = '1.0';
        public $price;

        function __construct($_name, $_price) {
            $this->name = $_name;

            if(is_int($_price)) {
                $this->price = $_price;
            } else {
                throw new Exception('$_price must be a number');
            }
        }

        public function startApp() {
            return 'Launching the app...';
        }
        
    }
?>