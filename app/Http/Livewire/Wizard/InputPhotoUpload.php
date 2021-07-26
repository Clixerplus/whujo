<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Model;
use App\Http\Livewire\Traits\CanValidateStepChange;

class InputPhotoUpload extends Component
{
    use WithFileUploads;

    public $product;

    public $photo;

    protected $rules = [
        'photo' => 'required|image|max:1024|dimensions:ratio=1/1'
    ];

    protected $listeners  = [
        'stepForward' => 'canChangeStep',
        'stepBackward',
    ];

    public function mount(Model $product)
    {
        $this->product = $product;
    }

    public function upload()
    {
        return $this->photo->store("images/" . $this->product->id, 'public');
    }

    public function save()
    {
        $this->validate();

        $arrayPhotos = $this->product->photos;

        if (count($arrayPhotos) < 6) {

            $this->product->photos = array_merge($arrayPhotos, [$this->upload()]);

            $this->product->save();
        }

        $this->reset('photo');
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-photo-upload',
            ['photos' => $this->product->photos ?? []]
        );
    }

    public function canChangeStep()
    {
        $this->emitUp('next');
    }
}
