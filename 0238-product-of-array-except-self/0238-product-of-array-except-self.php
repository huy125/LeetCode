class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $length = count($nums);
        $left = [];
        $right = [];
        $answer = [];

        $left[0] = 1;
        for ($i = 1; $i < $length; $i++) {
            $left[$i] = $nums[$i - 1] * $left[$i - 1];
        }

        $right[$length - 1] = 1;
        for ($i = $length - 2; $i >= 0; $i--) {
            $right[$i] = $nums[$i + 1] * $right[$i + 1];
        }

        for ($i = 0; $i < $length; $i++) {
            $answer[$i] = $left[$i] * $right[$i];
        }

        return $answer;
    }
}