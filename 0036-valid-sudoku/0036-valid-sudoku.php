class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board)
    {
        $rows = array_fill(0, 9, []);
        $columns = array_fill(0, 9, []);
        $squares = $squares = array_fill(0, 3, array_fill(0, 3, []));
        for ($x = 0; $x < 9; $x++) {
            for ($y = 0; $y < 9; $y++) {
                $cellValue = $board[$x][$y];
                if ($cellValue == ".") {
                    continue;
                }

                if (in_array($cellValue, $rows[$x]) || in_array($cellValue, $columns[$y]) || in_array($cellValue, $squares[$x / 3][$y / 3])) {
                    return false;
                }

                $rows[$x][] = $cellValue;
                $columns[$y][] = $cellValue;
                $squares[floor($x / 3)][floor($y / 3)][] = $cellValue;
            }
        }

        return true;
    }
}