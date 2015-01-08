<?php

namespace PhpExerciseSolutionTest\Characters;

use PhpExerciseSolution\Characters\Knight;

/**
 * Class KnightTest
 * @package PhpExerciseSolutionTest\Characters
 */
class KnightTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testNewKnight()
    {
        $adekin = new Knight('adekin', 23, 50);

        $this->assertEquals('Adekin', $adekin->getName());
        $this->assertTrue(ctype_upper($adekin->getName()[0]));
        $this->assertEquals(23, $adekin->getAge());
        $this->assertEquals(50, $adekin->getStrength());

        $this->assertEquals('I\'m a knight and my name is Adekin. I\'m 23 years old. I have 50 strength.', $adekin->presentHimself());
    }

    /**
     * @expectedException \Exception
     */
    public function testInvalidKnight()
    {
        new Knight();
    }
}