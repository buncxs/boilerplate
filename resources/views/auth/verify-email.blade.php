@php
    $title = 'Verify email address';
    $description = 'Verify email address';
@endphp

<x-guest-layout :title="$title" :description="$description">


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
                    <h2 class="cta-1 mb-0 text-primary">Verify Email</h2>
                </div>
                <div class="mb-5">
                    <p class="h6">Thanks for signing up! Before getting started, could you verify your email address
                        by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly
                        send you another.
                    </p>
                    @if (session('status') == 'verification-link-sent')
                        <div class="h6">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif
                </div>
                <div class="flex">
                    <form method="POST" action="{{ route('verification.send') }}" id="verifyEmailForm">
                        @csrf
                        <div>
                            <button type="submit" class="btn btn-lg btn-primary me-3">Resend Verification Email</button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                            <i data-acorn-icon="logout"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>

</x-guest-layout>
