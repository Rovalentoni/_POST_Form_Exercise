<?php

$animais = [
    ["familia" => "Canidae", "especie" => "Canis Lupus", "habitat" => "Casas de humanos"],
    ["familia" => "Felidae" , "especie" => "Maine Coon", "habitat" => "Telhados de humanos"],
    ["familia" => "Felidae", "especie" => "Leão", "habitat" => "Savanas Africanas"]
];


//print_r($animais);

$view = [];


if (!empty($_GET)) {
    foreach ($animais as $index => $animal) 

    {
        //echo($animal['familia']);
        //echo($_GET['familia']);
       // var_dump(strpos($animal['familia'], $_GET['familia']));
        if(strpos($animal['familia'], ucfirst($_GET['familia']))  !== false){
            
            $view = $animal;
        }
    }
}
//print_r($view);
//print_r($animal['familia']);
//print_r($_GET['familia']);
//print_r(strpos($animal['familia'], $_GET['familia']));


?>

<?php

$animais2 = [
    ["familia" => "canidae", "especie" => "Canis Lupus", "habitat" => "Casas de humanos"],
    ["familia" => "felidae" , "especie" => "Maine Coon", "habitat" => "Telhados de humanos"],
    ["familia" => "felidae", "especie" => "Leão", "habitat" => "Savanas Africanas"]
];

$view2 = [];
if (!empty($_GET)) {
foreach($animais2 as $index2 => $animal2){
    if(strpos($animal2['familia'], $_GET['familia']) !== false) { 
        $view2 = $animal2;
    }
}
}
print_r($view2);
?>