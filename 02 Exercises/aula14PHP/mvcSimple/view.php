<?php
class View
{
  public function load($model, $action, $data = null)
  {
    require_once "./template/$model/$action.php";
  }
}
