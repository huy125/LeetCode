class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        // Moore Voting Algorithm
        $count = 0;
        $candidate = 0;
        foreach ($nums as $num) {
            if ($count === 0) {
                $candidate = $num;
            }

            $count = $num === $candidate ? $count + 1 : $count - 1;
        }

        return $candidate;
    }
}