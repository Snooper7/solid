<?php

class FileLogger implements LoggerInterface
{
    private function saveToFile($message) {
        //...
    }
    public function log($message) {
        //...
        $this->saveToFile($message);
    }
}