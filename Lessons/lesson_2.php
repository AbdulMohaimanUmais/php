<?php
// Arrays

// 1. Indexed Arrays

$fruits = ['Apple', 'Banana', 'Mango'];

// echo $fruits[0];
// echo $fruits[1];
// echo $fruits[2];
// $fruits[] = 'Orange';
// echo $fruits[3]
// echo count($fruits);

// 2. Associative Arrays

$user = [
    'name' => 'Umais',
    'email' => "umais@gmail.com",
    'age' => 20,
    'city' => 'Bahawalnagar'
];

// echo $user['name'];
// echo $user['email'];
// echo $user['age'];
// echo $user['city'];

// $user['phone'] = '03000000000';
// echo $user['phone'];

// if(isset($user['email'])){
//     echo 'Email exists!';
// }

// if(isset($user['name'])){
//     echo 'Name exists!';
// }


// 3. Nested Arrays

    // $users = [
    //     ['name' => 'Ahmad', 'age' => 20, 'id' => 1212],
    //     ['name' => 'Ali', 'age' => 25, 'id' => 1414],
    //     ['name' => 'Hamza', 'age' => 23, 'id' => 1313]
    // ];

    // echo $users[0]['name'];
    // echo $users[1]['age'];
    // echo $users[2]['id'];

// Useful Array Functions
// 1. Counts array values 
// echo count($fruits)
// 2. Push item at last
// array_push($fruits, 'Orange');
// echo $fruits[3];
// 3. Check if value exists in the array
// if( in_array('banana', $fruits)){
//     echo "Exists";
// } else{
//     echo "Not Exists.";
// }
// 4. Join two arrays together
// array_merge($a, $b);
// 5. Get portion of array (from index 1, take 3 items)
// array_slice($fruits, 1, 3)

?>