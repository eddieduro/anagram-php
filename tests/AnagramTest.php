<?php
    require_once 'src/Anagram.php';

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_LowerCase()
        {
            // Arrange
            $new_anagram = new Anagram;
            $input = "Hey";

            // Act
            $result = $new_anagram->AnagramCheck($input);

            // Assert
            $this->assertEquals("ehy hey", $result);
        }

        function test__LetterArr()
        {
            // Arrange
            $new_anagram = new Anagram;
            $input = "you";

            // Act
            $result = $new_anagram->AnagramCheck($input);

            // Assert
            $this->assertEquals("ouy you", $result);
        }
        function test_SortingLetters()
        {
            // Arrange
            $new_anagram = new Anagram;
            $input = "cat";

            // Act
            $result = $new_anagram->AnagramCheck($input);

            // Assert
            $this->assertEquals("act cat", $result);
        }
    }
?>
