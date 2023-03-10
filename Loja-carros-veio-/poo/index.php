<?php 

include("AnimalInterface.php");
include("Carro.php");
include("Ferrari.php");
include("Mustang.php");

$cao = new Ferrari(
    "Totó",
    "Vira-lata",
    5,
    "Caramelo"
);

$gato = new Mustang(
    "Mingau",
    "Vira-lata",
    3,
    "Branco"
);

$cao->falar(); // O animal fala
$cao->andar();
$cao->comer();


$gato->falar(); // O animal fala
$gato->andar();

echo "O doguinho chama: " . $cao->getNome() . "<br>";