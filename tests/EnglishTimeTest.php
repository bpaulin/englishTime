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

    public function testEnglishTimeCanNotBeInstanciated()
    {
        $reflection = new ReflectionClass('BPaulin\EnglishTime\EnglishTime');
        $this->assertFalse($reflection->getConstructor()->isPublic());
    }

    public function providerFromTimeStamp()
    {
        return array(
            array(11, 00, "eleven o'clock"),
            array(5, 20, "twenty past five"),
            array(8, 50, "ten to nine"),
            array(9, 45, "a quarter to ten"),
            array(1, 15, "a quarter past one"),
            array(2, 30, "half past two"),
            array(3, 42, "twenty to four"),
            array(3, 23, "twenty-five past three"),
            array(4, 59, "five o'clock"),
        );
    }

    /**
     * @dataProvider providerFromTimeStamp
     **/
    public function testFromTimeStampCanHandleRoundHour($hour, $minute, $result)
    {
        $this->assertSame(
            EnglishTime::fromTimeStamp(mktime($hour, $minute)),
            $result
        );
    }
}


