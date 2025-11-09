<?php

// 1 solution 
const appname="My App";
const author="Nasif Sobhan";

// 2 solution

echo "1: App name is : ".appname." and Author name is :".  author;

echo "<br>";
print ("2: App name is : ".appname." and Author name is :".  author);
echo "<br>";

printf("3: The app name is %s and Author name is : %s",appname,author);


$food=5200;
$transport=2000;
$other=1000;

$total=$food+$transport+$other;
echo"Total expense is".$total;
$average=$total/3;
echo "<br>";

echo"Average expense is".$average;

if($total>1000){
    echo "Budget Exceeded"."<br>";

}
    else{
        echo "Within Budget";
    }

    $result=$total>1000?"Budget Exceeded":"Within Budget";
    echo $result;

    switch(true){
        case ($total>1000):
             echo "Budget Exceeded"."<br>";
             break;
        default:
            echo "Within Budget";

    }

    function total($food,$transport,$other){
        echo"<br>";
        echo $food+$transport+$other;
        echo"<br>";
    }


    total($food,$transport,$other);



    function budget($total){
        if($total>1000){
            echo"over budget";
        }
        else{
            echo"within budget";
        }
    }


    budget($total);



?>