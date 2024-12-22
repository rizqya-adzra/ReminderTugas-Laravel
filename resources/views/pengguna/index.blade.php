@extends('templates.app', ['title' => 'Dashboard'])

@section('contents')
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">Mailchimp</h6> <span>1 days ago</span>
                        </div>
                    </div>
                    <div class="badge d-flex flex-wrap">
                         <span>Design</span>
                         <span>Design</span>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
                    <div class="mt-5">
                        <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="icon-container">
    <a id="add-card-btn" href="{{ route('pengguna.create') }}">
        <i class="bi bi-calendar-plus"></i>
        <span>Tambah Card</span>
    </a>
    <a id="view-message-btn" >
        <i class="bi bi-envelope"></i>
        <span>Lihat Pesan</span>
    </a>
</div>

@endsection