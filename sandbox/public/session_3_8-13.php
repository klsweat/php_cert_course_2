<?php
/**
 * Abstract classes
 * You cannot instantate a class
 * abstract is a keyword
 * method abstracts there is not curly braces: ex: public abstract function getInput();
    * Which means its mandatory, but in the abstract class its acutal implentation is unknown
 * abstract methods you can go from public to protected, but you can from protected to public
 *
 * getinstance: static : Services::getInstance();  -> static call
 * classes Services is a factor, also a container of objects, it has instance of itself within its self
 * a static call returns a singleton means that the service instance there is only once and you use the static call
 * $ -> does not work in a static method
 * self is like $this, bound to the keyword.. new keyword calls the constructor
 *
 * Object Interface is a language construct
 * set a class as interface , then when you extend you use implements
 * interfaces can extend interfaces
 * you can extend multiple interfaces.. only construct in php that allows this
 */