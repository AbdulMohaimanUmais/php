<?php 
// FOr Loop
// $arr = [1,2,3,4,5];
// for($i=0; $i<5; $i++){
//     echo "$i<br>";
// }

// For Each Loop

$products = [
    ['name' => 'mobile', 'price' => 1000],
    ['name' => 'phone', 'price' => 2000],
    ['name' => 'tablet', 'price' => 5000]

];

foreach($products as $product){
    echo 'Name: '.$product['name'].' Price: '.$product['price'] .'<br>';
}


?>