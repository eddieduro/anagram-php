<?php
    class Anagram
    {
        function AnagramCheck($input)
        {
            $lower_string = strtolower($input);
            $word_array = explode(" ", $lower_string);
            return $word_array;
        }
    }
?>
