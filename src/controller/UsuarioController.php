<?php 

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("thiago",16);
   
$attr = $_GET["atributo"];
var_dump($attr);

if ( "nome" === "nome"){
    return $u->getNome();
  }

if ( $attr === "idade"){
    return $u->getIdade();
  };







   