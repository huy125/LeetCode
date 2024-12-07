class Solution {

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned)
    {
        $paragraph = $this->refineParagraph($paragraph);
        $words = preg_split('/\s+/', trim($paragraph));

        $hash = [];
        foreach ($words as $word) {
            if (in_array($word, $banned)) {
                continue;
            }

            if (empty($hash[$word])) {
                $hash[$word] = 1;
            } else {
                $hash[$word]++;
            }
        }

        // Return the max occurences
        uasort($hash, function($a, $b) {
            return $b <=> $a;
        });

        return array_key_first($hash);
    }

    function refineParagraph(string $paragraph)
    {
        $paragraph = strtolower($paragraph);
        $paragraph = preg_replace('/[^a-zA-Z\s]/', ' ', $paragraph);

        return $paragraph;
    }
}