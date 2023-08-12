class Solution {

    /**
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums) {
        // two pointers approach
        $min = PHP_INT_MAX;
        $left = 0;
        $right = 0;
        $sum = $nums[$left];

        while ($right < count($nums)) {
            if ($sum >= $target) {
                $min = min($min, $right - $left + 1);
                if ($min === 1) {
                    return $min;
                }

                $sum -= $nums[$left];
                $left++;
            } else {
                $right++;
                $sum += $nums[$right];
            }
        }

        return $min === PHP_INT_MAX ? 0 : $min;
    }
}