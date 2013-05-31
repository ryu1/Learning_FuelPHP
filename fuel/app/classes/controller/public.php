<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/30
 * Time: 18:11
 * To change this template use File | Settings | File Templates.
 */

class Controller_Public extends \Fuel\Core\Controller_Template{

    public function before()
    {
        parent::before();
       // Debug::dump($this->response);
        //$this->response->set_header('X-FRAME-OPTIONS', 'SAMEORIGIN');
    }

    public function after($response)
    {
//        Debug::dump($response);
        $res = parent::after($response);
        $res->set_header('X-FRAME-OPTIONS', 'SAMEORIGIN');
//        Debug::dump($res);
        return $res;
    }
}