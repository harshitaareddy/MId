<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $car = Car::find(15);
        if (!is_null($car)) {
            $car->destroy(15);
            $this->assertTrue($car->save());
        }
        $this->assertTrue($carr = !NULL);
    }
}
