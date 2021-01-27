<?php

namespace Drupal\alterroute\Routing;

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

    $route = $collection->get('view.gallery_of_postcards.page_1') ;
    $route->setPath('/en');
    

  }

}
