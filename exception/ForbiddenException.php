<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 03.04.21
 * @time: 18:48
 * @file: ForbiddenException.php
 */

namespace App\core\exception;

class ForbiddenException extends \Exception
{
  protected $message = "You don't have permission to access this page";
  protected $code = 403;
}