class Solution {

    /**
     * @param String[][] $favoriteCompanies
     * @return Integer[]
     */
    function peopleIndexes($favoriteCompanies) {
        $fav = [];
        $set = [];

        foreach ($favoriteCompanies as $index => $companies) {
            $set[] = $index;
            $fav[$index] = array_flip($companies);
        }

        for ($i = 1; $i < count($favoriteCompanies); $i++) {
            if (!in_array($i, $set)) continue;

            for ($j = 0; $j < $i; $j++) {
                if (!in_array($j, $set)) continue;

                if ($this->isSubSet($fav[$j], $fav[$i])) {
                    $set = array_values(array_diff($set, [$j]));
                } elseif ($this->isSubSet($fav[$i], $fav[$j])) {
                    $set = array_values(array_diff($set, [$i]));
                    break;
                }
            }
        }

        sort($set);

        return $set;
    }

    function isSubSet($child, $parent) {
        foreach ($child as $key => $value) {
            if (!isset($parent[$key])) {
                return false;
            }
        }
        return true;
    }
}