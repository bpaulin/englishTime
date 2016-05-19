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

