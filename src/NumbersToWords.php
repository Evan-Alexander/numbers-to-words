<?php

    class NumbersToWords
    {
        private $number_data = array(
            array(1, 'one'),
            array(2, 'two'),
            array(3, 'three'),
            array(4, 'four'),
            array(5, 'five'),
            array(6, 'six'),
            array(7, 'seven'),
            array(8, 'eight'),
            array(9, 'nine'),
            array(10, 'ten'),
            array(11, 'eleven'),
            array(12, 'twelve'),
            array(13, 'thirteen'),
            array(14, 'fourteen'),
            array(15, 'fifteen'),
            array(16, 'sixteen'),
            array(17, 'seventeen'),
            array(18, 'eighteen'),
            array(19, 'nineteen')
        );

        function numberIntoWords($input_integer)
        {
            $output = '';
            $number_words = array_reverse($this->number_data);
            foreach ($number_words as $number_and_word) {
                if ($input_integer == $number_and_word[0]) {
                    $output .= $number_and_word[1];
                }
            }

            return $output;


        }
    }


?>
