@extends('layouts.admin-panel')

@section('title', 'Admin Panel')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h4 class="text-2xl font-semibold mb-4">Welcome to the Admin Panel.</h4>
        <p>Here you can manage your admin panel data.</p>
    </div>
@endsection

@push('styles')
    @vite('resources/css/admin.css')
@endpush

@push('scripts')
    @vite('resources/js/admin.js')
    <script>
        console.log('Admin panel page JS loaded!');
    </script>
@endpush
