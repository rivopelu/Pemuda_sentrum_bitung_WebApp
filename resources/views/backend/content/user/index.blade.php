@extends('../../../backend')

@section('main')
    <div class="card mb-3 p-3 border-bottom shadow d-flex">
        <h3>Daftar Anggota</h3>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 shadow-0">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-secondary" href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-secondary active" aria-current="page">Users</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users Table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                        User
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Detail</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kolom</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ $user->avatar }}" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->username }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $user->name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="bi bi-check-circle-fill text-success"></i>
                                            {{-- <i class="bi bi-x-circle-fill text-danger"></i> --}}
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $user->noTelp }}</p>
                                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                            <p class="text-xs text-secondary mb-0">{{ $user->alamat }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{-- <span class="badge badge-sm bg-gradient-success">Anggota</span> --}}
                                            <span class="badge badge-sm bg-gradient-secondary">5</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{-- <span class="badge badge-sm bg-gradient-success">Anggota</span> --}}
                                            <span class="badge badge-sm bg-gradient-warning">Komisi</span>
                                        </td>

                                        <td class="align-middle">
                                            <button type="button"  class="text-secondary border-0 bg-transparent font-weight-bold text-xs"
                                            data-bs-toggle="modal" data-bs-target="#{{ $user->slug}}">
                                                Lihat
                                            </button>
                                        </td>
                                    </tr>
                                    @include('backend.content.user.modalUser')
                                @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
 


    
    


@endsection
