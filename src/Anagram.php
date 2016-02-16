<?php
    class Anagram
    {
        function AnagramCheck($input)
        {
            $lower_string = strtolower($input);
            $word_array = explode(" ", $lower_string);
            $anagrams = array();

            foreach($word_array as $word){
                $anagram_words = array();
                $letters_array = str_split($word, 1);
                // $sorted_letters = sort($letters_array);

                foreach ($letters_array as $letter) {
                    array_push($anagram_words, $letter);
                }

            }
            sort($anagram_words);
            foreach($anagram_words as $anagram){
                array_push($anagrams, $anagram);
            }
            $results = implode($anagrams);

            if(count_chars($lower_string) == count_chars($results)){
                return $results ." ". $lower_string;
            }
        }
    }
?>
