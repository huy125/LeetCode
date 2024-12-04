class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return Boolean
     */
    function canMakeSubsequence($str1, $str2) {
        if (str_contains($str1, $str2)) return true;

        $p1 = 0;
        $p2 = 0;
        while ($p1 < strlen($str1) && $p2 < strlen($str2)) {
            if ($this->hasTwoCharMatch($str1[$p1], $str2[$p2])) {
                $p2++;
            }
            $p1++;
        }
        
        return $p2 === strlen($str2);
    }

    function hasTwoCharMatch(string $char1, string $char2): bool
    {
        if ($char1 === $char2) return true;

        $nextChar1 = ++$char1;
        if (strlen($nextChar1) >= 1) {
            $nextChar1 = $nextChar1[0];
        }
        
        return $nextChar1 === $char2;
    }
}