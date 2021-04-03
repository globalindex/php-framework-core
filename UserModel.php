<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 03.04.21
 * @time: 16:55
 * @file: UserModel.php
 */

namespace globalindex\phpmvc;

use globalindex\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
  abstract public function getDisplayName(): string;
}