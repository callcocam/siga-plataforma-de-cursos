{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
<div class="col-span-6">
    <label for="{{ $field->name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
        {{ $field->label }}
    </label>
    <input
        id="{{ $field->name }}"
        type="{{ $field->input_type }}"
        class="bg-white-input-theme dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray sm:text-sm @error($field->key) is-invalid @enderror"
        autocomplete="{{ $field->autocomplete }}"
        placeholder="{{ $field->placeholder }}"
        wire:model.lazy="{{ $field->key }}">
    @include('laravel-livewire-forms::fields.error-help')
</div>
