<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
   <div class="container flex items-center justify-between h-full">
       <!-- Mobile hamburger -->
       <button arial-label="Menu"
       class="p-1 ml-1 mr-5 rounded-md md:hidden focus:outline-none focus-shadow-outline-purple"
       x-on:click="toggleSideMenu"
       aria-label="Menu">
        <svg
        class="w-6 h-6"
        aria-hidden="true"
        fill="currentColor"
        viewBox="0 0 20 20"
        >
        <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
        ></path>
        </svg>
       </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
                <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                    <div class="absolute inset-y-0 flex items-center pl-2">
                        <x-icons.search />
                    </div>
                    <input type="text" class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-500 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Digite o terno de busca" arial-label="Search">
                </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
                  <!-- Theme toggler -->
                  <li class="flex">
                      <button class="text-purple-500 rounded-md focus:outline-none focus:shadow-outline-purple"
                      x-on:click="toggleTheme">
                          <template x-if="!dark">
                              <x-icons.dark />
                          </template>
                          <template x-if="dark">
                              <x-icons.white />
                          </template>
                      </button>
                  </li>
                  @if (auth()->user()->notfications)
                  <!-- Notifications menu -->
                  <li class="relative">
                      <button class="relative text-purple-500 align-middle rounded-md focus:outline-none focus:shadow-outline-purble"
                        x-on:click="toggleNotificationsMenu"
                        x-on:keydown.escape="closeNotificationsMenu"
                        aria-label="Notifications"
                        aria-haspopup="true">
                        <x-icons.bell />
                         <!-- Notification badge -->
                         <span class="absolute top-0 inline-block w-3 h-3 transform translate-x-1 translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                      </button>
                      <template x-if="isNotificationsMenuOpen">
                          <ul
                          x-translation:leve="transition ease-in duration-150"
                          x-translation:leve-start="opacity-100"
                          x-translation:leve-end="opacity-0"
                          x-on:click.away="closeNotificationsMenu"
                          x-on:keydown.escape="closeNotificationsMenu"
                          class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                          @foreach (auth()->user()->notfications as $item)
                            <li class="flex">
                                <a href="" class="header-notifcation dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                    <span>{{ Str::limit( $item->name, 40) }}</span>
                                    {{-- <span class="header-notifcation-span dark:text-red-100 dark:bg-red-600">12</span> --}}
                                </a>
                            </li>
                          @endforeach
                          </ul>
                      </template>
                  </li>
                  @endif
                  <!-- Profile menu -->
                  <li class="relative">
                      <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                      x-on:click="toggleProfileMenu"
                      x-on:keydown.escape="closeProfileMenu"
                      arial-label="Account"
                      arial-haspopup="true">
                      <img
                      class="object-cover w-8 h-8 rounded-full"
                      src="{{ $user->profile_photo_url }}"
                      alt=""
                      aria-hidden="true"
                    />
                      </button>
                      <template x-if="isProfileMenuOpen">
                          <ul class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                               x-on:click.away="closeProfileMenu"
                               x-on:keydown.escape="closeProfileMenu"
                          aria-label="submenu">
                              <li class="flex">
                                <a href="" class="header-notifcation dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                    <x-icons.user class="mr-3 "></x-icons.user>
                                    <span>{{ _('Profile') }}</span>
                                </a>
                              </li>
                              <li class="flex">
                                <a href="" class="header-notifcation dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                    <x-icons.settings class="mr-3 "></x-icons.settings>
                                    <span>{{ _('Settings')}}</span>
                                </a>
                              </li>
                              <li class="flex">
                                <form class="flex flex-1"  method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();this.closest('form').submit();"
                                    class="header-notifcation dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                        <x-icons.logout class="mr-3 "></x-icons.logout>
                                        <span>{{ _('Logout')}}</span>
                                    </a>
                                </form>
                              </li>
                          </ul>
                      </template>
                  </li>
          </ul>
   </div>
</header>
