class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $this->rotateWithExtraSpace($nums, $k);
    }

    private function rotateWithExtraSpace(&$nums, $k) {
        $length = count($nums);
        $k = $k % $length;

        $tmp = [];
        for ($i = 0; $i < $length; $i++) {
            $tmp[] = $nums[($length - $k + $i) % $length];
        }

        $nums = $tmp;
    }
}