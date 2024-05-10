<?php 
class Human{
    var $name;
    var $age;
    var $gender;
    function description(){

        return  $this->name. " ". $this->age." ". $this->gender."<br/>";
    }

}
class Student extends Human{

    var $roll;
    var $class;
    function student_info(){
        return $this->roll." ".$this->class."<br/>";
    }
}
class Gurdian_info extends Student{
 
    var $mobileNo;
    function gurdian_info(){
        return $this->name." ".$this->mobileNo."<br/>";
    }
}
$human = new Human;
$human->name = "John";
$human->age="25";
$human->gender= "male";
echo $human->description()."<br/>";
$gurdian=new Gurdian_info;
$gurdian->name = "Mr. Doe";
$gurdian->age= "66";
$gurdian->gender= "Male";
$gurdian->mobileNo= "0164946446";
echo $gurdian->description()."<br/>";
echo $gurdian->gurdian_info()."<br/>";






