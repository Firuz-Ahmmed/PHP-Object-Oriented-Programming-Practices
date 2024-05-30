<?php 
class Sofa{
    public static $instance_count = 0;
    public $seats = 3;
    public $arms = 2;
    public function __construct($arg=[]){
        self::$instance_count++;
        $this->seats = $arg['seats']?? $this->seats;
        $this->arms = $arg['arms'] ?? $this->arms;
    }
    public function __destruct(){
        echo "BYE <br/>";
    }
    
}
class Couch extends Sofa{
    public $arms = 3;
}
class Loveseat extends Sofa{
    public $seats = 2;

}
$sofa = new Sofa(['seats'=> 5,'arms'=>2]);
echo 'Sofa<br/>';
echo 'Seats: '.$sofa->seats.'<br/>';
echo 'Arms: '.$sofa->arms.'<br/>';
echo '<br/>';
$couch = new Couch();
echo 'Couch<br/>';
echo 'Seats: '.$couch->seats.'<br/>';
echo 'Arms: '.$couch->arms.'<br/>';
echo '<br/>';
$loveseat = new Loveseat(['seats'=> 1,'arms'=>6]);
echo 'Loveseat<br/>';
echo 'Seats: '.$loveseat->seats.'<br/>';
echo 'Arms: '.$loveseat->arms.'<br/>';
echo '<br/>';
echo 'Instance count: '.Sofa::$instance_count."<br/>";
