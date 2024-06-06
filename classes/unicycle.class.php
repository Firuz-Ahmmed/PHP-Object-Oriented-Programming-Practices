<?php 
class Unicycle extends Bicycle{
    protected $wheels=1;
    public function bug_test(){
        return $this->weight_kg;
    }
}
$treak=new Bicycle;
$treak->brand="Treak";
$treak->model="FX";
$treak->year=2020;
echo 'Bicycle Count'. Bicycle::$instance_count .'<br/>';
echo 'Unicycle Count'. Unicycle::$instance_count .'<br/>';
$bike=Bicycle::create();
$bike=Unicycle::create();
echo 'Bicycle Count'. Bicycle::$instance_count .'<br/>';
echo 'Unicycle Count'. Unicycle::$instance_count .'<br/>';
