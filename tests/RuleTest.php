<?php
namespace GameOfLife;

class RuleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     */
    public function cellsDieWhenHavingLessThanTwoNeighbours()
    {
        $rule = new Rule();
        $this->assertFalse($rule->cellStaysAlive(true, 1));
    }

    /**
     * @test
     */
    public function cellsDieWhenHavingMoreThanThreeNeighbours()
    {
        $rule = new Rule();
        $this->assertFalse($rule->cellStaysAlive(true, 4));
    }

    /**
     * @test
     */
    public function cellsStayAliveWhenHavingTwoNeighbours()
    {
        $rule = new Rule();
        $this->assertTrue($rule->cellStaysAlive(true, 2));
    }

    /**
     * @test
     */
    public function cellsStayDeadWhenHavingTwoNeighbours()
    {
        $rule = new Rule();
        $this->assertFalse($rule->cellStaysAlive(false, 2));
    }

    /**
     * @test
     */
    public function cellsStayAliveWhenHavingThreeNeighbours()
    {
        $rule = new Rule();
        $this->assertTrue($rule->cellStaysAlive(true, 3));
    }

    /**
     * @test
     */
    public function cellsBecomeAliveWhenHavingThreeNeighbours()
    {
        $rule = new Rule();
        $this->assertTrue($rule->cellStaysAlive(false, 3));
    }
}
