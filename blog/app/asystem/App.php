<?php
error_reporting(E_ALL & ~E_NOTICE);
class App
{
  protected $nowPath;
  protected $NowMEthod;
  protected static $routes = [];
  protected $home;
  public function __construct($config)
  {
    $this->nowPath = $_SERVER['REQUEST_URI'];
    $this->NowMEthod = $_SERVER['REQUEST_METHOD'];
    $this->home = $config['home'];
    $this->startRoute();
  }

  public static function getAction($link, $path, $auth = false, $area = null)
  {
    self::$routes[] = ['GET', $link, $path, $auth, $area];
  }
  public static function postAction($link, $path, $auth = false, $area = null)
  {
    self::$routes[] = ['POST', $link, $path, $auth, $area];
  }
  public function startRoute()
  {
    foreach (self::$routes as $routes) {
      list($method, $link, $path, $auth, $area) = $routes;
      $methodCheck = $this->NowMEthod == $method;
      $pathCheck = preg_match("@^{$link}$@", $this->nowPath, $params);
      if ($methodCheck && $pathCheck) {
        $uri = explode("/", $path);
        array_shift($uri);
        if ($uri[0]) {
          list($activeModul, $activeMethod) = $uri;
        }
        if ($this->nowPath == "/") {
          $module = $this->home['modul'];
          $controller = $this->home['modul'] . "Controller";
          $method = $this->home['method'];
        } else {
          if (($auth == true && isset($_SESSION['user'])) || $auth == false) {
            $module = $activeModul;
            $controller = $activeModul . "Controller";
            $method = $activeMethod;
          } else {
            echo "Erişim engellendi";
            exit;
          }
        }
        if (file_exists($file = DIRECTORY . "/moduls/{$module}/controller/{$controller}.php")) {
          require_once $file;
          if (class_exists($controller)) {
            $class = new $controller;
            if (method_exists($class, $method)) {
              array_shift($params);
              return call_user_func_array([$class, $method], array_values($params)); //Parametreli
              // return call_user_func([$class,$method]);parametresiz fonksiyon çalıştırma
            } else {
              echo "Method not found";
            }
          } else {
            echo "Class not found";
          }
        } else {
          echo "controller not  found";
          echo "<br/>";
        }
      }
    }
    echo "404 Sayfa Bulunamadı";
  }
}
