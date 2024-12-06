class Solution {

    /**
     * @param Integer[] $banned
     * @param Integer $n
     * @param Integer $maxSum
     * @return Integer
     */
    function maxCount($banned, $n, $maxSum) {
        // Time Complexity: O(N+M)
        // Space Complexity: O(N)
        usort($banned, function($a, $b) {
            return $a > $b;
        });
        
        $i = 0; $j = 0;
        $sum = 0;
        $count = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($j < count($banned) && $banned[$j] === $i) {
                while ($j < count($banned) && $banned[$j] === $i) {
                    // loop through all occurences
                    $j++;
                }
            } else {
                $sum += $i;
                if ($sum > $maxSum) break;
                $count++;
            }
        }

        return $count;
    }
}
