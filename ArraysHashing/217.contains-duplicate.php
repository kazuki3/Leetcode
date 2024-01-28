/*
 * @lc app=leetcode id=217 lang=php
 *
 * [217] Contains Duplicate
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $check_array = [];
        foreach ($nums as $num) {
            if (isset($check_array[$num])) {
                return true;
            }
            $check_array[$num] = 1;
        }
        return false;
    }
}
// @lc code=end

// What I learned
// 適当な値を入れるときは1のように数値を入れる。
// ''のように空文字を入れるとメモリを消費する。