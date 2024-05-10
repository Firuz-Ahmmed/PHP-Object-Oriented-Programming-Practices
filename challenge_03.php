<?php 
     // Define a class called "Bicycle"
     class Bicycle{
        // Declare public properties for the Bicycle class
        public $brand;
        public $model;
        public $year;
        public $description;
        // Declare private property for the Bicycle class
        private $weight_kg=0.0;
        // Declare protected property for the Bicycle class
        protected $wheels=2;
     
        // Method to return the name of the bicycle
        public function name(){
            return $this->brand." ". $this->model." "."(". $this->year.")";
        }
        // Method to return the wheel details of the bicycle
        public function wheel_details(){
            $wheel_string=$this->wheels==1?"1 wheel":"{$this->wheels} wheels";
            return "It has ".$wheel_string;
        }        
        // Method to return the weight of the bicycle in kg
        public function weight_kg(){
            return $this->weight_kg ."kg";
        }
        // Method to return the weight of the bicycle in lbs
        public function weight_lbs(){
            return $this->weight_kg * 2.2046226218 ."lbs";
        }

        // Method to set the weight of the bicycle in kg
        public function set_weight_kg($value){
            $this->weight_kg = floatval($value);
        }
    }
    // Define a class called "Unicycle" which extends the "Bicycle" class
    class Unicycle extends Bicycle{
        // Override the $wheels property for the Unicycle class
        protected $wheels=1;
    }
    
    // Create an instance of the Bicycle class
    $bicycle1 = new Bicycle;
    
    // Set the properties of the Bicycle instance
    $bicycle1->brand="Toyota";
    $bicycle1->model="Corolla";
    $bicycle1->year=2020;

    // Create an instance of the Unicycle class
    $uni= new Unicycle;
    // Display the wheel details of the Bicycle and Unicycle instances
    echo "Bicycle: ".$bicycle1->wheel_details()."<br/>";
    echo "Unicycle: ".$uni->wheel_details()."<br/>";
    echo "<hr/>";
    // Set the weight of the Bicycle instance using kg
    echo "Set weight using kg<br/>";
    $bicycle1->set_weight_kg(1000);
    // Display the weight of the Bicycle instance in kg and lbs
    echo $bicycle1->weight_kg()."<br/>";
    echo $bicycle1->weight_lbs()."<br/>";
    echo "<hr/>";
    // Set the weight of the Bicycle instance using lbs
    echo "Set weight using lbs<br/>";
    $bicycle1->set_weight_kg(2000);
    // Display the weight of the Bicycle instance in kg and lbs
    echo $bicycle1->weight_kg()."<br/>";
    echo $bicycle1->weight_lbs()."<br/>";
    echo "<hr/>";
    
