class Solution {

    private array $map = [];
    private array $informTime = [];

    /**
     * @param Integer $n
     * @param Integer $headID
     * @param Integer[] $manager
     * @param Integer[] $informTime
     * @return Integer
     */
    function numOfMinutes($n, $headID, $manager, $informTime) {

        $this->informTime = $informTime;
        $this->map = [];
        foreach ($manager as $employee => $managerID) {
            if (!isset($this->map[$managerID])) {
                $this->map[$managerID] = [];
            }
            $this->map[$managerID][] = $employee;
        }

        return $this->dp($headID, 0);
    }

    function dp($managerID, $time) {
        if ($this->informTime[$managerID] == 0) {
            return $time;
        }

        $time += $this->informTime[$managerID];

        $times = [];
        foreach($this->map[$managerID] as $employeeID) {
            $times[] = $this->dp($employeeID, $time);
        }
        return max($times);
    }
}