<?php


require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class functionsTest extends TestCase
{
    // test success, correct railings to posts
    public function testSuccessCalcFenceRightNumber()
    {
        $expected = 4.9;

        $inputa = 4;
        $inputb = 3;

        $case = CalcFence($inputa,$inputb);

        $this->assertEquals($expected, $case);
    }

    // test success, not enough supplies
    public function testSuccessCalcFenceNoSupplies()
    {
        $expected = 0;

        $inputa = 1;
        $inputb = 3;

        $case = CalcFence($inputa,$inputb);

        $this->assertEquals($expected, $case);
    }

    // test success, too many posts
    public function testSuccessCalcFenceExtraPosts()
    {
        $expected = 6.5;

        $inputa = 100;
        $inputb = 4;

        $case = CalcFence($inputa,$inputb);

        $this->assertEquals($expected, $case);
    }

    // test success, too many railings
    public function testSuccessCalcFenceExtraRailings()
    {
        $expected = 9.7;

        $inputa = 7;
        $inputb = 300;

        $case = CalcFence($inputa,$inputb);

        $this->assertEquals($expected, $case);
    }

    // test inputting a minus number of items for posts
    public function testFailureCalcFencePosts()
    {
        $expected = 0;

        $inputa = -7;
        $inputb = 300;

        $case = CalcFence($inputa,$inputb);

        $this->assertEquals($expected, $case);
    }

    // test inputting a minus number of items for railings
    public function testFailureCalcFenceRailings()
    {
        $expected = 0;

        $inputa = 7;
        $inputb = -10;

        $case = CalcFence($inputa,$inputb);

        $this->assertEquals($expected, $case);
    }

    // test inputting wrong type of data for posts
    public function testMalformedCalcFencePosts()
    {
        $inputa = "Hello my lovely";
        $inputb = 300;

        $this->expectException(TypeError::class);

        $case = CalcFence($inputa,$inputb);
    }

    // test inputting wrong type of data for railings
    public function testMalformedCalcFenceRailings()
    {
        $inputa = 12;
        $inputb = [0];

        $this->expectException(TypeError::class);

        $case = CalcFence($inputa,$inputb);

    }


//
//    public function testMalformedGreeter()
//    {
//        $input = [0];
//
//        $this->expectException(TypeError::class);
//
//        $case = loginButton($input);
//    }
}
