<?php 

    // *** A class is the blueprint. An object is the real product made from that blueprint.

    // *** Old way to create class
    class Mobile{
        var $model; // *** Variable (properties)

        function showModel($number){ // *** Function (method)
            global $model;
            $model = $number;

            echo "Mobile model: ".$model;
        }
    }

    $samsung = new Mobile; // *** Object define, $samsung is the object
    $samsung->showModel('Galaxy');
    echo "<br>";

    $LG = new Mobile;
    $LG->showModel('Aqua');
    echo "<br>";

    $nokia=new Mobile;
    $nokia->showModel('Asha Lumia');
    echo "<br>";

    // *** Update version to create class
    class Car{
        public $carName; // *** properties
        public $carModel; // *** properties

        function carDetails($name, $model){ // *** method
            echo "Car Name: ".$this->carName = $name."<br>";
            echo "Car Model: ".$this->carModel = $model."<br>";
        }
    }

    $myCar = new Car;
    $myCar->carDetails("Audi", "Q800");
    
    echo "<br>";

    class Bike{ // 1
        public $model;
        public $price;

        function show_model($price, $model){
            $this->model = $model;
            $this->price = $price;

            echo $model. " price is ". $price;
        }
    }

    $myBike = new Bike(); 
    $myBike->show_model(30, "R15");

    echo "<br>";

    class Person{ // 2
        public $name;
        public $age;
        public $ID;

        function personDetails(){
            echo "His name: ".$this->name. " Age: ".$this->age. " ID: ".$this->ID;
        }
    }

    $personOne = new Person();

    echo $personOne->name = "Juwel" . "<br>";
    echo $personOne->age = 25 . "<br>";
    echo $personOne->ID = 002255 . "<br>";

    $personOne->personDetails();

    echo "<br>";

    class Student { // 3
        public $studentName;
        public $studentAge;
        public $studentSubject;

        function studentInfo(){
            echo "Name: ". $this->studentName. " ". "Age: ".$this->studentAge. " Subject ". $this->studentSubject;
        }
    }

    $newStudent = new Student();

    $newStudent->studentName = "Mike";
    $newStudent->studentAge = 26;
    $newStudent->studentSubject = "Computer Science";

    $newStudent->studentInfo();

    echo "<br>";

    class Book{ // 4
        public $title; 
        public $author;
        public $page;
        public $year;

        function book_history(){
            echo "The book ".$this->title. " was published ".$this->year. " . Around ".$this->page. " was written by ".$this->author;
        }

    }

    $newBook = new Book();

    $newBook->title = "Clean Code";
    $newBook->author = "Robert C. Martin";
    $newBook->page = 464;
    $newBook->year = 2009;

    $newBook->book_history();

    echo "<br>";
    echo "<br>";

    class BankAccount {
        public $owner; 
        public $balance = 0;
        public $accountNo = 224424569;

        function deposit($amount){
            $this->balance += $amount;
            echo $amount ." has been deposit to this account no: ".$this->accountNo. ". Balance: ".$this->balance;
        }

        function withdraw($amount){
            if($amount > $this->balance){
                echo "Insufficient balance to make withdraw";
            }else{
                $this->balance -= $amount;
                echo $amount." has been withdraw from this account no : ".$this->accountNo. ". Balance: ".$this->balance;
            }
        }
    }

    $newAccount = new BankAccount();

    $newAccount->owner = "Juwel";
    echo "Account owner : ".$newAccount->owner;
    echo "<br>";

    $newAccount->deposit(5000);
    echo "<br>";
    $newAccount->withdraw(5000);
    echo "<br>";
    $newAccount->deposit(10000);
    echo "<br>";
    $newAccount->withdraw(2000);



?>