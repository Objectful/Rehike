<?php


\Rehike\TemplateFunctions::register("getBadge", function($array, $name) {
    for ($i = 0; $i < count($array); $i++) {
        if (@$array[$i] -> metadataBadgeRenderer -> style == $name) return $array[$i];
    }
});