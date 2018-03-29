<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class IntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::inRandomOrder()->first();
        $year= (int)$car->year;
        $this->assertInternalType('int', $year);
        //dd($car->Make);
        //dd(gettype($car->Make));
        //$this->assertInternalType('int', $car->year);
    }
}
