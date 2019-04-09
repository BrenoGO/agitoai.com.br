<?php

namespace Core;
/**Base Controller
 * 
 */
abstract class Controller
{
    protected $route_params = [];
    /**
     * Class constructor
     */
    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }

    public function __call($name, $args)
    {
        $method = $name.'Action';
        if (method_exists($this, $method)) {
            if ($this->before() !== false) {//So if before returns false, method will not be executed
                call_user_func_array([$this, $method],$args);
                $this->after();
            }
        } else {
            throw new \Exception("Method $method not found in controller ". get_class($this));
        }
    }

    protected function before()
    {
        //echo '(ControllerBefore) '; 
    }
    protected function after()
    {
        //echo ' (ControllerAfter)';
    }
}