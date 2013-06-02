<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/31
 * Time: 14:01
 * To change this template use File | Settings | File Templates.
 */

// PHPのmail()関数をオーバーライド
namespace Email;

use Fuel\Core\Log;

function mail($to, $subject, $message, $additional_headers, $additional_parameters)
{
	Log::debug('Call mail', __METHOD__);
    $data = array(
        'to'    => $to,
        'subject'   => $subject,
        'message'   => $message,
        'additional_headers'    => $additional_headers,
        'additional_parameters'  => $additional_parameters,
    );

    Config::set('_tests.mail.data', $data);

    return true;
}