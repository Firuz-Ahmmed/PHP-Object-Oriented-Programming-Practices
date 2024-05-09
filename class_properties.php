<?php
/**
 * Class Student represents a student with first name, last name, and country properties.
 */
class Student {
    
    var $first_name;   
    var $last_name;  
    var $country;
}

/**
 * Create two student objects and assign their properties.
 */
$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';
$student1->country = 'USA';

$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';
$student2->country = 'UK';

/**
 * Output the first name and last name of each student.
 */
echo $student1->first_name. "<br/>";
echo $student1->last_name. "<br/>";
echo $student2->first_name. "<br/>";
echo $student2->last_name. "<br/>";

/**
 * Get the default properties of the Student class.
 * @var array
 */
$class_vars = get_class_vars('Student');

/**
 * Output the class variables.
 */
echo "Class vars:<br>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

/**
 * Get the properties of the first student object.
 * @var array
 */
$object_vars = get_object_vars($student1);

/**
 * Output the object variables.
 */
echo "Object vars:<br>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

/**
 * Check if the 'first_name' property exists in the Student class.
 */
if(property_exists('Student', 'first_name')) {
    echo "Property first_name exists in Student class.<br>";
} else {
    echo "Property first_name does not exist in Student class.<br>";
}
