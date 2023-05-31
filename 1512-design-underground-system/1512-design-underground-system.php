class UndergroundSystem {

    private $trips = [];
    private $customerStates = [];
    /**
     */
    function __construct() {
        
    }
  
    /**
     * @param Integer $id
     * @param String $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkIn($id, $stationName, $t) {
        $this->customerStates[$id] = ['start_station' => $stationName, 'start_time' => $t];
    }
  
    /**
     * @param Integer $id
     * @param String $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkOut($id, $stationName, $t) {
        $customerState = $this->customerStates[$id];
        $this->trips[$customerState['start_station'] . '_' . $stationName][] = $t - $customerState['start_time'];
        unset($this->customerStates['id']);
    }
  
    /**
     * @param String $startStation
     * @param String $endStation
     * @return Float
     */
    function getAverageTime($startStation, $endStation) {
        $allTrips = $this->trips[$startStation . '_' . $endStation];

        $nbTrips = count($allTrips);
        if ($nbTrips > 0) {
            return array_sum($allTrips) / $nbTrips;
        } else {
            return 0.0;
        }
    }
}

/**
 * Your UndergroundSystem object will be instantiated and called as such:
 * $obj = UndergroundSystem();
 * $obj->checkIn($id, $stationName, $t);
 * $obj->checkOut($id, $stationName, $t);
 * $ret_3 = $obj->getAverageTime($startStation, $endStation);
 */