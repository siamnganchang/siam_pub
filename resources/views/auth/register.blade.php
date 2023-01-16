



<x-guest-layout>
    <div class="p-4 block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
        <div class="block items-center mb-3 divide-x divide-gray-100 sm:flex sm:mb-0">
            <div class="flex justify-start items-center">
                <h3 class="mr-3 text-sm font-normal text-gray-500">Team members: </h3>
                
                <div id="michael-tooltip" role="tooltip"
                    class="inline-block absolute z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl transition-opacity duration-300 tooltip shadow-lg-sm opacity-0 invisible"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, -56px, 0px);"
                    data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                    Michael Gough
                    <div class="tooltip-arrow" data-popper-arrow=""
                        style="position: absolute; left: 0px; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow-lg">
                    <div class="">
                        <div class="">
                            <div class="p-4 mb-6 space-y-6 bg-gray-200 rounded-xl min-w-20">
                                    <div class="flex flex-col">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div class="py-6 px-6 lg:px-8">

                                                <x-jet-validation-errors class="mb-4" />

                                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign up</h3>
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                        
                                                    <div>
                                                        <x-jet-label for="name" value="{{ __('Name') }}" />
                                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                    </div>
                                        
                                                    <div class="mt-4">
                                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                                    </div>
                                        
                                                    <div class="mt-4">
                                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                                    </div>
                                        
                                                    <div class="mt-4">
                                                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                    </div>
                                        
                                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                        <div class="mt-4">
                                                            <x-jet-label for="terms">
                                                                <div class="flex items-center">
                                                                    <x-jet-checkbox name="terms" id="terms" required />
                                        
                                                                    <div class="ml-2">
                                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                        ]) !!}
                                                                    </div>
                                                                </div>
                                                            </x-jet-label>
                                                        </div>
                                                    @endif
                                        
                                                    <div class="flex items-center justify-end mt-4">
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                            {{ __('Already registered?') }}
                                                        </a>
                                        
                                                        <x-jet-button class="ml-4">
                                                            {{ __('Register') }}
                                                        </x-jet-button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>





  



</x-guest-layout>
