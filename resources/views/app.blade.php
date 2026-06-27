@extends('main')

@section('body')

    @include('Layouts.header')

        <main class="bg-gray-100 text-gray-800">
            @yield('content')
        </main>

    @include('Layouts.footer')

@endsection