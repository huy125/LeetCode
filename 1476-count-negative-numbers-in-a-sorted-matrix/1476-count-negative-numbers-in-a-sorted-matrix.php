class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $count = 0;
        $size = count($grid[0]);
        foreach ($grid as $row) {
            $left = 0;
            $right = $size - 1;
            while ($left <= $right) {
                $mid = floor(($right + $left) / 2);
                if ($row[$mid] >= 0) {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
            }

            $count += ($size - $left);
        }

        return $count;
    }
}