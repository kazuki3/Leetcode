/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $i => $first_num) {
            $diff_to_target = $target - $first_num;
            foreach ($nums as $j => $second_num) {
                if ($i === $j) {
                    continue;
                }
                if ($second_num === $diff_to_target) {
                    return [$i, $j];
                }
            }
        }

        return;
    }
}
// @lc code=end

// What I learned
<!-- foreachよりforのほうが早い
function twoSum($nums, $target) {
    $map = [];
    for ($i = 0; count($nums); $++;) {
        $current_num = $num[$i];
        $diff_to_target = $target - $current_num;

        if (in_array($diff_to_target, $map)) {
            return [array_search($diff_to_target, $map), $i];
        }
        $map[$i] = $current_num;
    }
} -->