class Solution {
    /**
     * @param Integer[][] $events
     * @return Integer
     */
    function maxTwoEvents($events) {
        if (empty($events)) return 0;

        // Sort in ascending order for s
        usort($events, function($a, $b) {
            return $a[0] <=> $b[0];
        });

        // Create a suffix array
        $numEvents = count($events);
        $suffixArr = array_fill(0, count($events), 0);
        $suffixArr[$numEvents - 1] = $events[$numEvents - 1][2];
        for ($i = $numEvents - 2; $i >= 0; $i--) {
            $suffixArr[$i] = max($events[$i][2], $suffixArr[$i + 1]);
        }

        $maxSum = 0;
        for ($i = 0; $i < $numEvents; $i++) {
            $left = $i + 1;
            $right = $numEvents - 1;
            $nextEventIndex = -1;

            while ($left <= $right) {
                $mid = $left + intdiv($right - $left, 2);
                if ($events[$mid][0] > $events[$i][1]) {
                    $right = $mid - 1;
                    $nextEventIndex = $mid;
                } else {
                    $left = $mid + 1;
                }
            }

            if ($nextEventIndex !== -1) {
                $maxSum = max($maxSum, $events[$i][2] + $suffixArr[$nextEventIndex]);
            }

            $maxSum = max($maxSum, $events[$i][2]);
        }

        return $maxSum;
    }
}