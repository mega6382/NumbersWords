<?php

include "autoload.php";

// A few Examples


$num = 32432;

$ret = Numbers_Words::toWords($num,"en_GB");

var_dump("British English", $ret);


$ret = Numbers_Words::toWords($num,"nl");

var_dump("Dutch", $ret);


$ret = Numbers_Words::toWords($num,"fr");

var_dump("French", $ret);


$ret = Numbers_Words::toWords($num,"de");

var_dump("German", $ret);


$ret = Numbers_Words::toWords($num,"id");

var_dump("Indonesian", $ret);


$ret = Numbers_Words::toWords($num,"dk");

var_dump("Danish", $ret);


$ret = Numbers_Words::toCurrency($num,"en_US", "USD");

var_dump("American English", $ret);




