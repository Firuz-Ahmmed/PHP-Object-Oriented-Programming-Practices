<?php
class Bicycle{
     protected static $wheels=2;
    public static $instance_count=0;
    public $brand;
    public $model;
    public $year;
    public $description='Used bicycle';
    protected $weight_kg=0.0;
    //protected static $wheels=2;
    

    public const CATEGORIES=['Road','Mountain','Hybrid'];
    public static function create(){
        $class_name=get_called_class();
        $obj=new $class_name;
        self::$instance_count++;
        return $obj;
    
    }
    public function name(){
        return $this->brand." ". $this->model." "."(". $this->year.")";

    }
    public function wheel_details(){
        $wheel_string=static::$wheels==1?"1 wheel":static:: $wheels." wheels";
        return "It has ".$wheel_string;
    }

}