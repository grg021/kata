<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommentParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CommentParser');
    }

    function it_returns_2_2_for_4() {
    	$this->parse(4)->shouldReturn([2,2]);
    }

    function it_returns_2_2_2_for_8() {
    	$this->parse(8)->shouldReturn([2,2,2]);
    }

    function it_returns_3_for_3() {
    	$this->parse(3)->shouldReturn([3]);
    }

    function it_returns_3_3_for_9() {
    	$this->parse(9)->shouldReturn([3,3]);
    }

    function it_returns_2_5_for_10() {
        $this->parse(10)->shouldReturn([2,5]);
    }

    function it_returns_2_7_for_14() {
        $this->parse(14)->shouldReturn([2,7]);
    }

    function it_computes_prime_for_144() {
        $this->parse(144)->shouldReturn([2,2,2,2,3,3]);   
    }

    function it_computes_prime_for_360() {
        $this->parse(360)->shouldReturn([2,2,2,3,3,5]);   
    }

    function it_computes_prime_for_29() {
        $this->parse(29)->shouldReturn([29]);   
    }

    function it_computes_prime_for_33() {
        $this->parse(33)->shouldReturn([3,11]);   
    }
}
