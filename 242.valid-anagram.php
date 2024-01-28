/*
 * @lc app=leetcode id=242 lang=php
 *
 * [242] Valid Anagram
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        foreach (str_split($t) as $char) {
            if (isset($t_array[$char])) {
                $t_array[$char] += 1;
            } else {
                $t_array[$char] = 1;
            }
        }

        foreach (str_split($s) as $char) {
            if (isset($t_array[$char]) && $t_array[$char] > 0) {
                $t_array[$char] -= 1;
            } else {
                return false;
            }
        }

        return true;
    }
}
// @lc code=end

// What I learned
// 2つの文字列アナグラムになっているか比較する際はcount_chars関数を使うことで可能。