<?php

include_once("PodeBeber.php");
include_once("PodeDancar.php");
include_once("PodeComer.php");

$podeBeber = new PodeBeber();
$podeDancar = new PodeDancar();
$podeComer = new PodeComer();

$podeBeber->proximo($podeDancar)->proximo($podeComer);


echo $podeBeber->processar(regras: "beber");