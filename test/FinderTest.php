<?php namespace SimilarText\Test;

use \SimilarText\Finder;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testOk() {
        //
        $text_finder = new Finder('bananna', ['apple', 'kiwi', 'banana', 'orange', 'banner']);
        $this->assertEquals('banana', $text_finder->first());
    }
}
