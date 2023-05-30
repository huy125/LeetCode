class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s): bool {
        $stack = [];
        $parentheseSet = ['(' => ')', '[' => ']', '{' => '}'];
        for ($i = 0; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i], $parentheseSet)) {
                $stack[] = $parentheseSet[$s[$i]];
            } elseif (array_pop($stack) !== $s[$i]) {
                return false;
            }
        }

        return count($stack) === 0;
    }
}