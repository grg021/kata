<?php

class CommentParser
{
    private $prime = [];
    public function parse($number)
    {
        if ($number > 1) {
        	if ($number % 2 == 0) {
    	    		$this->prime[] = 2;
    	    		$number /= 2;
    	    	}
            elseif ($number % 3 == 0) {
                $this->prime[] = 3;
                $number /= 3;
            }
            elseif ($number % 5 == 0) {
                $this->prime[] = 5;
                $number /= 5;
            }
            elseif ($number % 7 == 0) {
                $this->prime[] = 7;
                $number /= 7;
            }
            else 
            {
                $this->prime[] = $number;
                $number /= $number;
            }
            $this->parse($number);
        } else {
            // $this->prime[] = 1;
        }
        sort($this->prime, SORT_NUMERIC);
        // var_dump($this->prime);
        return $this->prime;
    }
}
