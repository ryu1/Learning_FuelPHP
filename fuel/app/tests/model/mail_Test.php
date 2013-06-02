<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/31
 * Time: 14:13
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class Test_Model_Mail
 *
 * @group App
 * @package Email\model
 */
class Test_Model_Mail extends \Fuel\Core\TestCase
{

    public function test_send()
    {
        $mail = new Model_Mail();

        $post = array(
            'email'     => 'foo@example.com',
            'name'      => '送信者',
            'comment'   => 'メール送信のテスト',
        );

        $mail->send($post);

        // mail()関数からデータを代入
        $mail_data = \Fuel\Core\Config::get('_tests.mail.data');
//        var_dump($mail_data);
        //exit;
        
        // 管理者 <info@example.jp>
        $expected = '=?UTF-8?B?566h55CG6ICF?= <info@example.jp>';
        $this->assertEquals($expected, $mail_data['to']);

        // コンタクトフォーム
        $expected = '=?UTF-8?B?44Kz44Oz44K/44Kv44OI44OV44Kp44O844Og?=';
        $this->assertEquals($expected, $mail_data['subject']);

        $pattern = '/' . preg_quote($post['comment']) . '/u';
        $this->assertRegExp($pattern, $mail_data['message']);

        // From: 送信者 <foo@example.com>
        $pattern = '/' . preg_quote('From: =?UTF-8?B?6YCB5L+h6ICF?= <foo@example.com>') . '/u';
        $this->assertRegExp($pattern, $mail_data['additional_headers']);

        $pattern = '/-oi -f ' . preg_quote($post['email']) . '/n';
        $this->assertRegExp($pattern, $mail_data['additional_parameters']);
    }
}