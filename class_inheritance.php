
<?php
 class User{
    var $first_name;
    var $last_name;
    var $username;
    function fullName(){
        return $this->first_name." ".$this->last_name."<br/>";
    }

 }
 class Customer extends User{
    var $city;
    var $country;
    function location(){
        return $this->city." ".$this->country."<br/>";
    }

 }
 $u= new User;
 $u->first_name="John";
 $u->last_name="Buren";

 echo $u->fullName();
 $r=new Customer;
 $r->first_name= "Jane";
 $r->last_name= "Doe";
 $r->city="Dhaka";
 $r->country="Bangladesh";
 echo $r->fullName();
 echo $r->location();
echo get_parent_class('Customer');

?>