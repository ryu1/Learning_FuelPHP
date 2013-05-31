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

    /**
     * @dataProvider newline_provider
     * @param $data
     */
    public function test_check_control_改行とタブを含む文字列 ($data)
    {
        $input = $data;
        $test = MyInputFilters::check_control($input);
        $expected = $input;

        $this->assertEquals($expected, $test);
    }

    public function newline_provider() {
        return array(
            array("改行を含む\n文字列です。"),
            array("改行を含む\r文字列です。"),
            array("改行を含む\r\n文字列です。"),
            array("タブを含む\r文字列です。"),
            array("改行と\rタブを含む\t文字列\nです。"),
        );
    }

    /**
     * @dataProvider control_code_provider
     * @param $data
     */
    public function test_check_control_制御文字を含む文字列 ($data)
    {
        $this->setExpectedException(
            'HttpInvalidInputException', 'Invalid input data'
        );

        $input = $data;
        $test = MyInputFilters::check_control($input);
    }

    public function control_code_provider()
    {
        return array(
            array("NULL文字を含む文字列です。\0"),
            array("NULL文字と改行コードを含む文字列です。\0\n"),
        );
    }
}