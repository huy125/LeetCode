class MyCircularQueue {
    private $queue;

    private $maxSize;

    /**
     * @param Integer $k
     */
    function __construct($k) {
        $this->queue = [];
        $this->maxSize = $k;
    }
  
    /**
     * @param Integer $value
     * @return Boolean
     */
    function enQueue($value) {
        if ($this->isFull()) return false;

        array_push($this->queue, $value);

        return true;
    }
  
    /**
     * @return Boolean
     */
    function deQueue() {
        if ($this->isEmpty()) return false;

        array_shift($this->queue);

        return true;
    }
  
    /**
     * @return Integer
     */
    function Front() {
        if ($this->isEmpty()) return -1;

        return $this->queue[0];
    }
  
    /**
     * @return Integer
     */
    function Rear() {
        if ($this->isEmpty()) return -1;

        
        return $this->queue[count($this->queue) - 1];
    }
  
    /**
     * @return Boolean
     */
    function isEmpty() {
        return empty($this->queue);
    }
  
    /**
     * @return Boolean
     */
    function isFull() {
        return $this->maxSize === count($this->queue);
    }
}

/**
 * Your MyCircularQueue object will be instantiated and called as such:
 * $obj = MyCircularQueue($k);
 * $ret_1 = $obj->enQueue($value);
 * $ret_2 = $obj->deQueue();
 * $ret_3 = $obj->Front();
 * $ret_4 = $obj->Rear();
 * $ret_5 = $obj->isEmpty();
 * $ret_6 = $obj->isFull();
 */