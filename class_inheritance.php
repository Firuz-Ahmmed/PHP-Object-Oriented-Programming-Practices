<?php
/**
 * Class User
 * This class represents a user object.
 */
class User {

    /**
     * @var string $first_name The first name of the user.
     */
    var $first_name;

    /**
     * @var string $last_name The last name of the user.
     */
    var $last_name;

    /**
     * @var string $username The username of the user.
     */
    var $username;

    /**
     * This function returns the full name of the user.
     * @return string The full name of the user.
     */
    function fullName(){
        return $this->first_name." ".$this->last_name."<br/>";
    }

}

/**
 * Class Customer
 * This class represents a customer object, which extends the User class.
 */
class Customer extends User {

    /**
     * @var string $city The city where the customer lives.
     */
    var $city;

    /**
     * @var string $country The country where the customer lives.
     */
    var $country;

    /**
     * This function returns the location of the customer.
     * @return string The location of the customer.
     */
    function location(){
        return $this->city." ".$this->country."<br/>";
    }

}

/**
 * Create a new instance of the User class.
 * @var User $u
 */
$u= new User;

/**
 * Set the first name and last name of the user.
 * @var string $first_name
 * @var string $last_name
 */
$u->first_name="John";
$u->last_name="Buren";

/**
 * Print the full name of the user.
 */
echo $u->fullName();

/**
 * Create a new instance of the Customer class.
 * @var Customer $r
 */
$r=new Customer;

/**
 * Set the first name, last name, city, and country of the customer.
 * @var string $first_name
 * @var string $last_name
 * @var string $city
 * @var string $country
 */
$r->first_name= "Jane";
$r->last_name= "Doe";
$r->city="Dhaka";
$r->country="Bangladesh";

/**
 * Print the full name and location of the customer.
 */
echo $r->fullName();
echo $r->location();

/**
 * Print the name of the parent class of the Customer class.
 */
echo get_parent_class('Customer');

?>