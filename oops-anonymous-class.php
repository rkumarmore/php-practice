- An anonymous class is a useful way to implement a class without defining it.
- They are not associated with a name.
- They can be used as function parameters.
- Internally, an anonymous class is handled by generating a run-time random class name.

<?php

interface Logger
{
    public function log(string $msg);
}

/**
 * Application
 */
class Application
{
    private $logger;

    public function getLogger(): Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}

$app = new Application();

$app->setLogger(new class implements Logger
{
    public function log(string $msg)
    {
        print($msg);
    }
});

$app->getLogger()->log('Testing anonymous');
