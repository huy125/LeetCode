class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $result = strpos($haystack, $needle);
        return !is_numeric($result) ? -1 : $result;
    }
}