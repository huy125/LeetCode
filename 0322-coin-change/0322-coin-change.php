class Solution {

    const NOT_FOUND_RESULT = -1;
    /**
     * @param Integer[] $coins
     * @param Integer $amount
     * @return Integer
     */
    public function coinChange($coins, $amount) 
    {
        $dynamicTable = array_fill(0, $amount + 1, $amount + 1);
        $dynamicTable[0] = 0;
        
        for ($i = 1; $i <= $amount; $i++) {
            foreach ($coins as $coin) {
                if ($i - $coin < 0) continue;
                $dynamicTable[$i] = min($dynamicTable[$i], $dynamicTable[$i - $coin] + 1);
            }
        }

        return $dynamicTable[$amount] === ($amount + 1) ? -1 : $dynamicTable[$amount];
    }
}