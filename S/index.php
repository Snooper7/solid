<?php
/**
 * SOLID
 * S - Принцип единственной ответственности
 * Single Responsibility principle
 */
$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);