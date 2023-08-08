class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $s = trim($s);
        $wordList = preg_split('/\s+/', $s);
        $reversedWordList = array_reverse($wordList);
        
        return implode(' ', $reversedWordList);
    }
}