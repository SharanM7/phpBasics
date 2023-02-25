<?php

$num = $argv[1];

// print_r($argv);

// print "Arg : $num\n";

if (!validation($num)){
    exit;
}

printStar($num, true);


function validation($number){
    if (!is_numeric($number)) {
        print "Invalid arg\n";
        return false;
    }
    return true;
}


function printStar($num, $flag =false){

    if($flag) print "star pattern:\n"; 


    for ($i=0; $i<$num; $i++){
        for ($j=0; $j<=$i; $j++){
            print "*";
        }
        print "\n";
    }
}