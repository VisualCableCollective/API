@auth
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="fixed z-20 inset-0 overflow-y-auto hidden modal" id="my-account-modal-wrapper">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!--
              Background overlay, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 transition-opacity ease-out duration-300 modal-bg onclick-close-modal opacity-0"
                 data-modal="#my-account-modal" id="my-account-modal-bg" aria-hidden="true">
                <div class="absolute inset-0 bg-black opacity-75"></div>
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div
                class="inline-block align-bottom bg-dark-5 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95 ease-out duration-300"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline" id="my-account-modal">
                <div class="pb-8 pt-4">
                    <div class="sm:flex sm:items-start">
                        <div class="text-center">
                            <div
                                class="px-4 text-white flex items-center align-items-between pb-2 border-b-2 border-dark-3 border-opacity-100">
                                <h3 class="text-3xl font-bold pr-6" id="modal-headline">
                                    My Account
                                </h3>
                                <button type="button"
                                        class="ml-8 onclick-close-modal text-gray-300 hover:text-white transition-colors ease-out duration-200"
                                        data-modal="#my-account-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" class="h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-2 px-4">
                                @if (auth()->user()->canAccessInternalPanel())
                                    <a class="text-gray-300 text-lg hover:text-white transition-colors ease-out duration-200 flex items-center"
                                       href="{{route('internal.dashboard')}}">
                                        <i class="fa-solid fa-screwdriver-wrench fa-sm mr-4"></i>
                                        Administration
                                    </a>
                                @endif
                                <a class="text-gray-300 text-lg hover:text-white transition-colors ease-out duration-200 flex items-center"
                                   href="{{route('user.settings')}}">
                                    <i class="fa-solid fa-gear fa-sm mr-4"></i>
                                    Settings
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="text-gray-300 text-lg hover:text-white transition-colors ease-out duration-200 flex items-center"
                                       href="{{route('logout')}}"
                                       onclick="event.preventDefault();this.closest('form').submit();">
                                        <i class="fa-solid fa-right-from-bracket fa-sm mr-4"></i>
                                        Sign Out
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endauth
<nav class="navbar-main fixed w-full z-10">
    <div class="flex justify-between mx-auto max-w-screen-md py-2 items-center">
        <a href="{{url('/')}}">
            <img src="/img/branding/vcc/logo-transparent.png" alt="VTCM logo" class="h-8">
        </a>
        <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex"
           href="/#products">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 class="h-5 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
            </svg>
            Dashboard</a>
        <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex"
           href="{{route('internal.user.index')}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 class="h-5 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
            </svg>
            Users</a>
        <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex"
           href="/#products">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 class="h-5 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
            </svg>
            Roles</a>
        <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex"
           href="{{route('internal.handoff_token.index')}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
            </svg>
            Service Tools</a>
        @auth
            <button role="button"
                    class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex items-center modal-toggler"
                    data-target="#my-account-modal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="inline h-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{auth()->user()->first_name}} {{auth()->user()->last_name}}
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        @endauth
    </div>
</nav>
