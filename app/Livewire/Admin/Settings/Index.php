<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use App\Models\Setting;

class Index extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = Setting::all();
    }

    public function render()
    {
        return view('livewire.admin.settings.index');
    }
}

