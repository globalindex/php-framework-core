<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 03.04.21
 * @time: 18:37
 * @file: AuthMiddleware.php
 */

namespace globalindex\phpmvc\middlewares;


use globalindex\phpmvc\Application;
use globalindex\phpmvc\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
  public array $actions = [];

  /**
   * AuthMiddleware constructor.
   * @param array $actions
   */
  public function __construct(array $actions = [])
  {
    $this->actions = $actions;
  }


  public function execute()
  {
    if (Application::isGuest()) {
      if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
        throw new ForbiddenException();
      }
    }
  }
}