/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        if (empty($head->next)) return false;
        
        $slow = $head;
        $fast = $head;
        while (!empty($fast) || !empty($fast->next)) {
            $fast = $fast->next->next;
            $slow = $slow->next;

            if ($slow === $fast) {
                return true;
            }
        }

        return false;
    }
}