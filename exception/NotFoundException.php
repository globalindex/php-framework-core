<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 03.04.21
 * @time: 19:12
 * @file: NotFoundException.php
 */

namespace globalindex\phpmvc\exception;


use Throwable;

class NotFoundException extends \Exception
{
  protected $message = "Page not found";
  protected $code = 404;
}