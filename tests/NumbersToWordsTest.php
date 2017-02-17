<?php

    require_once "src/NumbersToWords.php";

    class NumbersToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_numberIntoWords()
        {
            // Arrange
            $numbersToWords_class = new NumbersToWords();

            $tests = array(
                '1' => 'one',
                '10' => 'ten',
                '11' => 'eleven',
                '20' => 'twenty',
                '29' => 'twenty nine',
                '100' => 'one hundred',
                '943' => 'nine hundred forty three',
                '7234' => 'seven thousand two hundred thirty four',
                '912415 ' => 'nine hundred twelve thousand four hundred fifteen',
                '673413000' => 'six hundred seventy three million four hundred thirteen thousand',
                '1000000000' => 'one trillion',
                '1000000000000' => 'Number is too big!'
            );

            foreach ($tests as $input_as_string => $expected_output) {
                // Arrange
                $input_as_number = (integer) $input_as_string;
                $expected_result = array(
                    'input' => $input_as_number,
                    'output' => $expected_output
                );

                // Act
                $actual_output = $numbersToWords_class->numberIntoWords($input_as_number);
                $actual_result = array(
                    'input' => $input_as_number,
                    'output' => $actual_output
                );

                // Assert
                $this->assertEquals($expected_result, $actual_result);
            }
        }
    }
?>
