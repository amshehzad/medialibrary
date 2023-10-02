<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

use Spatie\MediaLibraryPro\Livewire\Concerns\WithMedia;
use WireElements\Pro\Components\Modal\Modal;

class DocumentUploader extends Modal
{
    use WithMedia;

    public array $documents = [];


    public function render(): View
    {
        return view('livewire.document-uploader');
    }

    public function submit(): void
    {
        //
    }
}
