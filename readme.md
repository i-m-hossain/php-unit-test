## Configure PHPUnit:the XML configuration file:

## Things to remember:
- A test files name and class name must be the same
- Every test file must extend `Testcase`
- a test methods name should start with `test`
- require the necessary function to run the test on them

## Ways of writting php unit test:
phpunit command can be written in various way, such as

- providing full path: `phpunit tests/UserTest.php`
- providing only folder: `phpunit /tests` - all tests in the folder will be run
- Not providing full path: `phpunit ./tests/UserTest`

## creating alias of phpunit:
```
Bash command:
alias phpunit="./vendor/phpunit/phpunit/phpunit"
```