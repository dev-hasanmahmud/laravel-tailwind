@extends('layouts.website')

@section('title', 'Website')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h4 class="text-2xl font-semibold mb-4">Welcome to the Website.</h4>
        <p>Here you can manage your website data.</p>
    </div>
@endsection

@push('styles')
    @vite('resources/css/web.css')
@endpush

@push('scripts')
    @vite('resources/js/web.js')
    <script>
        console.log('Web page JS loaded!');
    </script>
@endpush
