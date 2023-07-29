class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        // Two Pointer approach
        $left = 0;
        $right = count($height) - 1;
        $maxLeft = 0;
        $maxRight = 0;
        $trappedWater = 0;

        while ($left < $right) {
            if ($height[$left] < $height[$right]) {
                if ($height[$left] >= $maxLeft) {
                    $maxLeft = $height[$left];
                } else {
                    $trappedWater += $maxLeft - $height[$left]; 
                }
                $left++;
            } else {
                if ($height[$right] >= $maxRight) {
                    $maxRight = $height[$right];
                } else {
                    $trappedWater += $maxRight - $height[$right];
                }
                $right--;
            }
        }

        return $trappedWater;
    }
}