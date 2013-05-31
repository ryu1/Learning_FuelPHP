<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishitsuka
 * Date: 13/05/30
 * Time: 13:08
 * To change this template use File | Settings | File Templates.
 */

class MyValidationRules
{
    // 改行コードやタブが含まれていないかの検証
    public static function _validation_no_tab_and_newline($value)
    {
        // 改行コードやタブが含まれていないか
        if (preg_match('/\A[^\r\n\t]*\z/u', $value) === 1) {
            // 含まれている場合はtrueを返す
            return true;
        }
        else
        {
            // 含まれている場合はfalseを返す。
            return false;
        }
    }
}