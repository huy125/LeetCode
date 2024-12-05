class TrieNode {
    public $children = [];
    public $is_word = false;

    public function __construct() {
        $this->children = [];
        $this->is_word = false;
    }
}

class WordDictionary {
    private $root;
    /**
     */
    function __construct() {
        $this->root = new TrieNode();
    }
  
    /**
     * @param String $word
     * @return NULL
     */
    function addWord($word) {
        $node = $this->root;

        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];

            if (!array_key_exists($char, $node->children)) {
                $node->children[$char] = new TrieNode();
            }

            $node = $node->children[$char];
        }

        $node->is_word = true;
    }
  
    /**
     * @param String $word
     * @return Boolean
     */
    function search($word) {
        return $this->searchHelper($word, $this->root);
        
    }

    function searchHelper($word, $node) {
        if (strlen($word) === 0) {
            return $node->is_word;
        }

        $char = $word[0];

        if ($char === ".") {
            foreach ($node->children as $childNode) {
                if ($this->searchHelper(substr($word, 1), $childNode)) {
                    return true;
                }
            }

            return false;
        } elseif (array_key_exists($char, $node->children)) {
            return $this->searchHelper(substr($word, 1), $node->children[$char]);
        } else {
            return false;
        }
    }
}

/**
 * Your WordDictionary object will be instantiated and called as such:
 * $obj = WordDictionary();
 * $obj->addWord($word);
 * $ret_2 = $obj->search($word);
 */