<?php
namespace FeedFaker\Helper;

use Monolog\Handler\NullHandler;
use Monolog\Logger as MonoLogger;
use Psr\Log\LoggerInterface;

/**
 * Class Logger
 * @package FeedFaker\Helper
 */
class Logger extends MonoLogger implements LoggerInterface
{
    /**
     * Builds a standard Monolog Instance with a NullHandler
     * You may add a callable that accepts a monolog `Logger` instance and sets it up.
     *
     * @param param callable|null|LoggerInterface $given
     * @return LoggerInterface
     */
    static public function build($given = null)
    {
        // If we were given a fully setup logger, just hand it back
        if ($given instanceof LoggerInterface) {
            return $given;
        }

        // If not, build and setup a Monolog instance
        $logger = new static('FeedFaker');

        // Setup based on a callable, and return
        if (is_callable($given)) {
            $given($logger);
            return $logger;
        }

        // If there is no setup, just default to nothing
        $logger->pushHandler(new NullHandler(static::DEBUG));
        return $logger;
    }
}
