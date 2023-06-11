class Solution {

    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minimumCost($cost) {
        rsort($cost);
        $res = 0;
        for ($i = 0; $i < count($cost); $i++) {
            if (($i + 1) % 3 !== 0) {
                $res += $cost[$i];
            }
        }

        return $res;
    }
}