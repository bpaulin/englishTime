<?php
use Bpaulin\EnglishTime\EnglishTime;

class EnglishTimeTest extends PHPUnit_Framework_TestCase
{
    public function testPHPUnitIsWorking()
    {
        $this->assertTrue(true);  
    }

    public function testEnglishTimeClassIsAvalaible()
    {
        $this->assertTrue(class_exists('Bpaulin\EnglishTime\EnglishTime'));
    } 
}

