<?php
/**
 * Дочерний класс от Bird
 * Изменяет поведение
 * Нарушает принцип LSP
 */
class Penguin{
    public function fly() {
        return 'I can not fly!'; // не типичное поведение, либо возвращаем строку либо exception
    }
    public function swim() {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}