@extends('layouts.be-layout')
@section('content')
@include('inc.alert')
<!--begin::Products-->
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
                <form action="{{ route('admin.perangkat-desa.index') }}" method="GET">
                    <input type="text" name="search" class="form-control form-control-solid w-300px ps-12" placeholder="Cari Perangkat Desa atau Posisi" value="{{ request()->search }}"/>
                </form>
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Add product-->
            <button type="button" class="btn btn-light-primary" onclick="window.location.href='{{ route('admin.perangkat-desa.create') }}'">
                <i class="ki-duotone ki-plus-square fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>Tambah Perangkat Desa
            </button> 
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0 table-responsive">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
            <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-75px">Nama</th>
                    <th class="text-start min-w-100px">Posisi</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                @foreach ($villageOfficials as $villageOfficial)
                <tr>
                    <td>
                        <a class="text-gray-800">{{ $villageOfficial->name }}</a>
                    </td>
                    <td class="text-start">
                        <span class="">{{ $villageOfficial->position->name }}</span>
                    </td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="{{ route('admin.perangkat-desa.edit', ['id' => $villageOfficial->id]) }}" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 delete-btn" data-bs-toggle="modal" data-bs-target="#delete-modal" data-id="{{ $villageOfficial->id }}">
                                <a class="menu-link px-3">Hapus</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                @endforeach
                @if($villageOfficials->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted fs-6 fw-semibold">Belum ada data yang tersedia</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <!--end::Table-->
        <div class="mt-7">
            {{ $villageOfficials->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->

@endsection
@section('scripts')
<script>
    $('.delete-btn').on('click', function() {
        var id = $(this).data('id');
        var url = '{{ route("admin.perangkat-desa.destroy", ":id") }}';
        url = url.replace(':id', id);
        $('#delete-form').attr('action', url);
    });
</script>
@endsection
