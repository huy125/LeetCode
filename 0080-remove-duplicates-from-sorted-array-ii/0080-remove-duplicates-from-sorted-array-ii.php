class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $k = 0;
        $isDuplicatedOnce = false;
        for ($i = 1; $i <= count($nums); $i++) {
            if ($nums[$i] !== $nums[$i - 1]) {
                $k++;
                $nums[$k] = $nums[$i];
            } else if ($nums[$i] === $nums[$i - 1] && !$isDuplicatedOnce && $i !== count($nums)) {
                $k++;
                $nums[$k] = $nums[$i];
                $isDuplicatedOnce = true;
            }

            if ($nums[$i] !== $nums[$i + 1]) {
                $isDuplicatedOnce = false;
            }
        }

        return $k;
    }
}