<?php

require "Button.php";

    $texto = $_POST[texto];
    // $curvatura = $_post[curvatura];
    $cor = $_POST[cor];
    $fundo = $_POST[fundo];

$button1 = new Button($texto,15,$cor,$fundo);
