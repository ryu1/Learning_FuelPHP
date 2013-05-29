<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/29
 * Time: 17:10
 * To change this template use File | Settings | File Templates.
 */

class HttpInvalidInputException extends HttpException
{

    public function response()
    {
        $response = \Fuel\Core\Request::forge('error/invalid')->execute()->response();
        return $response;
    }
}