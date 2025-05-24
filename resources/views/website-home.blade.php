@extends('layouts.website')

@section('title', 'Website')

@push('styles')
    @vite('resources/css/web.css')
@endpush

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h4 class="text-2xl font-semibold mb-4 title">Welcome to the Website.</h4>
        <p>Here you can manage your website data.</p>
    </div>
    
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
@endsection

@push('scripts')
    @vite('resources/js/web.js')
    <script>
        console.log('Web page JS loaded!');
    </script>
@endpush
