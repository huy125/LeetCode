class ParkingSystem {
    private $bigSlots;
    private $mediumSlots;
    private $smallSlots;
    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small) {
        $this->bigSlots = $big;
        $this->mediumSlots = $medium;
        $this->smallSlots = $small;
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        switch ($carType) {
            case 1:
                return $this->handleBigSlot();
            case 2:
                return $this->handleMediumSlot();
            case 3:
                return $this->handleSmallSlot();
        }
    }

    /**
     * @return Boolean
     */
    private function handleBigSlot(): bool
    {
        if ($this->bigSlots === 0) {
            return false;
        }

        $this->bigSlots--;
        return true;
    }

    /**
     * @return Boolean
     */
    private function handleMediumSlot(): bool
    {
        if ($this->mediumSlots === 0) {
            return false;
        }

        $this->mediumSlots--;
        return true;
    }

    /**
     * @return Boolean
     */
    private function handleSmallSlot(): bool
    {
        if ($this->smallSlots === 0) {
            return false;
        }

        $this->smallSlots--;
        return true;
    }
}

/**
 * Your ParkingSystem object will be instantiated and called as such:
 * $obj = ParkingSystem($big, $medium, $small);
 * $ret_1 = $obj->addCar($carType);
 */