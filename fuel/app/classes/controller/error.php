<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/29
 * Time: 17:13
 * To change this template use File | Settings | File Templates.
 */

class Controller_Error extends \Fuel\Core\Controller_Template
{
    public function action_invalid()
    {
        return 'Invalid input data';
    }
}