<?php 

interface Logger {
	public function log(string $msg);
}

/**
 * Application
 */
class Application
{
	private $logger;

    public function getLogger(): Logger{
    	return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
    	$this->logger = $logger;
    }
}

$app = new Application();

$app->setLogger(new /**
 * Anonymious class
 */
class implements Logger
{
    public function log(string $msg)
    {
    	print($msg);
    }
});

$app->getLogger()->log('Testing anonymous');