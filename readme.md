## Autoload classes:
Instead of using `require`, we can use composers autoload  funcitonality. Here we specify `autoload` functionality by using `PSR-4` (an autoloading php coding standard). Here we register a directories all the class, for our case it is `"":"src/"` which means all the files inside src directory will be autoloaded. For working correctly run below command

```
composer dump-autoload
```
Additionally, we can add the autoload php file as xml configuration bootstrap.

```
<phpunit colors="true" bootstrap="vendor/autoload.php"><phpunit>
```
## Configure PHPUnit:the XML configuration file:
Instead of using different flags we can use a config file named `phpunit.xml`. Here we can state all the configuration needed for our test cases

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