<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/30
 * Time: 17:01
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class Test_MyValidationRules
 *
 * @group App
 */
class Test_MyValidationRules extends \Fuel\Core\TestCase {

    public function test_validation_no_tab_and_newline_valid()
    {
        $input = 'タブも改行も含まない文字列です。';
        $test = MyValidationRules::_validation_no_tab_and_newline($input);
        $expected = true;

        $this->assertEquals($expected, $test);
    }

    /**
     * @dataProvider invalid_data_provider
     * @param $input
     */
    public function test_validation_no_tab_and_newline_invalid($input)
    {
        $test = MyValidationRules::_validation_no_tab_and_newline($input);
        $expected = false;

        $this->assertEquals($expected, $test);
    }

    public function invalid_data_provider()
    {
        return array(
            array("改行を含む\n文字列です。"),
            array("改行を含む\r文字列です。"),
            array("改行を含む\r\n文字列です。"),
            array("タブを含む\t文字列です。"),
            array("怪猫を\rタブを含む\t文字列\nです。"),
        );
    }

}
