<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 19:18
 * To change this template use File | Settings | File Templates.
 */

namespace Fuel\Tasks;


class hello {
	public function run($name = 'World')
	{
		echo 'Hello ', $name, '!';
	}
}