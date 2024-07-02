<?php
class highRankingMale
{
    private $foodProvider;
    public function __construct(IFoodProvider $foodProvider) {
        $this->foodProvider = $foodProvider;
    }
    public function eat(){
        $food = $this->foodProvider->getFood();
        // ... eat
    }
}