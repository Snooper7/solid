<?php
/**
 * SOLID
 * D - Принцип инверсии зависимостей
 * Dependency Inversion Principle
 */
class lowRankingMale {
    public function eat() {
        $wife = new Wife();
        $food = $wife->getFood();
        // ... eat
    }
}