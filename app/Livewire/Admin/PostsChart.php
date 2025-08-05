<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsChart extends Component
{
    public $labels = [];
    public $data = [];
    public $totalPosts;

    public function mount()
    {
        $totalPosts = Post::count();
        $publishedPosts = Post::where('status', 'publlicado')->count();
        $draftPosts = Post::where('status', 'rascunho')->count();
        $stats = Post::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total','status')
            ->toArray();

        $this->labels = array_keys($stats);
        $this->data = array_values($stats);
        $this->totalPosts = $totalPosts;
    }

    public function render()
    {
        return view('livewire.admin.posts-chart');
    }
}

