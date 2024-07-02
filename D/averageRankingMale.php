<?php
class averageRankingMale {
    private $wife;
    public function __construct(Wife $wife) {
        $this->wife = $wife;
    }
    public function eat() {
        $food = $this->wife->getFood();
        // ...
    }
}