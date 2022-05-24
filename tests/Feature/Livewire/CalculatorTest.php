<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Calculator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Livewire\Testing\TestableLivewire;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    use RefreshDatabase;

    public $seed = true;

    public TestableLivewire $component;

    public function setUp() : void
    {
        parent::setUp();

        $this->component = Livewire::test(Calculator::class);
    }

    /** @test */
    public function the_component_can_render()
    {
        $this->component->assertStatus(200);
    }
}
