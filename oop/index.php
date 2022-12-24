<?php

// bluebrint
// class user {
//      var $name;
//      var $email;

//      function login(){
//         echo "login : ".$this->name;
//      }
// }


// $ob1  = new user;
// $ob1->name = "mohamed";
// $ob1->login();

// // echo "<hr>";


// // $ob2  = new user;
// // $ob2->name = "ahmed";
// // $ob2->email = "eom";
// // $ob2->login();






// class calc{
//     var $x;
//     var $y;
//     var $z;
//     function add(){
//         $this->z = $this->x + $this->y;
//         return $this;
//     } 
//     function sub(){
//         $this->z = $this->x - $this->y;
//         return $this;
//     } 
//     function mult(){
//         $this->z = $this->x * $this->y;
//         return $this;
//     } 
//     function div(){
//         $this->z = $this->x / $this->y;
//         return $this;
//     } 
//     function printcalc(){
//         // print_r($this);
//         return  $this->z;
//     }
// }



// method chaing

// $calc = new calc;
// $calc->x = 20;
// $calc->y = 30;
// echo $calc->mult()->printcalc();
// $calc->printcalc();
// echo $calc->mult()->z;




// class validation{
//     var $errors = [];

//     public function required($input){
//         if(empty($input) || strlen($input) == 0 || $input == ""){
//             $this->errors[] = "this input is required";
//         }
//     }

//     public function show(){
//         print_r($this->errors);
//     }
// }


// if(isset($_POST['name'])){
//     $validate = new validation;
//     $validate->required($_POST['name']);
//     $validate->show();
// }



// insert("category",[])->excute();
// update("category",[])->where("id","=",2)->excute()
// select("category","*")->first()


// include "DB.php";

// $data = DB::table("category")->select()->all();

// $db = new DB;
// $data = $db->table("category")->select()->all();
// $data = $db->delete("course")->where("id",2)->excute();
// $data = $db->insert("category",[
//     "id"=>8,
//     "name"=>"db catefgory"
// ])->excute();
// echo "<pre>";
// print_r($data);



// $name = "mohamed";

// $name .="ahmed";


// echo $name;






// class test{
//     private $name = "mohamed";
//     function one(){
//         echo "one function ".$this->name;
//     }
// }

// $test = new test;
// $test->one();
// echo $test->name;


// class child extends test{
//     function two(){
//         echo $this->name;
//     }
// }

// $t=new test;
// $t->one();


// $c = new child;
// $c->two();










// class user{
//     private string $password;

//     public function setPassword($p){
//         $this->password = md5($p);
//     }
//     public function getPassword(){
//         return $this->password;
//     }
// }


// $user = new user;
// $user->setPassword(123456);

// echo $user->getPassword();






// class test{

//     const pi = 22/7;

//     public static $name = "ahmed";

//     public static function go(){
    
//         echo "go method ".self::pi;
//     }
// }
// $t = new test;
// print_r($t);
// test::$name = "mohamed";
// echo test::$name;
// test::go();


// class user{

//     public function logout(){
//         echo "logout";
//     }
//    final public function login(){
//         echo "user login";
//     }
// }


// class person extends user{
//     // public function login(){
//     //     echo "person login";
//     // }
// }

// $p = new person;
// $p->login();


// echo person::$counter;



// class test{
//     public function __construct($x)
//     {
//         echo $x;
//     }

//     public function hi(){
//         echo "hi <br>";
//     }

//     public function __destruct()
//     {
//         echo "end";       
//     }
// }


// $t = new test("ahmed");
// $t->hi();

// interface 
// abstract class

// magic methods (call , get , set)


// trait


// overloading
// autoload
// namespace








// interface db{
//     public function insert();
//     public function delete();
// }



// class dbmysql implements db{
//     public function insert(){
//         echo "mysql insert";
//     }

//     public function delete(){
//         echo " mysql delete";
//     }
// }


// class dbsqlserver implements db{
//     public function insert(){
//         echo "sql server insert";
//     }

//     public function delete(){
//         echo " sql server delete";
//     }
// }












// $db = new  dbsqlserver;
// $db->insert();




interface a{
    public function amethod();
}


// interface b {
//     public function bmethod();
// }


// class test implements a,b{
//     public function amethod(){
//         echo "a method";
//     }
//     public function bmethod(){
//         echo "b method";
//     }
// }





// abstract class animal{
//     abstract function eat();

//     public function move(){
//        echo  "animal move";
//     }
// }


// class cat extends animal{
//     public function eat(){
//         echo "eat cat";
//     }
// }


// class dog extends animal{
//     public function eat(){
//         echo "dog eat";
//     }
// }


// $dog = new dog;
// $dog->move();




// trait
// namespace
// autoload





// class user{
//     public function __call($name, $arguments)
//     {
//         echo "method ".$name." not found <br>";
//         print_r($arguments);
//     }
// }


// $user = new user;

// $user->go(1,2);





class calc{
    // public function add($x,$y){
    //     echo $x+$y;
    // }

    // public function add($x,$y,$z){
    //     echo $x+$y+$z;
    // }

    
    // public function __call($name, $arguments)
    // {
    //     if($name == "add"){
    //         if(count($arguments) == 2){
    //             echo $arguments[0] + $arguments[1];
    //         }elseif(count($arguments) == 3){
    //             echo $arguments[0] + $arguments[1] + $arguments[2];
    //         }
    //     }
    // }


    // public function netsalary($salary,$tax){

    // }

    
    // public function netsalary($salary,$tax,$comm){

    // }

        // public function __get($name)
        // {

        //     echo "this prop ".$name." not found";
        // }

        // public function __set($name, $value)
        // {
        //     echo "this prop ".$name." not found and value is ".$value ;
        // }

}


// $calc = new calc;
// $calc->name ="eslam";
// echo $calc->name;
// $calc->add();



// trait soul{
//     public function soulmethod(){
//         echo "soul";
//     }
// }

// trait body{
//     public function bodymethod(){
//         echo "body";
//     }
// }



// class person{
//     use body,soul;
// }


// $p = new person;
// $p->soulmethod();



// $callback = function($classname){
//     include $classname.".php";
// };

// spl_autoload_register(function($classname){
//     if(file_exists("controller/".$classname.".php")){
//         include "controller/".$classname.".php";
//     }elseif(file_exists("model/".$classname.".php")){
//         include "model/".$classname.".php";
//     }
// });



// $user = new user;
// $user->usermethod();

// $category = new category;
// $category->categorymethod();

// include "DB.php";

// class DB{

// }
// use out\DB;

// print_r(out\DB::table("category")->select()->all());



// class user{

// }




// include "category.php";
// include "user.php";

// use y\user as usermodel;
// $user = new usermodel;







