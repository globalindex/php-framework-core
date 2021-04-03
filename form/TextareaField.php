<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 03.04.21
 * @time: 20:37
 * @file: TextareaField.php
 */

namespace App\core\form;

class TextareaField extends BaseField
{
  public function renderInput(): string
  {
    return sprintf('<textarea name="%s" class="form-control%s">%s</textarea>',
      $this->attribute,
      $this->model->hasError($this->attribute) ? " is-invalid" : "",
      $this->model->{$this->attribute}
    );
  }
}