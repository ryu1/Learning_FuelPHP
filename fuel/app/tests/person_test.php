<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/20
 * Time: 20:21
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class Person_Test
 *
 * @group App
 */
class Test_Person extends \Fuel\Core\TestCase
{
    public function test_get_gender()
    {
        $person = new Person('Rintaro', 'male', '1991/12/14');

        $test = $person->get_gender();
        $expected = 'male';

        // 期待される結果とテスト結果が一致するか
        $this->assertEquals($expected, $test);
    }
}
