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
        var $brand;
        var $model;
        var $year;
        var $description;
        var $weight_kg;
     
        // Define a method to get the name of the bicycle
        function name(){
            return $this->brand." ". $this->model." "."(". $this->year.")";
        }
        
        // Define a method to convert weight from kg to lbs
        function weight_lbs(){
            return $this->weight_kg * 2.2046226218;
        }
        
        // Define a method to set the weight of the bicycle in lbs
        function set_weight_lbs($lbs){
            $this->weight_kg = $lbs / 2.2046226218;
        }
    }
    
    // Create an instance of the bicycle class
    $bicycle1 = new Bicycle;
    
    // Set the properties of the bicycle
    $bicycle1->brand="Toyota";
    $bicycle1->model="Corolla";
    $bicycle1->year=2020;
    $bicycle1->description="This is a car"; // Note: The description seems to be incorrect for a bicycle
    $bicycle1->weight_kg=1000;
    
    
    // Output the name of the bicycle
    echo $bicycle1->name();
    
    // Output the weight of the bicycle in lbs
    echo $bicycle1->weight_lbs();
    
    // Set the weight of the bicycle to 2000 lbs
    echo $bicycle1->set_weight_lbs(2000);
    
    // Output the weight of the bicycle in kg after setting it to 2000 lbs
    echo $bicycle1->weight_kg;
     
     ?>
</body>
</html>