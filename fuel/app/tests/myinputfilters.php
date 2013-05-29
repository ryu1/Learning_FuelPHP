<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/29
 * Time: 18:56
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class Test_MyInputFilters
 *
 * @group App
 */
class Test_MyInputFilters extends \Fuel\Core\TestCase
{
    public function test_check_encoding_invalid_sjis() {
        $this->setExpectedException(
            'HttpInvalidInputException', 'Invalid input data'
        );

        $input = mb_convert_encoding('SJISの文字列です。', 'SJIS');
        $test = MyInputFilters::check_encoding($input);
    }

    public function test_check_encoding_valid()
    {
        $input = '正常なUTF-8の文字列です。';
        $test = MyInputFilters::check_encoding($input);
        $expected = $input;

        $this->assertEquals($expected, $test);
    }
}