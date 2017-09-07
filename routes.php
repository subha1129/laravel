<?php
/**
  
 coder: Aysad Kozanoglu 
 email: aysadx@gmail.com
 web: http://onweb.pe.hu

**/

  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
$controlInstance = ucfirst($controller).'Controller';
   
    require_once('models/'.$controller.'.php');
    $controller = new $controlInstance(); 
      
//    switch($controller) {
//      case 'pages':
//        $controller = new PagesController();
//      break;
//    }

    $controller->{ $action }();
  }

  $controllers = array( 'home' => ['dashboard'],
                       'login' => ['login', 'error','processlogin']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>