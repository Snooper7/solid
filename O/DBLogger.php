<?php

class DBLogger implements LoggerInterface
{
    private function saveToDB($message) {
        //...
    }
    public function log($message) {
        //...
        $this->saveToDB($message);
    }
}