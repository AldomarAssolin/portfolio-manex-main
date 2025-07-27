<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $content;

    // Construtor para receber valores dinâmicos
    public function __construct($title = null, $content = null)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function render()
    {
        return view('components.card');
    }
}
