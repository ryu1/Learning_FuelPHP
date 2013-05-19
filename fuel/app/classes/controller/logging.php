<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 17:57
 * To change this template use File | Settings | File Templates.
 */
//use Monolog\Logger;
//use Monolog\Handler\StreamHandler;

class Controller_logging extends \Fuel\Core\Controller {

	public function action_index() {
		\Fuel\Core\Log::debug('debugログのテスト', __METHOD__);
		\Fuel\Core\Log::error('errorログのテスト', __METHOD__);
		\Fuel\Core\Log::info('infoログのテスト', __METHOD__);
		\Fuel\Core\Log::warning('warningログのテスト', __METHOD__);

		// monolog
//		$log = new Logger('name');
//		$log->pushHandler(new StreamHandler('出力先のパス', Logger::INFO));
//		$log->addInfo('infoログのテスト');
//		$log->addWarning('warningログのテスト');
//		$log->addError('errorログのテスト');

		return 'ログのテスト';
	}
}