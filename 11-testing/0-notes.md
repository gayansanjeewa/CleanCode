# Testing

![Illustration: testing](../images/testing.jpg)

## Unit test
* Practice of testing a single component/unit in isolation

## TDD
 * First Law: You may not write production code until you have written a failing unit test.
 * Second Law: You may not write more of a unit test than is sufficient to fail, and not compiling is failing.
 * Third Law: You may not write more production code than is sufficient to pass the currently failing test.
 
## Pros
* Increases confidence in changing/ maintaining code.
  * You write a piece of code and run test, if it fails you know there's something wrong. If not you move on.
* Codes are more reusable 
  * In order to make unit testing possible, codes need to be modular. This means that codes are easier to reuse.
* Development is faster
  * No unit tests:  you write your code and perform that fuzzy ‘developer test’ (set breakpoints, fire up the GUI, provide inputs that hopefully hit your code and hope that you are all set.)
  * With unit tests: you write tests, then write code, fire up tests, if the test pass you move on
* Debugging is easy
  * When a test fails you only need to only the last commit/ last pull request that merge to mater or last of the files you modified
* Codes are more reliable
* You automatically have an documentation

  