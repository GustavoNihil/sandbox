<?php
    function empty_value($value) { // empty = vazio/nulo/inútil/desocupado 
        return empty(trim($value)) && ($value != 0);
    }

    function has_value($value) {
        return isset($value) && $value !=="";
    }

    function max_size($value, $max) {
        return strlen($value) > $max;
    }

?>