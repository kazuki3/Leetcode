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
            $check_array[$num] = true;
        }
        return false;
    }
}
// @lc code=end

// What I learned
// check_arrayではなく、mapという命名がよいかもしれない