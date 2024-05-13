<?php

namespace App\Livewire;

use Livewire\Attributes\Session;
use Livewire\Component;

class Sensor extends Component
{
    #[Session]
    public $count = 200;
    #[Session]
    public $message;
    #[Session]
    public $buzzer = 0;
    #[Session]
    public $led = 0;
    #[Session]
    public $fire = 0;
    #[Session]
    public $smoke = 0;
    #[Session]
    public $humidity = 1;
    #[Session]
    public $humidityValue = 10;
    #[Session]
    public $temperature = 24;

    public function resetToDefault()
    {
        $this->count = 200;
        $this->message = '';
        $this->buzzer = 0;
        $this->led = 0;
        $this->fire = 0;
        $this->smoke = 0;
        $this->humidity = 1;
        $this->humidityValue = 10;
        $this->temperature = 24;
    }

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
