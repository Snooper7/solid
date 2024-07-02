<?php
class Product
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->Logger = $logger;
    }
    public function setPrice($price)
    {
        try {
            // save price in DB
        } catch (DbException $exception) {
            $this->logger->log($exception->getMessage());
        }
    }
}