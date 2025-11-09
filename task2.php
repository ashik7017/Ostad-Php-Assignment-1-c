<?php



    $categories=["food","transport","other"];
    $expenses=[5200,4000,3000];


    array_push($expenses,1500);
    array_push($categories,"entertainment");

    echo "<pre>";
    var_dump($expenses);
    echo "<pre>";
    var_dump($categories);

    echo "<pre>";
   // var_dump($expenses);

    array_pop($expenses);
     echo "<pre>";
    var_dump($expenses);
     array_pop($categories);
     echo "<pre>";
    var_dump($categories);

    $merged=array_merge($expenses,$categories);
     echo "<pre>";
    var_dump($merged);

    $total=array_sum($merged);

    echo $total;


    $text="food transport entertainment other";
    $a2=explode(" ",$text);
    print_r($a2);
    $text=implode(" ",$a2);
    echo $text;

    echo strtoupper($text)."<br>";
    echo strlen($text)."<br>";
    echo substr($text,3)."<br>";
    echo str_replace("other","electricity",$text)."<br>";
    $file=fopen("expenses.txt","w");
    fwrite($file,"food transport entertainment electricity gas");
    fclose($file);
    //echo $file;  
    $data=file_get_contents("expenses.txt");
    file_put_contents("expenses.txt"," appended data",FILE_APPEND);
    $data=file_get_contents("expenses.txt");
    echo $data;
    




?>