<?php
require_once '../data/array.php';


$id = $_GET['id'];

foreach($arrayReflexo as $value){
    if($value["id"] == $id ){
        $name = $value["name"];
        $price = $value["price"];
        $description = $value["description"];
        $picture = $value["picture"];
        $place = $value["place"];

    }
}
?>

