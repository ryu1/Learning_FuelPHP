<?php
///**
// * Created by IntelliJ IDEA.
// * User: ishitsuka
// * Date: 13/05/20
// * Time: 20:21
// * To change this template use File | Settings | File Templates.
// */
//
//require './person.php';
//
//class Person3_Test extends PHPUnit_Framework_TestCase
//{
//
//    /**
//     * @dataProvider person_provider
//     * @param $name
//     * @param $genger
//     * @param $birthdate
//     */
//    public function test_get_gender($name, $genger, $birthdate)
//    {
//        $person = new Person($name, $genger, $birthdate);
//
//        $test = $person->get_gender();
//        $expected = $genger;
//
//        // 期待される結果とテスト結果が一致するか
//        $this->assertEquals($expected, $test);
//    }
//
//    public function person_provider()
//    {
//        return array(
//            array('Rintaro', 'male', '1991/12/14'),
//            array('Mayuri', 'female', '1994/2/1'),
//            array('Suzuha', 'female', '2017/9/27'),
//        );
//    }
//}
