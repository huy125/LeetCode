/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer
     */
    function maxDepth($root) {
        if (!$root) return 0;
    	$max = 1;
        foreach ($root->children as $child) {
            $max = max($this->maxDepth($child) + 1, $max);
        }

        return $max;
    }
}