<?php
/**
 * Class SumFinderClass
 */
class SumFinderClass
{
    private $inputArray;

    /**
     * @param $inputArray
     */
    public function __construct($inputArray = null)
    {
        $this->inputArray = $inputArray;
    }

    /**
     * Returns sum of products
     * @return array
     */
    public function findSum()
    {
        $arrayGroups = array();

        $sum = 0;

        foreach ($this->inputArray as $element) {
          $sum += $element['unit_price'];
        }

        return $sum;
    }

}
