<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/31
 * Time: 13:40
 * To change this template use File | Settings | File Templates.
 */

class Model_Mail extends \Fuel\Core\Model
{

    public function send($post)
    {
        $data = $this->build_mail($post);
        $this->sendmail($data);
    }

    protected function sendmail($data)
    {
        Package::load('email');

        $email = Email::forge();
        $email->from($data['from'], $data['from_name']);
        $email->to($data['to'], $data['to_name']);
        $email->subject($data['subject']);
        $email->body($data['body']);

        $email->send();
    }

    protected function build_mail($post)
    {
        \Fuel\Core\Config::load('contact_form', true);

        $data['from'] = $post['email'];
        $data['from_name'] = $post['name'];
//        $data['to'] = 'info@example.jp';
//        $data['to_name'] = '管理者';
//        $data['subject'] = 'コンタクトフォーム';

        $data['to'] = \Fuel\Core\Config::get('contact_form.admin_email');
        $data['to_name'] = \Fuel\Core\Config::get('contact_form.admin_name');
        $data['subject'] = \Fuel\Core\Config::get('contact_form.subject');

        $ip = Input::ip();
        $agent = Input::user_agent();

        $data['body'] = <<<END
------------------------------------------------------------
名前: {$post['name']} メールアドレス: {$post['email']}
IPアドレス: $ip ブラウザ: $agent
------------------------------------------------------------
コメント:
{$post['comment']}
------------------------------------------------------------
END;
        return $data;
    }
}