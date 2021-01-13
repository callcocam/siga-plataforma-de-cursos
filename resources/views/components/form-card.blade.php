<div class="mt-4 dark:text-gray-400">
    <div class="lg:grid lg:grid-cols-3 md:gap-6">
      <div class="lg:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
          <p class="mt-1 text-sm text-gray-600">
            {{ $info }}
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 lg:col-span-2">
        {{ $slot }}
      </div>
    </div>
</div>