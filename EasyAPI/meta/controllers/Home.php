<?php
/**
 *
 */
class Home extends BaseController{

    function __construct()
    {
        parent::__construct();
    }
    public function _default(){
        $this->load->view('.','home');
    }
}
?>
