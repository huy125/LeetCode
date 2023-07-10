class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $k = 0;
        for ($i = 1; $i <= count($nums); $i++) {
            if ($nums[$i] !== $nums[$i - 1]) {
                $k++;
                $nums[$k] = $nums[$i];
            }
        }

        return $k;
    }
}