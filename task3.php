<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="task3.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
     <label for="name">Budget</label>
    <input type="number" name="budget" id="name">
    <input type="submit" value="Submit">
     <input type="submit" value="Destroy">

</form>

<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['name']) && isset($_POST['budget'])){
            $name=$_POST['name'];
            $budget=$_POST['budget'];
        }

    $_SESSION['name']=$name;
    $_SESSION['budget']=$budget;
    echo "Welcome, (".$_SESSION['name'].")! Your budget is (".$_SESSION['budget'].").";
    if(isset($_POST['destroy'])){
            session_unset();
            session_destroy();
    }
   


    }


    $arr=[23,345,4,56,57,67];
   
    
    function recur($a1,$c){
         $sum=0;
        if($c==0)return 0;
        else{
            return $sum=$sum+$a1[$c-1]+recur($a1,$c-1);
        }
    }

   $sum= recur($arr,count($arr));

    echo "<br>sum= ".$sum;


    function discount($cost){
        if($cost>2000){
            return $cost*.3;
        }
        else{
            return $cost*.2;
        }
    }

    function process ($item,$callback){
        if($item=="food"){
            echo "<br>the discount is= ".$callback(2000);
        }
        else{
            echo "<br>the discount is= ".$callback(1500);
        }

    }


    process("food",'discount');

    //solution 6

    try{
        $num1=10;
        $num2=20;
        if($num2==0){
            throw new Exception("Division by Zero is not allowed");
        }
        echo "<br>".$num1/$num2;
    }
    catch(Exception $e){
        echo "Caught exception".$e->getMessage();
    }
    finally{
        echo "<br>Even if any error or not this section always executes";
    }


   

?>




</body>
</html>




