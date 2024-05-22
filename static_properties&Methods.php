<?php 
class Student{
    public static $grades=['Freshman','sophomore','Junior','Senior'];
    private static $total_students=0;
    public static function motto(){
        return "To learn PHP OOP!";
    }
    public static function count(){
        return self::$total_students;
    }
    public static function add_student(){
        return self::$total_students++;
    }
    
    

}
echo Student::$grades[0];
echo "<br/>";
//echo Student::$total_students;
echo Student::motto();
echo "<br/>";
echo Student::count();
echo "<br/>";
echo Student::add_student();
echo "<br/>";
