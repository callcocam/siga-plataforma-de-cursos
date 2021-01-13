@props(['value', 'class'=>'block text-sm font-medium text-gray-700 dark:text-gray-200'])
{!! Form::label(null, $value ?? $slot, [$options]) !!}
<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700 dark:text-gray-200']) }}>
    {{ $value ?? $slot }}
</label>
