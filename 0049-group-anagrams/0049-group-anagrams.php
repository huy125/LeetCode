class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        if (count($strs) < 2) {
            return [$strs];
        }

        $result = [];
        foreach ($strs as $str) {
            $arr = str_split(strtolower($str));
            sort($arr);
            $key = implode($arr);
            if (!isset($result[$key])) {
                $result[$key] = [];
            }

            $result[$key][] = $str;
        }

        return $result;
    }
}