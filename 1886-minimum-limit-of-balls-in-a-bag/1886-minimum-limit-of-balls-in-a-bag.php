class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $maxOperations
     * @return Integer
     */
    function minimumSize($nums, $maxOperations) {
        $left = 1;
        $right = max($nums);

        while ($left < $right) {
            $mid = intval(($left + $right) / 2);

            if ($this->canAchievePenalty($nums, $maxOperations, $mid)) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }

        return $left;
    }

    function canAchievePenalty($nums, $maxOperations, $penalty): bool
    {
        $operations = 0;
        foreach($nums as $num) {
            if ($num > $penalty) {
                $operations += ceil($num / $penalty) - 1;
                if ($operations > $maxOperations) return false;
            }
        }

        return true;
    }
}