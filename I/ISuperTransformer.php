<?php
/**
 * SOLID
 * I - Принцип разделения интерфейса
 * Interface Segregation Principle
 */
interface ISuperTransformer
{
    public function toCar();
    public function toPlane();
    public function toShip();
}