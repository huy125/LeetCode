class SnapshotArray {
    private $history = [];
    private int $snapId = 0;
    /**
     * @param Integer $length
     */
    function __construct($length) {
        for ($i = 0; $i < $length; $i++) {
            $this->history[$i][] = [0, 0];
        }
    }
  
    /**
     * @param Integer $index
     * @param Integer $val
     * @return NULL
     */
    function set($index, $val) {
        $this->history[$index][] = [$this->snapId, $val];
    }
  
    /**
     * @return Integer
     */
    function snap() {
        return $this->snapId++;
    }
  
    /**
     * @param Integer $index
     * @param Integer $snap_id
     * @return Integer
     */
    function get($index, $snap_id) {
        var_dump(self::floor($this->history[$index], $snap_id)[1]);
        return self::floor($this->history[$index], $snap_id)[1];
    }

    /**
     * Use binary search to optimize the time retrieve in the historycal array
     * @param array $arr
     * @param Integer $element
     * @return array
     */
    private static function floor(array $arr, int $element): array
    {
        $left = 0;
        $right = count($arr);
        while ($left < $right) {
            $mid = $left + floor(($right - $left) / 2);

            if ($arr[$mid][0] <= $element) {
                $left = $mid + 1;
            } else {
                $right = $mid;
            }
        }

        return $arr[$left - 1];
    }
}

/**
 * Your SnapshotArray object will be instantiated and called as such:
 * $obj = SnapshotArray($length);
 * $obj->set($index, $val);
 * $ret_2 = $obj->snap();
 * $ret_3 = $obj->get($index, $snap_id);
 */