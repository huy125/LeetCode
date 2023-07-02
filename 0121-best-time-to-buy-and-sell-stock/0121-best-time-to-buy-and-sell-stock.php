class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $smallestValue = PHP_INT_MAX;
        $bestProfit = 0;
        foreach ($prices as $price) {
            if ($price < $smallestValue) {
                $smallestValue = $price; 
            } elseif ($price - $smallestValue > $bestProfit) {
                $bestProfit = $price - $smallestValue;
            }
        }

        if ($bestProfit < 0) return 0;

        return $bestProfit;
    }
}