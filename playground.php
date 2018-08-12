<?php namespace playground; 

use Acme\Foo as Bar; 

class Hello extends Bar {

    const A = 42;

    /**
     * @param string $name
     * @return void
     */
    public static function say (string $name) : void {
        echo "Hello, {$name} \n"; 
    }
}

// this is comment 
Hello::say("World"); 

array_map(
    function ($n) { 
        if ($n % 2 == 0) {
            return $n;
        } else {
            return $n + 1;
        }
    }, 
    range(10));
