@extends('MADU.layouts.app')
@section('guest')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('MADU.layouts.userGuest.navlog')
            </div>
        </div>
    </div>
    @yield('content')
    @include('MADU.layouts.userGuest.footerlog')
@endsection
