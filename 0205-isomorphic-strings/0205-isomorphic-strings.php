class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $mapS = [];
        $mapT = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (
                empty($mapS[$s[$i]])
                && empty($mapT[$t[$i]])
            ) {
                $mapS[$s[$i]] = $t[$i];
                $mapT[$t[$i]] = $s[$i];
            } elseif (
                $mapS[$s[$i]] !== $t[$i]
                && $mapT[$t[$i]] !== $s[$i]
                ) {
                return false;
            }
        }

        return true;
    }
}