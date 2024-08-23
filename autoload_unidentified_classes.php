<?php

/**Autoloads a class file based on the given class name.
+ * @param string $class The name of the class to autoload.
+ */

function my_autoload($class){
    if(preg_match('/\A\w+\Z/',$class)){
        include 'Classes/'.$class.'.class.php';
    }

}

spl_autoload_register('my_autoload');
$bike=new Bicycle;
$bike->brand="suzuki";

echo $bike->brand;

