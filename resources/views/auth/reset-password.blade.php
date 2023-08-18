@php
    $title = 'Reset Password Page';
    $description = 'Reset Password Page';
@endphp

<x-guest-layout :title="$title" :description="$description">

    @push('css')
    @endpush

    @push('js_vendor')
        <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
        <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script>
    @endpush

    @push('js_page')
        <script src="/js/pages/auth.resetpassword.js"></script>
    @endpush

    <x-slot name="content_left">
        <div class="min-h-100 d-flex align-items-center">
            <div class="w-100 w-lg-75 w-xxl-50">
                <div>
                    <div class="mb-5">
                        <h1 class="display-3 text-white">Multiple Niches</h1>
                        <h1 class="display-3 text-white">Ready for Your Project</h1>
                    </div>
                    <p class="h6 text-white lh-1-5 mb-5">
                        Dynamically target high-payoff intellectual capital for customized technologies. Objectively
                        integrate emerging core competencies before
                        process-centric communities...
                    </p>
                    <div class="mb-5">
                        <a class="btn btn-lg btn-outline-white" href="/">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="content_right">
        <div
            class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
            <div class="sw-lg-50 px-5">
                <div class="sh-11">
                    <a href="/">
                        <div class="logo-default"></div>
                    </a>
                </div>
                <div class="mb-5">
                    <h2 class="cta-1 mb-0 text-primary">Reset Password</h2>
                </div>
                <div>
                    <form method="POST" action="{{ route('password.store') }}" id="resetForm">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-acorn-icon="email"></i>
                            <input class="form-control" placeholder="Email" name="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-acorn-icon="lock-off"></i>
                            <input class="form-control" id="password" name="password" type="password"
                                placeholder="Password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-acorn-icon="lock-off"></i>
                            <input class="form-control" name="password_confirmation" type="password"
                                placeholder="Password Confirmation" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>

