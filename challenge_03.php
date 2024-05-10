<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
     // Define a class called "bicycle"
     class Bicycle{
        public $brand;
        public $model;
        public $year;
        public $description;
        private $weight_kg=0.0;
        protected $wheels=2;
     
        // Define a method to get the name of the bicycle
        public function name(){
            return $this->brand." ". $this->model." "."(". $this->year.")";
        }
        public function wheel_details(){
            $wheel_string=$this->wheels==1?"1 wheel":"{$this->wheels} wheels";
            return "It has ".$wheel_string;
        }        
        // Define a method to convert weight from kg to lbs
        public function weight_kg(){
            return $this->weight_kg ."kg";
        }
        public function weight_lbs(){
            return $this->weight_kg * 2.2046226218 ."lbs";
        }

        
        // Define a method to set the weight of the bicycle in lbs
        public function set_weight_kg($value){
            $this->weight_kg = floatval($value);
        }
    }
    class Unicycle extends Bicycle{
        protected $wheels=1;
    }
    
    // Create an instance of the bicycle class
    $bicycle1 = new Bicycle;
    
    // Set the properties of the bicycle
    $bicycle1->brand="Toyota";
    $bicycle1->model="Corolla";
    $bicycle1->year=2020;

    $uni= new Unicycle;
    echo "Bicycle: ".$bicycle1->wheel_details()."<br/>";
    echo "Unicycle: ".$uni->wheel_details()."<br/>";
    echo "<hr/>";
    echo "Set weight using kg<br/>";
    $bicycle1->set_weight_kg(1000);
    // Output the name of the bicycle
    echo $bicycle1->weight_kg()."<br/>";
    echo $bicycle1->weight_lbs()."<br/>";
    echo "<hr/>";
    echo "Set weight using lbs<br/>";
    $bicycle1->set_weight_kg(2000);
    // Output the name of the bicycle
    echo $bicycle1->weight_kg()."<br/>";
    echo $bicycle1->weight_lbs()."<br/>";
    echo "<hr/>";
    
     ?>
</body>
</html>