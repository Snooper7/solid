<?php
/**
 * SOLID
 * O - Принцип открытости / закрытости
 * Open Close principle
 */
$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);