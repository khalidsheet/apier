<?php 

// check if this an array or not
$isArrayFilter = new Twig_Filter('array', function ($string) {
    return is_array($string);
});