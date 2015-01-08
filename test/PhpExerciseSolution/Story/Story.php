<?php

namespace PhpExerciseSolutionTest\Story;

use PhpExerciseSolution\Characters\Knight;
use PhpExerciseSolution\Story\Story;

/**
 * Class StoryTest
 * @package PhpExerciseSolutionTest\Story
 */
class StoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testEmptyStory()
    {
        $introduction = 'An Appturbo production';
        $story = new Story($introduction);

        $this->assertEquals("This story cannot be told without characters", $story->tellTheStory());
    }

    /**
     * @throws \Exception
     */
    public function testValidStory()
    {
        $introduction = 'An Appturbo production';

        $story = new Story($introduction);

        $characters = [
            new Knight('Adekin', 20, 10),
            new Knight('Yavo', 500, 300)
        ];

        $story->setCharacters($characters);

        $this->assertStringStartsWith('An Appturbo production', $story->tellTheStory());
    }

    /**
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testSetInvalidCharacterParameter()
    {
        $introduction = 'An Appturbo production';

        $story = new Story($introduction);

        $characters = '';

        $story->setCharacters($characters);
    }

    /**
     * @expectedException \Exception
     */
    public function testSetInvalidCharactersArray()
    {
        $introduction = 'An Appturbo production';

        $story = new Story($introduction);

        $characters = [
            new Story($introduction)
        ];

        $story->setCharacters($characters);
    }
}