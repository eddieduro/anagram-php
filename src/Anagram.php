<?php
    class Anagram
    {
        function AnagramCheck($input)
        {
            $lower_string = strtolower($input);
            $word_array = explode(" ", $lower_string);
            $anagrams = array();
            $sorted_anagrams = array();
            $rev_anagrams = array();
            foreach($word_array as $word){
                $anagram_words = array();
                $sorted_anagram_words = array();
                $rev_anagram_words = array();
                $letters_array = str_split($word, 1);

                foreach ($letters_array as $letter) {
                    array_push($anagram_words, $letter);
                    array_push($sorted_anagram_words, $letter);
                    array_push($rev_anagram_words, $letter);
                }

            }
            sort($sorted_anagram_words);
            rsort($rev_anagram_words);

            foreach($sorted_anagram_words as $anagram){
                array_push($sorted_anagrams, $anagram);
            }

            foreach($anagram_words as $angram){
                array_push($anagrams, $angram);
            }

            var_dump($sorted_anagrams);
            var_dump($anagrams);
            foreach ($rev_anagram_words as $rev_anagram) {
                array_push($rev_anagrams, $rev_anagram);
            }
            $join_anagram = implode($anagrams);
            $join_sorted_anagram = implode($sorted_anagrams);
            $join_rev_anagram = implode($rev_anagrams);


            if((count_chars($lower_string) == count_chars($join_anagram)) && (count_chars($lower_string) == count_chars($join_rev_anagram))){
                $results = $join_anagram ." ". $join_sorted_anagram . " " .  $join_rev_anagram;
                return $results;
            }
        }
    }
?>
