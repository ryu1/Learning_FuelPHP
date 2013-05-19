<?php

class Controller_Showfile extends Controller
{
	public function action_index()
	{
		// 実行時間の計測ポイント
		\Fuel\Core\Profiler::mark('indexアクションの開始');

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

		// 実行時間の計測ポイント
		\Fuel\Core\Profiler::mark('indexアクションの終了');

		// View オブジェクトを返す
		return $view;
	}
}