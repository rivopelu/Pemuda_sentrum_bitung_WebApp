@extends('../../backend')

@section('main')

    <div class="card mb-3 p-3 border-bottom shadow d-flex">
        <h3>Beranda Dashboad</h3>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 shadow-0">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-secondary" href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-secondary active" aria-current="page"></li>
        </ol>
    </div>
    @if (session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show py-4" role="alert">
            <strong>Succes</strong> {{ session('pesan') }}.
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"><i
                    class="bi bi-x-lg"></i></button>
        </div>
    @endif

    @error('name')
        <div class="alert alert-danger alert-dismissible fade show py-4 text-white" role="alert">
            <strong>Error</strong> {{ $message }}.
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"><i
                    class="bi bi-x-lg"></i></button>
        </div>
        
    @enderror`
    <div class="row">
        <div class="row mt-4">


            {{-- USERRR --}}
            @include('backend.content.dashboard.user')
            {{-- Carosel --}}
            @include('backend.content.dashboard.carosel')

        </div>



        {{-- category --}}
        @include('backend.content.dashboard.category')
        {{-- tag --}}
        @include('backend.content.dashboard.tag')




    @endsection
