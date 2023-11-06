class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome(string $s)
    {
        $allLowercaseString = strtolower($s);
        $validString = preg_replace('/[^a-z0-9]/', '', $allLowercaseString);
        if (empty($validString)) {
            return true;
        }

        $start = 0;
        $end = strlen($validString) - 1;
        while ($start <= $end) {
            if ($validString[$start] !== $validString[$end]) {
                return false;
            }

            $start++;
            $end--;
        }

        return true;
    }
}