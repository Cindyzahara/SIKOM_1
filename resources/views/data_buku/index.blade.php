@extends('_template_back.layout')
<title>Data Buku</title>
@section('content')

		<!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div>
                <h4 class="content-title mb-2">Hi, welcome back!</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a   href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Basic Tables</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /breadcrumb -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex my-auto btn-list justify-content-end">            
                            <a href="{{ route('buku.create')}}" class="btn btn-primary">Tambah Data</a>
                            {{-- @if (auth()->user()->role == 'petugas') --}}
                            <a href="{{ route('export_excel_buku')}}" class="btn btn-success">Export Excel</a>
                            <a href="{{ route('export_pdf_buku') }}" class="btn btn-danger">Export PDF</a>
                            {{-- @elseif (auth()->user()->role == 'administrator') --}}
                            <a href="{{ route('export_pdf_buku') }}" class="btn btn-danger">Export PDF</a>
                            {{-- @endif --}}
                            <a class="modal-effect btn btn-dark" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8">Import Excel</a>
                        </div>
                        @include('_component.pesan') 
                    </div>
                    <div class="card-body mt-3">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                    <th width="20px">No</th>
                                    <th style="text-align:center">Judul</th>
                                    <th style="text-align:center">Penulis</th>
                                    <th style="text-align:center">Penerbit</th>
                                    <th style="text-align:center">Tahun Terbit</th>
                                    <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buku as $dt)
                                    <tr>
                                        <td style="text-align:center">{{ $loop->iteration }}</td>
                                        <td style="text-align:center">{{ $dt->judul}}</td>
                                        <td style="text-align:center">{{ $dt->penulis}}</td>
                                        <td style="text-align:center">{{ $dt->penerbit}}</td>
                                        <td style="text-align:center">{{ $dt->tahun_terbit}}</td>
                                       <td>
                                            <a href="{{ route('buku.edit', $dt->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini')" action="{{ route('buku.destroy', $dt->id) }}" method="post" class="d-inline">
                                            @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->

            {{-- untuk menguhubungkan index dengan modal import --}}
            @include('data_buku.modal_import')
    
@endsection