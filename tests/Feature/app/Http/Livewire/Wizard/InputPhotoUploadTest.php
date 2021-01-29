<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Experience;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Tests\Feature\MockClass\ProductModelTest;
use App\Http\Livewire\Wizard\InputPhotoUpload;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputPhotoUploadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_set_data_on_mount()
    {
        $model = new ProductModelTest;
        $model->photos = ['images/photo.jpg'];

        Livewire::test(InputPhotoUpload::class, ['product' => $model])
            ->assertset('product.photos', $model->photos);
    }

    /** @test */
    function it_show_photo_from_model()
    {
        $model = new ProductModelTest;
        $model->photos = ['images/photo1.jpg', 'images/photo2.jpg'];

        Livewire::test(InputPhotoUpload::class, ['product' => $model])
            ->assertViewHas('photos', $model->photos)
            ->assertSeeHtml('src="' . Storage::url($model->photos[0]) . '"')
            ->assertSeeHtml('src="' . Storage::url($model->photos[1]) . '"');
    }

    /** @test */
    function it_has_an_element_to_upload_a_new_photo()
    {
        Livewire::test(InputPhotoUpload::class, ['product' => new ProductModelTest])
            ->assertSeeHtml('type="file" wire:model="photo"');
    }

    /** @dataProvider models  */
    function test_it_can_upload_a_photo(Model $model)
    {
        Storage::fake(PHOTO_STORAGE_DISK);
        $product = $model->factory()->create(['photos' => []]);
        $photo = UploadedFile::fake()->image('photo.png',);

        Livewire::test(InputPhotoUpload::class, ['product' => $product])
            ->set('photo', $photo)
            ->call('save');

        $photoStored = $model->find(1)->first()->photos[0];
        Storage::disk(PHOTO_STORAGE_DISK)->assertExists($photoStored);
    }

    function models()
    {
        return [
            "On Model Experience" => [new Experience],
            "On Model Service"    => [new Service],
        ];
    }

    /** @test */
    function it_show_a_preview_of_an_uploaded_photo()
    {
        Storage::fake('images');
        $photo = UploadedFile::fake()->image('photo.png');

        Livewire::test(InputPhotoUpload::class, ['product' => new ProductModelTest])
            ->assertDontSeeHtml('<img id="upload_preview"')
            ->set('photo', $photo)
            ->call('upload', 'uploaded-photo.png')
            ->assertSeeHtml('<img id="upload_preview"');
    }

    /** @test */
    function it_upload_a_maximum_of_six_photos()
    {
        Storage::fake('image');
        $photo = UploadedFile::fake()->image('photo.png',);
        $model = Service::factory()->create([
            'photos' => ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg']
        ]);

        Livewire::test(InputPhotoUpload::class, ['product' => $model])
            ->assertDontSeeHtml('type="file" wired:model="photo"')
            ->set('photo', $photo)
            ->call('save');

        Storage::disk('image')->assertMissing($photo);
    }

    /** @test */
    function photo_file_must_be_less_than_1024_kb()
    {
        $photo = UploadedFile::fake()->image('photo.png')->size(1100);

        Livewire::test(InputPhotoUpload::class, ['product' => new ProductModelTest])
            ->set('photo', $photo)
            ->call('save')
            ->assertHasErrors(['photo' => 'max']);
    }

    /** @test */
    function photo_file_must_ha_a_ration_1_for_1()
    {
        $photo = UploadedFile::fake()->image('photo.png', 10, 15);

        Livewire::test(InputPhotoUpload::class, ['product' => new ProductModelTest])
            ->set('photo', $photo)
            ->call('save')
            ->assertHasErrors(['photo' => 'dimensions']);
    }

    /** @test */
    function photo_file_cannot_be_empty()
    {
        Livewire::test(InputPhotoUpload::class, ['product' => new ProductModelTest])
            ->call('save')
            ->assertHasErrors(['photo' => 'required']);
    }

    
}
