<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 03.04.21
 * @time: 20:24
 * @file: BaseField.php
 */

namespace App\core\form;

use App\core\Model;

abstract class BaseField
{
  public Model $model;
  public string $attribute;

  /**
   * Field constructor.
   * @param Model $model
   * @param string $attribute
   */
  public function __construct(Model $model, string $attribute)
  {
    $this->model = $model;
    $this->attribute = $attribute;
  }

  abstract public function renderInput(): string;

  public function __toString(): string
  {
    return sprintf('
      <div class="mb-3">
        <label>%s</label>
        %s
        <div class="invalid-feedback">%s</div>
      </div>
    ',
      $this->model->getLabel($this->attribute),
      $this->renderInput(),
      $this->model->getFirstError($this->attribute)
    );
  }
}