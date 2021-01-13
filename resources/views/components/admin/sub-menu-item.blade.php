@props(['route'])
<li {{ $attributes->merge(['class' => 'w-full text-xl px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200']) }}>
  <a class="w-full"  
    @if (Route::has($route))
        href="{{ route($route) }}"
    @else
        href="{{ url($route) }}"
    @endif>{{ $slot }}</a>
</li>