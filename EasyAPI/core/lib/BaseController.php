<?php
/**
 * Base Controlller Class
 */
class BaseController{
    protected $load = array();

    public function __construct(){
        $this->load = new Load();
    }
}
