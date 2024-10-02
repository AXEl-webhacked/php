<?php
class Client{
    var $name; 
    var $age; 
    var $city;
    public function __construct(){}
}

$client = new Client();
$client -> name = "ale";
$client -> age = 21;
$client -> city = "luque";

$code_json = json_encode($client);

echo $code_json;

?>