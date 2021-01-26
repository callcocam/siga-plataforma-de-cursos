@props(['value'])
<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">
      {{ $label ?? $slot }}
    </label>
    <div class="flex items-center mt-2">
      <span class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
       <img id="picture" src="{{ $value }}" alt="{{ _('Change select image')}}">
      </span>      
      <label class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white rounded-md shadow-sm cursor-pointer dark:bg-gray-900 border2gray-300 borader dark:text-gry-100 hover:bg-gray-50 dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        {{ _('Change select image')}}
        {!! Form::file('file', [
            'id'=>'photo',
            'name'=>'file',
            'class'=>'sr-only',
        ]) !!}
      </label>
    </div>
  </div>