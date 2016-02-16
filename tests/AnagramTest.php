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
            $this->assertEquals("hey", $result);
        }
    }
?>