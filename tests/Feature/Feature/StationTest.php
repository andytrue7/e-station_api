<?php

namespace Tests\Feature\Feature;

use App\Station;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class StationTest extends TestCase
{
    use DatabaseMigrations;

    public function testStationsAreCreated()
    {

        $this->actingAs(factory(User::class)->create());

        $data = [
          'name' => 'Lorem',
          'status' => 1,
          'city_id' => 1
        ];

        $this->json('POST', '/api/stations', $data)
            ->assertStatus(200);
    }

    public function testStationsAreUpdated()
    {
        $this->actingAs(factory(User::class)->create());

        $station = factory(Station::class)->create([
            'name' => 'Lorem',
            'status' => 1,
            'city_id' => 1,
        ]);

        $data = [
            'name' => 'NewLorem',
            'status' => 0
        ];

        $this->json('PUT', 'api/stations' . $station->id, $data)
            ->assertStatus(200);
    }

    public function testStationsAreDeleted()
    {
        $this->actingAs(factory(User::class)->create());

        $station = factory(Station::class)->create([
            'name' => 'Lorem',
            'status' => 1,
            'city_id' => 1,
        ]);

        $this->json('DELETE', 'api/stations' . $station->id, [])
            ->assertStatus(204);
    }
}
