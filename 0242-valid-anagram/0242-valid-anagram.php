class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $originHashMap = [];
        $anagramHashMap = [];
        if (strlen($s) !== strlen($t)) return false;
        for ($i = 0; $i < strlen($s); $i++) {
            $originHashMap[$s[$i]]++;
            $anagramHashMap[$t[$i]]++;
        }

        return $originHashMap == $anagramHashMap;
    }
}