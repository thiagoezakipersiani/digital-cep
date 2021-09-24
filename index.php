<?
require_once "vendor/autoload.php";

use thiago\cep\Search;

$busca= new Search;

$resultado= $busca->getAddressFromZipCode('19906050');

print_r($resultado);
?>