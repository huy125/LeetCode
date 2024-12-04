class Solution {

    /**
     * @param array $slots1
     * @param array $slots2
     * @param int $duration
     * @return array
     */
    public function minAvailableDuration(array $slots1, array $slots2, int $duration): array {
        // Sort both slot arrays
        usort($slots1, function($a, $b) {
            return $a[0] <=> $b[0];
        });
        usort($slots2, function($a, $b) {
            return $a[0] <=> $b[0];
        });

        $N = count($slots1);
        $M = count($slots2);
        $i = 0;
        $j = 0;

        while ($i < $N && $j < $M) {
            [$s1, $e1] = $slots1[$i];
            [$s2, $e2] = $slots2[$j];

            // Check if slots overlap
            if ($s1 <= $e2 && $s2 <= $e1) {
                $max_start = max($s1, $s2);
                $min_end = min($e1, $e2);

                // Check if the overlapping duration is enough
                if ($min_end - $max_start >= $duration) {
                    return [$max_start, $max_start + $duration];
                }
            }

            // Move the pointer with the smaller end time
            if ($e1 < $e2) {
                $i++;
            } else {
                $j++;
            }
        }

        // Return an empty array if no suitable time slot is found
        return [];
    }
}