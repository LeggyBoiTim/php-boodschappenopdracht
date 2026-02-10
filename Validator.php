<?php

class Validator {
    public static function string($value, $min = 1, $max = INF) {
        $value = trim($value);
        return is_string($value) && strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function integer($value, $min, $max = INF) {
        return is_int((int) $value) && $value >= $min && $value <= $max;
    }

    public static function decimal($value, $min, $max = INF) {
        return is_numeric((float) $value) && $value >= $min && $value <= $max;
    }
}