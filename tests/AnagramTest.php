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
            $this->assertEquals("hey ehy yhe", $result);
        }

        function test__LetterArr()
        {
            // Arrange
            $new_anagram = new Anagram;
            $input = "you";

            // Act
            $result = $new_anagram->AnagramCheck($input);

            // Assert
            $this->assertEquals("you ouy yuo", $result);
        }
        function test_SortingLetters()
        {
            // Arrange
            $new_anagram = new Anagram;
            $input = "cat";

            // Act
            $result = $new_anagram->AnagramCheck($input);

            // Assert
            $this->assertEquals("cat act tca", $result);
        }

        function test_ComparingLetters()
        {
            // Arrange
            $new_anagram = new Anagram;
            $input = "tac";

            // Act
            $result = $new_anagram->AnagramCheck($input);

            // Assert
            $this->assertEquals("tac act tca", $result);
        }


    }
?>
