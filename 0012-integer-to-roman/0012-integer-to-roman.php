class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $memo = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        $dividend = $num;
        $romanNumber = '';
        foreach ($memo as $key => $value) {
            $remainder = $dividend % $value;
            $quotient = intval($dividend / $value);
            $dividend = $remainder;

            if (!empty($quotient)) {
                $romanNumber = $this->buildRomanNumber($romanNumber, $key, $quotient);
            }

            if (empty($remainder)) {
                break;
            }
        }

        return $romanNumber;
    }

    /**
     * @param String $romanNumber
     * @param String $letter
     * @param Integer $numberLetters
     *
     * @return String
     */
    function buildRomanNumber(string $romanNumber, string $letter, int $numberLetters): string
    {
        for ($i = 0; $i < $numberLetters; $i++) {
            $romanNumber .= $letter;
        }

        return $romanNumber;
    }
}