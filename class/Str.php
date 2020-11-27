<?php
class Str {


    static function random($length){

            $alpha = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";

            return substr(str_shuffle(str_repeat($alpha, $length)), 0, $length);

    }

}
