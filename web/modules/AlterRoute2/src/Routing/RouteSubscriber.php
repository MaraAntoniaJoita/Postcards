<?php
/**
 * @file
 * Contains \Drupal\example_module\Routing\RouteSubscriber.
 */
 
// THIS FILE BELONGS AT /example_module/src/Routing/RouteSubscriber.php

namespace Drupal\AlterRoute2\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // Replace "some.route.name" below with the actual route you want to override.
    if ($route = $collection->get('admin')) {
      $route->setDefaults(array(
        '_controller' => '\Drupal\AlterRoute2\Controller\AlterRoute2Controller::content',
      ));
    }
  }
}