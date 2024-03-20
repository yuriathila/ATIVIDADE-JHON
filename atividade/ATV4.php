
<?php 

while (true) {
    $m = intval(fgets(STDIN));
    $n = intval(fgets(STDIN));
    $soma = 0; 
    
        break;
    }
    
    if($m < $n){
        $menor = $m;
        $maior = $n;
    } else if ($m > $n){ 
        $menor = $n;
        $maior = $m; 
    }
    
    for($i = $menor; $i <= $maior; $i++){ 
        echo $i . " "; 
        $soma += $i; 
    }
    
    echo "Sum=" . $soma . "\n"; 


?>