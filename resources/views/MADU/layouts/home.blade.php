@extends('MADU.layouts.app')

@section('home')
<main>
    <div class="min-h-full">
        @include('MADU.layouts.userAuth.navbar')
        @include('MADU.layouts.userAuth.header')
        <div class="mx-auto w-full px-6 py-8 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </div>
</main>
@endsection