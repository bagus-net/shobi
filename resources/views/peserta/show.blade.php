@extends('layouts.master')
@section('title')
    @lang('Detail Peserta')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')  Peserta @endslot
        @slot('title') Detail Peserta @endslot
    @endcomponent

    <div class="row mb-4">
        <div class="col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="text-center">
                        <div class="dropdown float-end">
                            <a class="text-body dropdown-toggle font-size-18" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true"> 
                                 <i class="uil uil-ellipsis-v"></i>
                            </a>

                            {{-- <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div> --}}
                        </div>
                        <div class="clearfix"></div>
                        <div>
                            <img src="{{ Storage::url($registration->pas_foto_path) }}" alt=""
                                class="avatar-lg rounded-circle img-thumbnail" style="width: 150px; height: 150px;">
                        </div>
                        {{-- <h5 class="mt-3 mb-1">{{ $registration->nama_lengkap ?? '-' }}</h5>
                        <p class="text-muted">{{ $registration->asal_sekolah ?? '-' }}</p> --}}

                    </div>

                    <hr class="my-4">

                    <div class="text-muted">
                        {{-- <h5 class="font-size-16">About</h5>
                        <p>Hi I'm Marcus,has been the industry's standard dummy text To an English person, it will seem like
                            simplified English, as a skeptical Cambridge.</p> --}}
                        <div class="table-responsive mt-4">
                            <div>
                                <p class="mb-1">Name :</p>
                                <h5 class="font-size-16">{{ $registration->nama_lengkap ?? '-' }}</h5>
                            </div>
                            <div>
                                <p class="mb-1">Sekolah :</p>
                                <h5 class="font-size-16">{{ $registration->asal_sekolah ?? '-' }}</h5>
                            </div>
                            <div class="mt-4">
                                <p class="mb-1">No WA :</p>
                                <h5 class="font-size-16">{{ $registration->nomor_whatsapp ?? '-' }}</h5>
                            </div>
                            <div class="mt-4">
                                <p class="mb-1">E-mail :</p>
                                <h5 class="font-size-16">{{ $registration->email ?? '-' }}</h5>
                            </div>
                            <div class="mt-4">
                                <p class="mb-1">Lomba yg Diikuti :</p>
                                <h5 class="font-size-16">{{ $registration->lomba ?? '-' }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card mb-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                            <i class="uil uil-user-circle font-size-20"></i>
                            <span class="d-none d-sm-block">Data yg Diupload</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                            <i class="uil uil-clipboard-notes font-size-20"></i>
                            <span class="d-none d-sm-block">Tasks</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                            <i class="uil uil-envelope-alt font-size-20"></i>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li> --}}
                </ul>
                <!-- Tab content -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="about" role="tabpanel">
                        <div>
                            <div>
                                <h5 class="font-size-16 mb-4">Persyaratan</h5>

                                <ul class="activity-feed mb-0 ps-2">

                                    <li class="feed-item">
                                <div class="feed-item-list">
                                    <h5 class="font-size-16">Pas Foto</h5>
                                    <p>Silahkan Download</p>
                                    
                                    @if($registration->pas_foto_path)
                                        <div style="margin-bottom: 15px;">
                                            <img src="{{ Storage::url($registration->pas_foto_path) }}" alt="Bukti Follow" class="img-fluid" style="max-width: 300px; height: auto;">
                                        </div>
                                        <a href="{{ Storage::url($registration->pas_foto_path) }}" class="btn btn-primary" download>Unduh Pas Foto</a>
                                    @else
                                        <p class="text-muted">Tidak ada Pas Foto yang diunggah.</p>
                                    @endif
                                </div>
                            </li>
                                   <li class="feed-item">
                                    <div class="feed-item-list">
                                        <h5 class="font-size-16">SCAN Kartu Pelajar</h5>
                                        <p>Silahkan Download</p>
                                        @if($registration->scan_kartu_pelajar_path)
                                            <a href="{{ Storage::url($registration->scan_kartu_pelajar_path) }}" class="btn btn-primary" download>Unduh PDF Kartu Pelajar</a>
                                        @else
                                            <p class="text-muted">Tidak ada kartu pelajar yang diunggah.</p>
                                        @endif
                                    </div>
                                </li>

                                <li class="feed-item">
                                <div class="feed-item-list">
                                    <h5 class="font-size-16">Bukti Follow</h5>
                                    <p>Silahkan Download</p>
                                    
                                    @if($registration->bukti_follow_path)
                                        <div style="margin-bottom: 15px;">
                                            <img src="{{ Storage::url($registration->bukti_follow_path) }}" alt="Bukti Follow" class="img-fluid" style="max-width: 300px; height: auto;">
                                        </div>
                                        <a href="{{ Storage::url($registration->bukti_follow_path) }}" class="btn btn-primary" download>Unduh Bukti Follow</a>
                                    @else
                                        <p class="text-muted">Tidak ada bukti follow yang diunggah.</p>
                                    @endif
                                </div>
                            </li>

                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <h5 class="font-size-16">Bukti Twibbon</h5>
                                    <p>Silahkan Download</p>
                                    
                                    @if($registration->bukti_posting_twibbon_path)
                                        <div style="margin-bottom: 15px;">
                                            <img src="{{ Storage::url($registration->bukti_posting_twibbon_path) }}" alt="Bukti Follow" class="img-fluid" style="max-width: 300px; height: auto;">
                                        </div>
                                        <a href="{{ Storage::url($registration->bukti_posting_twibbon_path) }}" class="btn btn-primary" download>Unduh Bukti Posting Twibbon</a>
                                    @else
                                        <p class="text-muted">Tidak ada bukti Posting Twibbon    yang diunggah.</p>
                                    @endif
                                </div>
                            </li>




                                </ul>
                            </div>

                            {{-- <div>
                                <h5 class="font-size-16 mb-4">Projects</h5>

                                <div class="table-responsive">
                                    <table class="table table-nowrap table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Projects</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td><a href="#" class="text-dark">Brand Logo Design</a></td>
                                                <td>
                                                    18 Jun, 2020
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-primary font-size-12">Open</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-18 px-2" href="#"
                                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="uil uil-ellipsis-v"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table> --}}
                            </div>
                        </div>
                    </div>
                    

                                </form>
                            </div> <!-- end .border-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
