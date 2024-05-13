<?php

namespace App\Livewire;

use Livewire\Component;

class Sensor extends Component
{
    public $count = 200;

    public $message;
    public $buzzer = 0;

    public $led = 0;

    public $fire = 0;
    public $smoke = 0;
    public $humidity = 1;
    public $humidityValue = 10;
    public $temperature = 24;


    public function mount()
    {
//        $senzor = Senzor::latest()->first();
    }

    public function toggleBuzzer()
    {
        $this->buzzer = !$this->buzzer;
    }

    public function toggleLed()
    {
        $this->led = !$this->led;
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function toggleFire()
    {
        $this->message = '';
        $this->fire = !$this->fire;

        if ($this->fire == 1)
            $this->message = "FIRE. FIRE. FIRE, YOUR HOUSE IS ON FIRE";

    }

    public function toggleSmoke()
    {
        $this->message = '';

        $this->smoke = !$this->smoke;

        if ($this->smoke == 1)
            $this->message = "SMOKE. SMOKE. SMOKE, YOUR SERA ITS ON SMOKE";
    }

    public function toggleHumidity()
    {
        $this->message = '';
        $this->humidityValue = 10;
        $this->humidity = !$this->humidity;

        if ($this->humidity == 1){
            $this->humidityValue = 100;
            $this->message = "HUMIDITY. HUMIDITY. HUMIDITY ON TOP LEVEL";
        }
    }

    public function render()
    {
        return view('livewire.senzor');
    }
}
