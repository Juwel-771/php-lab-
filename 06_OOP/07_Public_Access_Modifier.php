<?php 

    // ** - public means anyone can access this property or method — from inside the class, outside the class, or even from another file.
    class Person {
        public $name = "Juwel"; // public property

        public function sayHi() { // public method
            echo "Hi, I'm $this->name";
        }
    }

    $p = new Person();
    echo $p->name;       // ✅ Allowed: Juwel
    $p->sayHi(); 

    echo "<br>";

    // ** - A private property or method means: It can only be accessed inside the same class where it’s defined.
    
    class BankAccount {
        private $balance = 0;

        public function deposit($amount) {
            $this->balance += $amount;
            echo "Deposited $amount. Balance: $this->balance";
        }
    }

    $acc = new BankAccount();
    $acc->deposit(1000);   
    echo $acc->balance;   

    echo "<br>";

    // ** - A protected property or method is: 
    // ** Accessible inside the class itself
    // ** Accessible inside any child/subclass
    // ** Not accessible outside the class or object

    class Animal {
        protected $name = "Unknown";

        protected function speak() {
            echo "I am an animal.\n";
        }
    }

    class Dog extends Animal {
        public function introduce() {
            echo "My name is $this->name\n";   // ✅ OK
            $this->speak();                    // ✅ OK
        }
    }

    $d = new Dog();
    $d->introduce();     // ✅ Allowed
    // echo $d->name;     ❌ ERROR: Cannot access protected property
    // $d->speak();       ❌ ERROR: Cannot access protected method

?>