<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 03.04.21
 * @time: 18:34
 * @file: BaseMiddleware.php
 */

namespace globalindex\phpmvc\middlewares;

abstract class BaseMiddleware
{
  abstract public function execute();
}