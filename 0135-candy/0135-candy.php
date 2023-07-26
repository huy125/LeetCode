class Solution {

    /**
     * @param Integer[] $ratings
     * @return Integer
     */
    function candy($ratings) {
        $length = count($ratings);
        $leftToRight = array_fill(0, $length, 1);
        $rightToLeft = array_fill(0, $length, 1);

        for ($i = 1; $i < $length; $i++) {
            if ($ratings[$i] > $ratings[$i - 1]) {
                $leftToRight[$i] = $leftToRight[$i - 1] + 1;
            }
        }

        for ($i = $length - 2; $i >= 0; $i--) {
            if ($ratings[$i] > $ratings[$i + 1]) {
                $rightToLeft[$i] = $rightToLeft[$i + 1] + 1;
            }
        }

        for ($i = 0; $i < $length; $i++) {
            $sum += max($leftToRight[$i], $rightToLeft[$i]);
        }

        return$sum;
    }
}