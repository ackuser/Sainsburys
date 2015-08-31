<?php
require_once 'SumFinderClass.php';
require_once 'src/Scraper.php';

class SumFinderClassTest extends PHPUnit_Framework_TestCase
{
    /* Check the sum of the products is the same as in total */
    public function testFindSum()
    {

        $json = Scraper::start();
        $array = json_decode($json, true);
        //print_r($array['total']);
        $input = $array['results'];
        $total = $array['total'];

        $sumFinder = new SumFinderClass($input);
        $this->assertEquals($total, $sumFinder->findSum());
    }

}
