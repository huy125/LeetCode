class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (count($strs) === 0) {
            return "";
        }

        $prefix = $strs[0];
        foreach ($strs as $str) {
            while (strpos($str, $prefix) !== 0) {
                $prefix = substr($prefix, 0, strlen($prefix) - 1);
                if (empty($prefix)) {
                    return "";
                }
            }
        }

        return $prefix;
    }
}