@extends('landing.master')

@section('content')
<!--begin::Layout-->
<div class="d-flex flex-column flex-xl-row">
    @yield('content')
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
        <x-landing.recent-post />
    </div>
    <!--end::Sidebar-->
</div>
<!--end::Layout-->
@endsection