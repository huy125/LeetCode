class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows === 1) {
            return $s;
        }

        $length = strlen($s);
        // One section contains at most 1 column and 1 diagonal => nbCols for each section = $numRows - 1
        $sections = ceil($length / (2 * $numRows - 2));
        $numCols = $sections * ($numRows - 1);
        $matrix = [];
        $currRow = $currCol = 0;
        $currStringIndex = 0;
        // Iterate zig-zag pattern
        while ($currStringIndex < $length) {
            // Move down
            while ($currRow < $numRows && $currStringIndex < $length) {
                $matrix[$currRow][$currCol] = $s[$currStringIndex];
                $currRow++;
                $currStringIndex++;
            }

            $currRow -= 2;
            $currCol++;

            // Move up and right
            while ($currRow > 0 && $currCol < $numCols && $currStringIndex < $length) {
                $matrix[$currRow][$currCol] = $s[$currStringIndex];
                $currRow--;
                $currCol++;
                $currStringIndex++;
            }
        }

        foreach ($matrix as $row) {
            foreach ($row as $char) {
                $answer .= $char;
            }
        }

        return $answer;
    }
}