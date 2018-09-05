<?php
// Fibiacci Sequence
// We will need to know the valu of the last 2 numbers ($a and $b)
//The sum of $a and $b ($x)
//A way to stop the sequencer ($limit)
//A way to run a sequencer ( a for loop)
$a=1;
$b=0;
$x=null;
$limit = 144;

for ($i=0; $x<$limit; $i++){

    $x=($a+$b);

    if($b>=1){//Prevent 1 from printing twice
        echo "{$x}<br>";
    }

$a=$b;
$b=$x;
}

/*
function fib ($n) { // a function called fib, declaire variable n (the sequence number)
    for ($n=0;$n<144;$n++) {
        if ($n < 3) { return $n; } // if n is smaller than 3 return n (1 or 2)
        else { return fib ($n - 1) + fib ($n - 2); } 
    /* if the number is 3 or above do 2 sums (n-1) and (n-2)
    and then add the 2 sums together (n-1)+(n-2)
    Example Fibonacci number 4
    (4-1)+(4-2) = 5
    3 + 2 = 5
    }
print $n;

/* alt versions

alt 1

function getFib($n)
{
    return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
}

function fibonacci($n,$first = 0,$second = 1)
{>
 >first,$second];
 >$i<$n;$i++)
 >
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
echo "<pre>";
print_r(fibonacci(50));

alt 2

$x = 0;    
$y = 1; 

for($i=0;$i<=10;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
}   




alt 3


$fib = [1,0];
for($i=0; $i<30; $i++) {
    $next = array_sum($fib);
    array_shift($fib);
    array_push($fib,$next);
    echo $next.", ";
}

alt 4

function fib1($n)
{
    return $n < 3 ? 1 : fib1($n - 1) + fib1($n - 2);
}
function fib2($n, $c = 2, $n2 = 0, $n1 = 1)
{
    return $c < $n ? fib2($n, $c + 1, $n1, $n1 + $n2) : $n1 + $n2;
}

*/


?>