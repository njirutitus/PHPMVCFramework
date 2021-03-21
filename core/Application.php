<?php

namespace app\core;
/**
 * Application File Doc Comment
 * 
 * PHP version 7.4
 * 
 * @category Application
 * @package  app\core
 * @author   Titus Njiru <njirutitus@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public static string $ROOT_DIR;
    public static Application $app;
    
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request,$this->response);
    }

    public function run()
    {
        echo $this->router->resolve();

    }

}