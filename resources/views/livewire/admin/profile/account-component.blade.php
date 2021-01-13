<x-form-card>
    <x-slot name="title">
       Profile
    </x-slot>
    <x-slot name="info">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis pariatur temporibus rem voluptatem debitis repudiandae voluptate eum velit! Molestias dicta velit tempore voluptates qui magnam voluptatem modi beatae earum quibusdam.
     </x-slot>
    {!! Form::model($data) !!}
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 space-y-6 bg-white dark:bg-gray-900 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company_website" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                  Website
                </label>
                <div class="flex mt-1 rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 text-sm text-gray-500 border-r-0 border-gray-300 borkder dar:text-gray-100 rounded-l-md bg-gray-50 dark:bg-gray-800">
                    http://
                  </span>
                  <input type="text" name="company_website" id="company_website" class="bg-white-input-group-theme md:text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray" placeholder="www.example.com">
                </div>
              </div>
            </div>

            <div>
              <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                About
              </label>
              <div class="mt-1">
                <textarea id="description" name="description" rows="3" class="bg-white-input-theme dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray sm:text-sm" placeholder="you@example.com"></textarea>
              </div>
              <p class="mt-2 text-sm text-gray-500 dark:text-gray-100">
                Brief description for your profile. URLs are hyperlinked.
              </p>
            </div>

           <x-form.photo :value="$data->profile_photo_url">{{ _('Photo') }} </x-form.photo>

           <x-form.cover>{{ _('Cover Photo') }} </x-form.cover>
          </div>
          <div class="px-4 py-3 text-right bg-gray-50 dark:bg-gray-800 sm:px-6">
            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      {!! Form::close() !!}
</x-form-card>
<x-slot name="js">
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/form-init.js')}}"></script>
</x-slot>
