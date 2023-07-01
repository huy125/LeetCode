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
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        // Add 0 to linked list
        $start = new ListNode(0, $head);
        $slow = $start;
        $fast = $start;
        while($fast && $fast->next) {
            $fast = $fast->next;
            if ($n != 0) {
                --$n;
            } else {
                $slow = $slow->next;
            }
        }

        $slow->next = $slow->next->next ?? null;

        // Return linked list without 0;
        return $start->next;
    }
}