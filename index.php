<?php



// $name = "ahmed";
// $adress= "cairo";


// $age = 27;

// $price = 22.4;


// $state = true;

// echo  gettype($state);





// $name = "mohamed";
// $Name = "ahmed";
// $nAme = "eslam";

// echo $nAme;






// if(20<10){
//     echo "true";
// }else{
//     echo "false";
// }



// if(20<10):
//     echo "test true";
// else:
//     echo "test false";    
// endif;


// if(20>10)
//     echo "test";

// echo (20>10) ? "true" : "false";


// 90 => 2
// 95  => 5
// 80 =>1 

// $l = 200;
// $oil = 95;


// switch($oil):
//     case 80:
//         echo $l * 1;
//     break; 
    
//     case 90:
//         echo $l * 2;
//     break;    

//     case 95:
//         echo $l * 5;
//     break;    
//     default:
//         echo "not found";
// endswitch;

// // if($oil == 80):
// //     echo $l * 1;
// // elseif($oil == 90):
// //     echo $l * 2;
// // elseif($oil == 95):
// //     echo $l * 5;
// // else:
// //    echo "oil not found"; 
// // endif;


















// $name = "mohamed,ahmed,eslam";
//          0         1     2
// $name = ["mohamed","eslam","ramy"];

// print_r($name);
// var_dump($name);

// echo $name[3];


// $person = ["mohamed",27,0123123123,true,213.3];
// var_dump($person);




// $colors = ["red","green","blue"];
// $i=0;
// while(3>$i){
  
//     echo $colors[$i]."<br>";
//     $i++;
// }


// $i=1;
// while($i<=17){
//     if($i ==11){
//         echo "mohamed";
//     }else{
//         echo $i;
//     }
//     echo "<br>";
//     $i++;
// }





// $numbser =  [20,1,545,1000,4,7];
// $i=0;
// $max = $numbser[0];
// while($i<count($numbser)){
//     if($numbser[$i] > $max){
//         $max = $numbser[$i];
//     }
 
//     $i++;
// }


// echo $max;












// $n = 16;
// 3 => fizz
// 5 => buzz
// 3,5 =>fizzbuzz

// $i=1;
// while($i<=16){
//     if($i%3 == 0 && $i%5 == 0){
//         echo "fizzbuzz";
//     }elseif($i%5 ==0){
//         echo "buzz";
//     }elseif($i%3==0){
//         echo "fizz";
//     }else{
//         echo $i;
//     }
//     echo "<br>";
//     $i++;
// }









$ip = "213.331.55.7";



// $i=0;
// while($i<strlen($ip)){
//     if($ip[$i] == "."){
//         $ip[$i]  = "/";
//     }
//     $i++;
// }


// echo $ip;



// loop ( do while , for ) 
// array associative ,  mult d
// foreach
// function


$numbers = [1,23];


// for($i=0;$i<count($numbers);$i++){
//     echo $numbers[$i]."<br>";
// }


// while($item = array_pop($numbers)){
//     echo $item."<br>";
// }




// 


// echo array_pop($numbers);
// echo array_pop($numbers);
// echo array_pop($numbers);






// $i=0;
// do{
//     $i++;
//     echo $i."<br>";
  
// }while($i>10);



// array 

// $user = ["name" => "ahmed","age"=>26];



// $keys =  array_keys($user);

// $value = array_values($user);
// for($i=0;$i<count($user);$i++){
//     // echo $user[$keys[$i]]."<br>";
//     echo $value[$i]."<br>";
// }



// print_r($user);
// $user = [
//     "name"=>"mohamed",
//     "age"=>25
// ];

// while($k = key($user)){
//     echo $user[$k]."<br>";
// }







// functions 



// function welcome($x){
//     echo "hi $x <br>";
// }


// welcome("ahmed");
// welcome("eslam");






// function number($n){
//     return $n;
// }


// echo 10 + number(30);





function add($x,$y){
    echo $x + $y;
}













// $n1 = 20;
// $n2 = 30;

// add($n1,$n2);




// function increment(&$number){
//      $number++;
//      echo $number;
// }


// $x =10;


// increment($x); //11
// echo "<hr>"; //-------------------
// echo $x; //11




// $user = ["name" => "ahmed","age"=>26];
// foreach($user as $title => $result){
//     echo $title."<br>";
// }




$users = [
    [
        "name"=>"ahmed",
        "age"=>22,
        "skills"=>["html","css"]
    ],
    [
        "name"=>"eslame",
        "age"=>22,
        "skills"=>["html","css"]

    ],
    [
        "name"=>"ramy",
        "age"=>22,
        "skills"=>["html","css"]

    ]
];


// echo $users[0];

// echo "<pre>";
// print_r($users[0]['skills'][1]);


// name : ahmed
// age : 232
// ==================
// name : ahmed
// age : 232
// ===============
// name : ahmed
// age : 232



// foreach($users as $value){
//     foreach($value as $k => $value){
//         if($k != "skills"){
//             // continue;
//             echo $k." : ".$value."<br>";

//         }

//     }
//     echo "<hr>";
// }



// super globals

// ------------  handle request
// post $_POST
// get $_GET
// request $_
// ------------- state managment
// session
// cookies
// ---------------------------
// server
// --------------------------
// globals $GLOBALS








// print_r($_POST);


// echo $_POST['x'] + $_POST['y'];

// foreach($_POST as $k =>$value ){
//     echo $value."<br>";
// }

































// $name = "ahmed";

// echo "hi $name";

// echo 'hi'.$name;










// function calc($oil,$li){
//     switch($oil){
//         case 80:
//           echo  $li * 2;
//         break; 
//         case 90:
//             echo  $li * 5;
//         break; 
//           case 92:
//             echo  $li * 10;
//         break; 
//     }
// }



// calc($_POST['oil'],$_POST['l']);


// $name =  $_POST['name'];


// $list =  explode(",",$name);


// print_r($list);



// foreach($list as $key => $value){
//     echo ++$key."- ".$value."<br>";
// }




// $students = $_POST['students'];
// $course = $_POST['course'];

// $list_of_students =  explode(",",$students);

// $content =  file_get_contents("certificate.html");

// foreach($list_of_students as $student){
//     fopen("cer/".$student.".html","w");
//     $newcontent =  str_replace(["{name}","{course}"],[$student,$course],$content);

//     file_put_contents("cer/".$student.".html",$newcontent);
// }




// print_r($_POST);

// echo "<hr>";
// echo "<pre>";
// print_r($_FILES);


// die;
// // $name = $_POST['name'];
// $imgtmp = $_FILES['img']['tmp_name'];

// print_r($_FILES['img']['name']);die;

// foreach($_FILES['img']['name'] as $key => $value){
   
//     move_uploaded_file($_FILES['img']['tmp_name'][$key],$_FILES['img']['name'][$key]);
// }




// state managment 
    // session
    // cookies 

// server 
// globals


// erd



session_start();

