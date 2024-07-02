<?php
/**
 * Дочерний класс от Bird
 * не изменяет поведение, но дополняет его.
 */
class Duck extends Bird {
    public function fly() {
        $flySpeed = 8;
        return $flySpeed;
    }
    public function swim() {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}