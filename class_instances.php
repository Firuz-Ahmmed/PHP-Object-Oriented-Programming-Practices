<?php
/**
 * Class Student
 * This class represents a student object.
 */
class Student {

}

/**
 * Create two new instances of the Student class.
 * @var Student $student1
 * @var Student $student2
 */
$student1 = new Student;
$student2 = new Student;

/**
 * Print the class name of the first student object.
 * @var string $class_name
 */
$class_name = get_class($student1);
echo $class_name. "<br/>";

/**
 * Define an array of class names to check against.
 * @var array $class_names
 */
$class_names = ['Product', 'student', 'Student'];

/**
 * Loop through the class names and check if the first student object is an instance of each one.
 * @var string $class_name
 */
foreach ($class_names as $class_name) {
    if (is_a($student1, $class_name)) {
        /**
         * If the student object is an instance of the class, print a message indicating so.
         */
        echo "student1 is a {$class_name}.<br/> ";
    } else {
        /**
         * If the student object is not an instance of the class, print a message indicating so.
         */
        echo "student1 is not a {$class_name}.<br/> ";
    }
}
?>