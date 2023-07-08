class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $nums1Pointer = $m - 1;
        $nums2Pointer = $n - 1;
        $mergeArrayPointer = $m + $n - 1;

        while ($nums2Pointer >= 0) {
            if ($nums1Pointer >= 0 && $nums1[$nums1Pointer] > $nums2[$nums2Pointer]) {
                $nums1[$mergeArrayPointer--] = $nums1[$nums1Pointer--];
            } else {
                $nums1[$mergeArrayPointer--] = $nums2[$nums2Pointer--];
            }
        }
    }
}