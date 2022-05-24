<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public bool $operation = false;

    public float $total = 0.00;

    public string $sentence = '';

    public function write(string $digit) : void
    {
        if ($this->sentence === '') {
            $this->total = 0;
        }

        if (str($this->sentence)->length > 27) {
            return;
        }
        $this->operation = false;
        $this->sentence .= $digit;
    }

    public function erase() : void
    {
        $this->operation = false;
        $this->sentence = str($this->sentence)->substr(0, -1);
    }

    public function clear() : void
    {
        $this->operation = false;
        $this->total = 0;
        $this->sentence = '';
    }

    public function operation(string $operator) : void
    {
        if ($this->operation) {
            return;
        }

        $this->sentence .= " " . $operator . " ";
        $this->operation = true;
    }

    public function calculate() : void
    {
        $this->total = (float) math_eval($this->sentence);
        $this->sentence = (string) $this->total;
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
