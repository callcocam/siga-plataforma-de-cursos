{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
<x-form-card>
    <x-slot name="title">
        Profile
    </x-slot>
    <x-slot name="info">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis pariatur temporibus rem voluptatem debitis
        repudiandae voluptate eum velit! Molestias dicta velit tempore voluptates qui magnam voluptatem modi beatae
        earum quibusdam.
    </x-slot>

    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 space-y-6 bg-white dark:bg-gray-900 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                @foreach($fields as $field)
                    @if($field->view)
                        @include($field->view)
                    @else
                        @include('laravel-livewire-forms::fields.' . $field->type)
                    @endif
                @endforeach
            </div>
        </div>
        <div class="px-4 py-3 text-right bg-gray-50 dark:bg-gray-800 sm:px-6">
            <button class="btn btn-red" wire:click="saveAndStay">{{ __('Save') }}</button>
            <button class="btn btn-blue" wire:click="saveAndGoBack">{{ __('Save & Go Back') }}</button>
        </div>
    </div>
</x-form-card>
@push('js')
    <script>
        // Code is inspired by Pastor Ryan Hayden
        // https://github.com/livewire/livewire/issues/106
        // Thank you, sir!
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('input[type="file"]').forEach(file => {
                file.addEventListener('input', event => {
                    let form_data = new FormData();
                    form_data.append('component', @json(get_class($this)));
                    form_data.append('field_name', file.id);
                    for (let i = 0; i < event.target.files.length; i++) {
                        form_data.append('files[]', event.target.files[i]);
                    }
                    axios.post('{{ route('laravel-livewire-forms.file-upload') }}', form_data, {
                        headers: {'Content-Type': 'multipart/form-data'}
                    }).then(response => {
                        window.livewire.emit('fileUpdate', response.data.field_name, response.data.uploaded_files);
                    });
                })
            });
        });
    </script>
@endpush
