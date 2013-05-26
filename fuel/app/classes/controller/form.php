<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/21
 * Time: 0:38
 * To change this template use File | Settings | File Templates.
 */

class Controller_Form extends \Fuel\Core\Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'コンタクトフォーム';
		$this->template->content = View::forge('form/index');
	}

	public function get_validation()
	{
		$val = \Fuel\Core\Validation::forge();

		$val->add('name', '名前')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 50);

		$val->add('email', 'メールアドレス')
			->add_rule('trim', 'required')
			->add_rule('max_length', 100)
			->add_rule('valid_email');

		$val->add('comment', 'コメント')
			->add_rule('required')
			->add_rule('max_length', 400);

		return $val;
	}

	public function action_confirm() {
		$val = $this->get_validation();

		if ($val->run())
		{
			$data['input'] = $val->validated();
			$this->template->title = 'コンタクトフォーム: 確認';
			$this->template->content = View::forge('form/confirm', $data);
		}
		else
		{
			$this->template->title = 'コンタクトフォーム: エラー';
			$this->template->content = View::forge('form/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
		}
	}

	public function action_send()
	{
		// CSRF対策
		if (! \Fuel\Core\Security::check_token())
		{
			return 'ページ遷移が正しくありません。';
		}

		$val = $this->get_validation();

		if (! $val->run())
		{
			$this->template->title = 'コンタクトフォーム： エラー';
			$this->template->contact = View::forge('form/index');
			$this->template->contact->set_safe('html_error', $val->show_errors());
			return;
		}

		$post = $val->validated();
		$data = $this->build_mail($post);

		// メール送信
		try
		{
			$this->sendmail($data);
			$this->template->title = 'コンタクトフォーム: 送信完了';
			$this->template->contact = View::forge('form/send');
			return;
		}
		catch(EmailValidationFailedException $e)
		{
			\Fuel\Core\Log::error(
				'メール検証エラー: ' . $e->getMessage() . __METHOD__
			);
			$html_error = '<p>メールアドレスに誤りがあります。</p>';
		}
		catch(EmailSendingFailedException $e)
		{
			\Fuel\Core\Log::error(
				'メール検証エラー: ' . $e->getMessage(), __METHOD__
			);
			$html_error = '<p>メールを送信できませんでした。</p>';
		}

		$this->template->title = 'コンタクトフォーム: 送信エラー';
		$this->template->contact = View::forge('form/index');
		$this->template->contact->set_safe('html_error', $html_error);
	}

	public function build_mail($post)
	{
		$data['from'] = $post['email'];
		$data['from_name'] = $post['name'];
		$data['to'] = 'info@example.jp';
		$data['to_name'] = '管理者';
		$data['subject'] = 'コンタクトフォーム';

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

	public function sendmail($data) {
		Package::load('email');

		$email = Email::forge();
		$email->form($data['form'], $data['form_name']);
		$email->to($data['to'], $data['to_name']);
		$email->subject($data['subject']);
		$email->body($data['body']);

		$email->send();
	}
}