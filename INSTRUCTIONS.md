# Instructions for the Appturbo PHP Exercise

## Context
This micro project aims to create a very simplified component able to present the introduction and the different characters
 of a fantasy story.

### The Story
The Story is the central component of this micro project.
 
It has 2 properties :
 
* **introductionText** which is a simple string
* **characters** which is array of objects implementing the *CharacterInterface* (this interface will be explained just after).


It has also 2 mandatory methods :

* The main method of this class is called **tellTheStory()** and it simply returns the concatenation of the
introduction text followed by the presentation of every character contained in the story. If we try to call this method
but there is no characters set up in the story. It should return the *'This story cannot be told without characters'*  string instead
* A method called **setCharacters(array $characters)** must also be present. It is used to set the array of characters.
If we try to use this method to set an array of objects who don't implement *CharacterInterface*, this method should raise an exception.

The constructor should take a single argument : the introduction text.
Otherwise you can implement this class as you wish.


### The CharacterInterface
This interface is already defined for you.
It has a unique method called **presentHimself()**

### The Person class
This is an abstract class you have to create. It regroups the basic attributes needed for every person.
A Person implements the *CharacterInterface* and has the following properties :

* an age (just a positive integer)
* a strength (just a positive integer)

These properties must be set up in the constructor.

The **presentHimself()** method should return a string which tells how old and how strong is this person.


### The Knight class
The Knight is a Person, it has another attribute :

* a name which is a string and must have its first letter in uppercase.

The name should be set in the constructor. If the name empty, you must raise an exception (a basic one is enough).

We must be able to access this name from other PHP classes when this class is instanciated.

The **presentHimself()** of a Knight should add the name as an extra information but should still tell his age and strength exactly as
any other person.


## Example
In the *example* directory, you will find a file which gives an example of how you implementation can be called.

## Tests
You'll find several unit tests in the *test* folder which will be applied to your implementation.

## Project Skeleton
Your implementation should be in the *src* folder. You'll find the different files already created but empty.

The only file already written for you is *src/Interfaces/CharacterInterface.php*

## What you have to do ##
For the project to work and for the tests to pass, you need to:

* create the abstract *Person* class
* create the *Knight* class
* create the *Story* class

Read carefully the already written examples and tests. It will give you hints on how to do the correct implementations.