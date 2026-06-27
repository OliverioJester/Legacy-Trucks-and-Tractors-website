@extends('app')

{{-- @section('title', '') --}}

@section('content')
    <div class="overflow-hidden">
<!-- ================= HERO ================= -->
        @include('components.hero')

<!-- ================= FEATURES ================= -->
        @include('components.features')

<!-- ================= PRODUCTS ================= -->
        @include('components.product_lists')

<!-- ================= SERVICES ================= -->   
        @include('components.services')

<!-- ================= CTA ================= -->
        @include('components.cta')
        
    </div>  
@endsection  