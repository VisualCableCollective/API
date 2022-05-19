<footer class="w-full bg-dark-3 text-white" style="min-height: 50vh;">
    <div class="mx-auto xl:max-w-6xl pt-12">
        <div class="flex flex-wrap justify-between px-6">
            <div>
                <h1 class="text-xl font-bold pb-3">Services & Products</h1>
                <ul>
                    <li class="my-1">
                        <a href="https://vtcmanager.eu/" class="text-gray-300 hover:text-white">VTCManager</a>
                    </li>
                    {{-- <li class="my-1">
                        <a href="" class="text-gray-300 hover:text-white">VCC Cloud</a>
                    </li> --}}
                </ul>
            </div>
            <div class="block">
                <h1 class="text-xl font-bold pb-3">Information</h1>
                <ul>
                    {{-- <li class="my-1">
                        <a href="" class="text-gray-300 hover:text-white">Help & Support</a>
                    </li> --}}
                    <li class="my-1">
                        <a href="https://status.vcc-online.eu/" class="text-gray-300 hover:text-white">Service Status</a>
                    </li>
                    <li class="my-1">
                        <a href="{{route('legal.terms-of-service')}}" class="text-gray-300 hover:text-white">Terms of Use</a>
                    </li>
                    <li class="my-1">
                        <a href="{{route('legal.privacy-policy')}}" class="text-gray-300 hover:text-white">Privacy Policy</a>
                    </li>
                    <li class="my-1">
                        <a href="{{route('legal.legal-disclosure')}}" class="text-gray-300 hover:text-white">Legal Disclosure</a>
                    </li>
                </ul>
            </div>
            {{--<div>
                <h1 class="text-xl font-bold pb-3">About VCC</h1>
                <ul>
                    <li class="my-1">
                        <a href="" class="text-gray-300 hover:text-white">About us</a>
                    </li>
                    <li class="my-1">
                        <a href="" class="text-gray-300 hover:text-white">Team</a>
                    </li>
                    <li class="my-1">
                        <a href="" class="text-gray-300 hover:text-white">Jobs</a>
                    </li>
                    <li class="my-1">
                        <a href="" class="text-gray-300 hover:text-white">Newsroom</a>
                    </li>
                    <li class="my-1">
                        <a href="" class="text-gray-300 hover:text-white">Branding</a>
                    </li>
                </ul>
            </div>--}}
        </div>
        <hr class="border-dark-1 my-8">
        <p class="text-center text-gray-300 px-6">Copyright ©2020 | Made With ❤️ and ☕ by The VisualCable Collective</p>
        <div class="flex items-center justify-center pt-5 pb-5">
            <a href="{{route('redirect.instagram')}}" class="text-gray-300 hover:text-white px-2"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="{{route('redirect.twitter')}}" class="text-gray-300 hover:text-white px-2"><i class="fab fa-twitter fa-2x"></i></a>
            {{--<a href="" class="text-gray-300 hover:text-white px-2"><i class="fab fa-youtube fa-2x"></i></a>--}}
            <a href="{{route('redirect.discord')}}" class="text-gray-300 hover:text-white px-2"><i class="fab fa-discord fa-2x"></i></a>
        </div>
    </div>
</footer>
