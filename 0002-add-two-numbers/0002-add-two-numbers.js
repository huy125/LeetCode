/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} l1
 * @param {ListNode} l2
 * @return {ListNode}
 */
var addTwoNumbers = function(l1, l2) {
    let current = new ListNode(0);
    let result = current;
    let buffer = 0;
    while (l1 !== null || l2 !== null || buffer !== 0) {
        let l1Val = (l1 !== null) ? l1.val : 0;
        let l2Val = (l2 !== null) ? l2.val : 0;
        let sum = l1Val + l2Val + buffer;
        // result.val = sum % 10 + buffer;
        buffer = 0;
        if (sum / 10 >= 1) {
            buffer = 1;
        }

        current.next = new ListNode(sum % 10);
        current = current.next;
        if (l1 !== null) {
            l1 = l1.next;
        }

        if (l2 !== null) {
            l2 = l2.next;
        }
    }

    return result.next;
};