class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function oddString($words) {
        $diff = [];
        foreach ($words as $word) {
            $diff = [];
            for ($i = 0; $i < strlen($word) - 1; $i++) {
                $diff[] = $this->letterToNumber($word[$i + 1]) - $this->letterToNumber($word[$i]);
            }
            $key = implode(',', $diff); // Create a unique string representation for the pattern
            $diffPatterns[$key] = ($diffPatterns[$key] ?? 0) + 1;
            $patternToWord[$key] = $word;
        }

        foreach ($diffPatterns as $key => $value) {
            if ($value === 1) {
                return $patternToWord[$key];
            }
        }
        
        return "";
    }

    function letterToNumber(string $letter): int 
    {
        return ord($letter) - ord('a');
    }
}