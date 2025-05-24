@extends('layouts.admin-panel')

@section('title', 'Admin Panel')

@push('styles')
    @vite('resources/css/admin.css')
@endpush

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h4 class="text-2xl font-semibold mb-4 title">Welcome to the Admin Panel.</h4>
        <p>Here you can manage your admin panel data.</p>
    </div>
    
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
@endsection

@push('scripts')
    @vite('resources/js/admin.js')
    <script>
        console.log('Admin panel page JS loaded!');
    </script>
@endpush
