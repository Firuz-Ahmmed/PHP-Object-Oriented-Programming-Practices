<!DOCTYPE html>
<html>
<head>
    <title>My Web Page</title>
</head>
<body>
    <!-- Define a class named 'Student' with properties for name, age, gender, height, and weight -->
    <?php
    class Student {
        public $name;
        public $age;
        public $gender;
        public $height;
        public $weight;
    } 
    // Get an array of all declared classes
    $classes=get_declared_classes();
    // Output the names of all declared classes
    echo "Classes: ". implode(', ', $classes). "<br>";
    // Define an array of class names to check for existence
    $class_names = ['Product', 'Student', 'Student'];
    // Loop through the array of class names
    foreach($class_names as $class_name) {
        // Check if the class exists
        if(class_exists($class_name)) {
            // Output that the class exists
            echo "{$class_name} is a declared class.<br>";
        } else {
            // Output that the class does not exist
            echo "{$class_name} is not a declared class.<br>";
        }
    }
   ?>
</body>
</html>