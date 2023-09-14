class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $hashmap = [];
        $words = explode(' ', $s);
        $expected = [];
        for ($i = 0; $i < strlen($pattern); $i++) {
          var_dump($pattern[$i]);
          if (
            $pattern[$i] !== $pattern[$i-1]
            && $words[$i] === $words[$i-1]
          ) {
            return false;
          }

          if (!isset($hashmap[$pattern[$i]])) {
            $hashmap[$pattern[$i]] = $words[$i];
          }

          $expected[] = $hashmap[$pattern[$i]];
        }

        $encounteredValues = [];
        foreach ($hashmap as $key => $value) {
          if (in_array($value, $encounteredValues)) {
            return false;
          } else {
            $encounteredValues[] = $value;
          }
        }
        return $expected === $words;
    }
}