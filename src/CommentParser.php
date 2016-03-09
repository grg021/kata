<?php

class CommentParser
{
    public function parse($number)
    {
    	$prime = [];
        while ($number > 1) {
        	if ($number % 2 == 0) {
    	    		$prime[] = 2;
    	    		$number /= 2;
    	    	}
            if ($number % 3 == 0) {
                $prime[] = 3;
                $number /= 3;
            }
            if ($number % 5 == 0) {
                $prime[] = 5;
                $number /= 5;
            }
            if ($number % 7 == 0) {
                $prime[] = 7;
                $number /= 7;
            }
        }
        sort($prime, SORT_NUMERIC);
        var_dump($prime);
        return $prime;
    }
}
