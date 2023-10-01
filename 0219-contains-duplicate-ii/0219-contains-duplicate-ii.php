class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $hash = [];
        for ($i = 0; $i < count($nums); $i++) {
            if (!isset($hash[$nums[$i]]) || abs($i - $hash[$nums[$i]]) > $k) {
                $hash[$nums[$i]] = $i; 
            } else {
                if (abs($i - $hash[$nums[$i]]) <= $k) {
                    return true;
                }
            }
        }

        return false;
    }
}