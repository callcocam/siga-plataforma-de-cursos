@props(['route','icon'=>null])
<li class="relative px-6 py-3">
  @if (request()->routeIs($route))
   <span class="nav-link-active" aria-hidden="true"></span>
  @endif   
    <a class="nav-link dark:hover:text-gray-200 dark:text-gray-100"
    @if (Route::has($route))
     href="{{ route($route) }}"
    @else
     href="{{ url($route) }}"
    @endif
      >
      @if ($icon)
        @include(sprintf('components.icons.%s', $icon))
      @endif
      {{-- {{ $svg }} --}}
      <span class="ml-4">{{ $slot }}</span>
    </a>
  </li>