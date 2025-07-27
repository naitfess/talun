@extends('layouts.be-layout')
@section('content')
<!--begin::Products-->
@include('inc.alert')
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <form action="{{ route('admin.dukuh.index') }}">
                    <input type="text" name="search" class="form-control form-control-solid w-250px ps-12" placeholder="Cari Dukuh" value="{{ request('search') }}"/>
                </form>
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Add product-->
            <button type="button" class="btn btn-light-primary" onclick="window.location.href='{{ route('admin.dukuh.create') }}'">
                <i class="ki-duotone ki-plus-square fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>Tambah Dukuh
            </button> 
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0 table-responsive">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-75px">Nama Dukuh</th>
                    <th class="text-end min-w-100px">Aksi</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                @foreach ($subVillages as $subVillage)
                <tr>
                    <td>
                        <a class="text-gray-800 fs-5">{{ $subVillage->name }}</a>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-0" onclick="window.location.href='{{ route('admin.dukuh.edit', ['slug' => $subVillage->slug]) }}'">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px delete-btn" data-bs-toggle="modal" data-bs-target="#delete-modal" data-slug="{{ $subVillage->slug }}">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                @endforeach
                @if($subVillages->isEmpty())
                <tr>
                    <td colspan="2" class="text-center text-muted fs-6 fw-semibold">Belum ada data yang tersedia</td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="mt-7">
            {{ $subVillages->links() }}
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->
@endsection
@section('scripts')
<script>
    $('.delete-btn').on('click', function() {
        var slug = $(this).data('slug');
        var url = '{{ route("admin.dukuh.destroy", ":slug") }}';
        url = url.replace(':slug', slug);
        $('#delete-form').attr('action', url);
    });
</script>
@endsection
