{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
<div class="col-span-6">
    <label for="{{ $field->name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
        {{ $field->label }}
    </label>
    <div class="flex items-center mt-2">
        @if(is_array($form_data[$field->name]))
            @foreach($form_data[$field->name] as $key => $value)
                <span class="inline-block w-24 h-24 overflow-hidden bg-gray-100 rounded-full">
                    <img id="picture" src="{{ Storage::url($value['file']) }}" alt="{{ _('Change select image')}}">
                </span>
            @endforeach
        @else
            <span class="inline-block w-24 h-24 overflow-hidden bg-gray-100 rounded-full">
                <img id="picture" src="{{$form_data[$field->name]}}" alt="{{ _('Change select image')}}">
            </span>
        @endif
       <div>
           <label
               class="px-5 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white rounded-md shadow-sm  cursor-pointer border dark:text-gray-100 hover:bg-gray-50 dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 @error($field->key) is-invalid @enderror">
               <input
                   id="{{ $field->name }}"
                   type="file"
                   class="sr-only"
                   {{ $field->file_multiple ? 'multiple' : '' }}>
               <svg class="h-6 w-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
               </svg>
               Change
           </label>
           @if(!is_array($form_data[$field->name]))
             <button class="btn btn-red ml-2 rounded-full" wire:click="deleteUploadUrl('{{$field->name}}')" >{{ _("Delete poto") }}</button>
           @endif
       </div>
        <span class="custom-file-label" for="{{ $field->name }}">
            {{ $field->placeholder }}
        </span>
    </div>
    @include('laravel-livewire-forms::fields.error-help')
</div>
