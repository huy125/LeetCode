class Solution {

    /**
     * @param String $start
     * @param String $target
     * @return Boolean
     */
    function canChange(string $start, string $target): bool
    {
        $i = $j = 0;
        $len = strlen($start);
        while ($i < $len || $j < $len) {
            while ($i < $len && $start[$i] === "_") {
                $i++;
            }
            while ($j < $len && $target[$j] === "_") {
                $j++;
            }

            if ($i === $len && $j === $len) {
                return true;
            }

            if (
                ($i === $len || $j === $len)
                || ($start[$i] !== $target[$j])
                || ($start[$i] === "L" && $i < $j)
                || ($start[$i] === 'R' && $i > $j)
            ) {
                return false;
            }
            
            $i++;
            $j++;
        }

        return true;
    }
}