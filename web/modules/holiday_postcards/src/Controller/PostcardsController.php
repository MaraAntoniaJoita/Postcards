<?php

namespace Drupal\holiday_postcards\Controller;

use Symfony\Component\HttpFoundation\Response;
use \Drupal\views\Views;
use \Drupal\views\ViewExecutable;

class PostcardsController{
  public function postcards($count){

  $view = Views::getView('gallery_of_postcards');
  if (is_object($view)) {
    $view->setItemsPerPage($count);
    $view->setDisplay('page_1');
    $view->preExecute();
    $view->execute();
    $content = $view->buildRenderable();
  
}
return [
  '#type' => 'view',
  '#name' => 'gallery_of_postcards',
  '#view' => $view,
  '#display_id' => 'page_1',
  '#embed' => TRUE,
];
}
}