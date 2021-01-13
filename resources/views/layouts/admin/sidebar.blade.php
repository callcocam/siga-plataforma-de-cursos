<div class="py-4 text-gray-500 dark:text-gray-400">
    <a href="" class="ml-6 text-lg font-bold text-gray-800">Windill</a>
    <ul class="mt-6">
       <x-admin.nav-link route="admin.dashboard" icon="dash">Dashboard</x-admin.nav-link>
    </ul>
    <ul>
       <x-admin.nav-link route="admin.about" icon="copy">About</x-admin.nav-link>
       <x-admin.sub-menu label="Security">
           <x-admin.sub-menu-item route="admin.about">Roles</x-admin.sub-menu-item>
           <x-admin.sub-menu-item route="admin.about">Permissions</x-admin.sub-menu-item>
           <x-admin.sub-menu-item route="admin.about">Users</x-admin.sub-menu-item>
       </x-admin.sub-menu>
        <x-admin.sub-menu label="Examples">
           <x-admin.sub-menu-item route="admin.forms">Forms</x-admin.sub-menu-item>
        </x-admin.sub-menu>
       <x-admin.nav-link :route="route('admin.profile',$model)" icon="user">Profile</x-admin.nav-link>

   </ul>
    <div class="px-6 my-6">
        <button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Create account
            <span class="ml-2" arial-hidden="true">+</span>
        </button>
    </div>
</div>
