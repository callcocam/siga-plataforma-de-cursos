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
                <div class="col-span-6 sm:col-span-3">
                    {!! form_row($form->name) !!}
                </div>
                <div class="col-span-6 sm:col-span-3">
                    {!! form_row($form->email) !!}
                </div>
                <div class="col-span-6 sm:col-span-3">
                    {!! form_row($form->password) !!}
                </div>
                <div class="col-span-6 sm:col-span-3">
                    {!! form_row($form->password_confirmation) !!}
                </div>

                <div class="col-span-6 hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
                <viv class="col-span-6">
                    {!! form_row($form->profile_photo_url) !!}
                </viv>
                <div class="col-span-6">
                    {!! form_row($form->description) !!}
                </div>
                <div class="col-span-6">
                    {!! form_row($form->status) !!}
                </div>
            </div>
        </div>
        <div class="px-4 py-3 text-right bg-gray-50 dark:bg-gray-800 sm:px-6">
            {!! form_row($form->submit) !!}
        </div>
    </div>
</x-form-card>
<x-slot name="js">
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/form-init.js')}}"></script>
</x-slot>
