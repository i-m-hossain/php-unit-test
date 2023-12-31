## Fixtures:

While making cases dependent on each other can be a way to use same class instance and code reuse, It still messes up our code and introduces ambiguity. Better way to handle this issue is to introduce `fixture`. It is only setting up a method in the test class named as `setUp()` and using a property which is initialized by `setUp()` method.

- `setUp()` method runs before any test case is run

Another method we can use is `tearDown()` method which runs after each test case is run. However, `tearDown()` method is not necessarily have to be used all the time. There are certain use cases i.e. 

- creating a lot of objects that consume a lot of memory, 
- if we are creating external resources(writing to a file while opening a network socket)

Example:

```

class QueueTest extends TestCase{
    protected $queue;
    protected function setUp(): void
    {
        $this->queue = new Queue;
    }
    protected function tearDown():void{
        unset($this->queue);
    }
}

```

Now, we can use that property in all our assertions.

## Making a test case dependent on another:

Some cases, one test case might be dependent on another test case. To handle this scenario, we can use `@depends testName` annotation as php comment doc. and then we can pass a reference of the referenced class as parameter to the dependent test function.
Two types of test based on dependency:

1. The dependent test is known as `consumer`
2. The test we depend on is know as `producer`

**N.B.** Make sure to **return from producer** what we want pass to consumer

_Here is an example:_

```
public function testNewQueueIsEmpty()
{
    $queue = new Queue;
    $this->assertEquals(0, $queue->getCount());
    return $queue;
}
/**
* @depends testNewQueueIsEmpty
*/
public function testAnItemIsAddedToTheQueue(Queue $queue)
{
    $queue->push('green');
    $this->assertEquals(1, $queue->getCount());
}
```

## Autoload classes:

Instead of using `require`, we can use composers autoload funcitonality. Here we specify `autoload` functionality by using `PSR-4` (an autoloading php coding standard). Here we register a directories all the class, for our case it is `"":"src/"` which means all the files inside src directory will be autoloaded. For working correctly run below command

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

-   A test files name and class name must be the same
-   Every test file must extend `Testcase`
-   a test methods name should start with `test`
-   require the necessary function to run the test on them

## Ways of writting php unit test:

phpunit command can be written in various way, such as

-   providing full path: `phpunit tests/UserTest.php`
-   providing only folder: `phpunit /tests` - all tests in the folder will be run
-   Not providing full path: `phpunit ./tests/UserTest`

## creating alias of phpunit:

```
Bash command:
alias phpunit="./vendor/phpunit/phpunit/phpunit"
```
