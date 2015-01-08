<?php

require_once(__DIR__ . '/../src/PhpExerciseSolution/Interfaces/CharacterInterface.php');
require_once(__DIR__ . '/../src/PhpExerciseSolution/Abstracts/Person.php');
require_once(__DIR__ . '/../src/PhpExerciseSolution/Characters/Knight.php');
require_once(__DIR__ . '/../src/PhpExerciseSolution/Story/Story.php');

use PhpExerciseSolution\Characters\Knight;
use PhpExerciseSolution\Story\Story;

$introduction = 'A long time ago on a planet far, far away...';

$story = new Story($introduction);

$characters = [
    new Knight('Adekin', 20, 10),
    new Knight('Yavo', 500, 300)
];

$story->setCharacters($characters);

echo $story->tellTheStory();

/*
 * Output
 *

A long time ago in a galaxy far, far away...

Character #1: Adekin is a knight. I'm 20 years old. I have 10 strength.
Character #2: Yavo is a knight. I'm 500 years old. I have 300 strength.

 */