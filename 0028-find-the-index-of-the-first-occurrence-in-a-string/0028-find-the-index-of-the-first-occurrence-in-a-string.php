class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        return $this->windowSlidingSolution($haystack, $needle);
    }

    function buildInPhpSolution($haystack, $needle): int
    {
        $result = strpos($haystack, $needle);

        return !is_numeric($result) ? -1 : $result;
    }

    function windowSlidingSolution($haystack, $needle): int
    {
        $needleLength = strlen($needle);
        $haystackLength = strlen($haystack);
        for ($windowStart = 0; $windowStart <= $haystackLength - $needleLength; $windowStart++) {
            for ($i = 0; $i < $needleLength; $i++) {
                if ($haystack[$windowStart + $i] !== $needle[$i]) {
                    break;
                }

                if ($i === $needleLength - 1) {
                    return $windowStart;
                }
            }
        }

        return -1;
    }
}