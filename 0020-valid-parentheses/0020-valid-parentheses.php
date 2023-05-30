class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $openParentheses = ['(', '[', '{'];
        $closeParentheses = [')', ']', '}'];
        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $openParentheses)) {
                array_unshift($stack, $s[$i]);
            } else {
                $previousParenthese = $stack[0];
                if (
                    array_search($previousParenthese, $openParentheses) === array_search($s[$i], $closeParentheses)
                ) {
                    array_shift($stack);
                } else {
                    return false;
                }
            }
        }

        if (!empty($stack)) {
            return false;
        }

        return true;
    }
}