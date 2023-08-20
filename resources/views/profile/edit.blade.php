@php
    $html_tag_data = ['override' => '{"attributes" : { "layout": "boxed" }}'];
    $title = 'Settings Profile';
    $heading = 'Profile';
    $description = 'Settings Profile Page';
    $breadcrumbs = ['/' => 'Home'];
@endphp

<x-app-layout :html_tag_data="$html_tag_data" :title="$title" :heading="$heading" :description="$description" :breadcrumbs="$breadcrumbs">

    @push('css')
    @endpush

    @push('js_vendor')
        <script src="/js/cs/scrollspy.js"></script>
        <script src="/js/vendor/dropzone.min.js"></script>
        <script src="/js/vendor/singleimageupload.js"></script>
        <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
        <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script>
    @endpush

    @push('js_page')
        <script src="/js/cs/dropzone.templates.js"></script>
        <script src="/js/forms/controls.dropzone.js"></script>
        <script src="/js/pages/auth.editprofile.js"></script>
    @endpush

    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col">
                            <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                            @include('layouts.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                        </div>
                        <!-- Title End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Profile Info Start -->
                @include('profile.partials.update-profile-information-form')
                <!-- Profile Info End -->

                <!-- Password Start -->
                @include('profile.partials.update-password-form')
                <!-- Contact End -->
            </div>
        </div>
    </div>

    <!-- Toaster -->
    <x-toaster />
    <!-- Toaster End -->
    
</x-app-layout>
