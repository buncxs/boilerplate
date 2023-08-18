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
    @endpush

    @push('js_page')
        <script src="/js/cs/dropzone.templates.js"></script>
        <script src="/js/forms/controls.dropzone.js"></script>
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

                <!-- Public Info Start -->
                @include('profile.partials.update-profile-information-form')
                <!-- Public Info End -->

                <!-- Contact Start -->
                <h2 class="small-title">Password</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Primary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Secondary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="lisajackson@gmail.com" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="+6443884455" />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact End -->

                <!-- Jobs Start -->
                <h2 class="small-title">Delete</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Freelance</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <div class="form-check mt-2">
                                        <input type="checkbox" class="form-check-input" id="customCheck1" />
                                        <label class="form-check-label" for="customCheck1">I am available for
                                            hire</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Jobs End -->
            </div>
        </div>
    </div>

</x-app-layout>
