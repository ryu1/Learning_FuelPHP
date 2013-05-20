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
//class Person_Test2 extends PHPUnit_Framework_TestCase
//{
//    public static function setUpBeforeClass()
//    {
//        fwrite(STDOUT, __METHOD__ . "\n");
//    }
//
//    protected function setUp()
//    {
//        fwrite(STDOUT, __METHOD__ . "\n");
//    }
//
//    public function test_get_gender_male()
//    {
//        fwrite(STDOUT, __METHOD__ . "\n");
//
//        $person = new Person('Rintaro', 'male', '1991/12/14');
//
//        $test = $person->get_gender();
//        $expected = 'male';
//
//        // 期待される結果とテスト結果が一致するか
//        $this->assertEquals($expected, $test);
//    }
//
//    public function  test_get_gender_female()
//    {
//        fwrite(STDOUT, __METHOD__ . "\n");
//
//        $person = new Person('Mayuri', 'female', '1994/2/1');
//
//        $test = $person->get_gender();
//        $expected = 'female';
//
//        $this->assertEquals($expected, $test);
//    }
//
//    protected function tearDown()
//    {
//        fwrite(STDOUT, __METHOD__ . "\n");
//    }
//
//    public static function tearDownAfterClass()
//    {
//        fwrite(STDOUT, __METHOD__ . "\n");
//    }
//}
