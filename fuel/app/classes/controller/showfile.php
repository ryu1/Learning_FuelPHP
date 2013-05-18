<?php

class Controller_Showfile extends Controller
{
	public function action_index()
	{
		// ファイル名を指定
		$file = DOCROOT . 'show_file.php';

		// ファイルの中身を代入
		$content = file_get_contents($file);

		// View オブジェクトを生成
		$view = View::forge('showfile');

		// ビューに title をセット
		$view->set('title', 'ファイル表示プログラム');

		// ビューに content をセット
		$view->set('content', $content);

		// View オブジェクトを返す
		return $view;
	}
}