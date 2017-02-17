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
            array(19, 'nineteen'),
            array(20, 'twenty'),
            array(30, 'thirty'),
            array(40, 'forty'),
            array(50, 'fifty'),
            array(60, 'sixty'),
            array(70, 'seventy'),
            array(80, 'eighty'),
            array(90, 'ninety'),
            array(100, 'hundred'),
            array(1000, 'thousand'),
            array(1000000, 'million'),
            array(1000000000, 'trillion')
        );

        function numberIntoWords($input_integer)
        {
            $output = '';
            $number_words = array_reverse($this->number_data);

            foreach ($number_words as $number_and_word) {
                $number = $number_and_word[0];
                $word = $number_and_word[1];

                if ($input_integer >= $number) {
                    // if input >= 100
                    if ($input_integer >= 100) {
                        // multiple = floor of input divided by number
                        $multiple = floor($input_integer / $number);
                        // if multiple > 9 then input is too large - Stop!
                        if ($multiple > 999) {
                            return 'Number is too big!';
                        }
                        // get word for multiple and prepend it to the word of the number
                        $multiple_word = $this->numberIntoWords($multiple);
                        $word = $multiple_word . ' ' . $word;
                        // multiply the number by the multiple
                        $number = $number * $multiple;
                    }

                    if ($output) {
                        $output .= ' ';
                    }

                    $output = $output . $word;

                    $input_integer = $input_integer - $number;
                }
            }

            return $output;


        }
    }


?>
