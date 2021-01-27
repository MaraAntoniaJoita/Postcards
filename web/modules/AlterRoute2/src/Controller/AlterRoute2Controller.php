<?php
/**
 * @file
 * Contains \Drupal\example_module\Controller\ExampleModuleController.
 */


namespace Drupal\AlterRoute2Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class AlterRoute2Controller extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {
    if($view = Views::getView('gallery_of_postcards')){

    return [
  '#type' => 'view',
  '#name' => 'gallery_of_postcards',
  '#view' => $view,
  '#display_id' => 'page_1',
  '#embed' => TRUE,
];
}
  }
}