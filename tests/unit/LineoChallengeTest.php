<?php

use PHPUnit\Framework\TestCase;

use App\LineoChallenge;

class LineoChallengeTest extends TestCase{
	
	public function numbersassertEqualsTest(){
		$verMulti = new App\LineoChallenge;

		$response = $verMulti->verMultiplo(1,100);

		$this->assertEquals("tests", "test");
	}
}