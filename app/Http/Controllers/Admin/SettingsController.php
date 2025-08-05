<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.pages.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('livewire.admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo_site' => 'required|string|max:150',
            'descricao' => 'nullable|string',
            'redes_sociais' => 'nullable|json',
            'favicon' => 'nullable|image'
        ]);

        $data = $request->all();
        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('favicons', 'public');
        }

        Setting::create($data);
        return redirect()->route('admin.settings.index')->with('success', 'Configuração criada com sucesso!');
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('livewire.admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('favicons', 'public');
        }

        $setting->update($data);
        return redirect()->route('admin.settings.index')->with('success', 'Configuração atualizada com sucesso!');
    }

    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('livewire.admin.settings.show', compact('setting'));
    }
}

