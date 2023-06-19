/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $prev = null;
        $current = $head;
        while (!empty($current)) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next; 
        }

        $head = $prev;
        
        return $head;
    }
}