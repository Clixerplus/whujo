<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\Models\Category;

class InputCategory extends Component
{
    public $category;

    public function mount($category = null)
    {
        $this->category = $category;
    }

    public function updatedCategory($value)
    {

        $this->validate([
            'category' => 'exists:categories,id'
        ]);

        $this->emitUp('addAttribute', [
            'category_id' => $this->category
        ]);
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-category',
            [
                'categories' => Category::all(['id', 'name']),
            ]
        );
    }
}
