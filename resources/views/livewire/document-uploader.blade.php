<x-wire-elements-pro::bootstrap.modal on-submit="submit">
    <x-slot name="title">{{ __('Upload Document') }}</x-slot>
    <livewire:media-library wire:model="documents" />
    <x-slot name="buttons">
        <button class="btn btn-sm btn-success" type="submit">
            {{ __('Upload') }}
        </button>
        <button class="btn btn-sm btn-primary" type="button" wire:modal="close" >
            {{ __('Cancel') }}
        </button>
    </x-slot>
</x-wire-elements-pro::bootstrap.modal>
