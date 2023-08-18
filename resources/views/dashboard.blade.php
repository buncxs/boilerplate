@php
    
    $html_tag_data = [];
    $title = 'Default Dashboard';
    $description = 'Home screen that contains stats, charts, call to action buttons and various listing elements.';
    $breadcrumbs = ['/' => 'Home'];
    
@endphp

<x-app-layout :html_tag_data="$html_tag_data" :title="$title" :description="$description" :breadcrumbs="$breadcrumbs">

    @push('css')
    @endpush

    @push('js_vendor')
    @endpush

    @push('js_page')
    @endpush
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('layouts.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <h2 class="small-title">Content Title</h2>
        <div class="card mb-5">
            <div class="card-body h-100">Content</div>
        </div>
        <!-- Content End -->
    </div>

</x-app-layout>
