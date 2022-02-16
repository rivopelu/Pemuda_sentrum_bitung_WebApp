<div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
        <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize">Request Anggota Terbaru</h6>
            <p class="text-sm mb-0">
                <a href="/dashboard/users">
                    <i class="bi bi-people-fill text-success"></i>
                    <span class=""> Lihat Semua Daftar Anggota</span>
                </a>
            </p>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                User
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            </th>
                            
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status</th>

                            <th class="text-secondary opacity-7"></th>
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
                            
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>