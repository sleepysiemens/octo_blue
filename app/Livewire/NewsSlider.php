<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\WithPagination;

class NewsSlider extends Component
{
    use WithPagination;
    public function render()
    {
        $blog_posts=BlogPost::paginate(4);
        return view('livewire.news-slider', compact(['blog_posts']));
    }
}
