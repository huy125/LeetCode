/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function bstToGst($root) {
        $tmp = 0;
        $this->inorder($root, $tmp);

        return $root;        
    }

    function inorder($root, &$tmp)
    {
        if ($root === null) {
            return;
        }

        $this->inorder($root->right, $tmp);
        $root->val += $tmp;
        $tmp = $root->val;
        $this->inorder($root->left, $tmp);
    }
}