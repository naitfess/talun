@extends('layouts.be-layout')
@section('content')
<!--begin::Card-->
@include('inc.alert')
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header mt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1 me-5">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <form action="{{ route('admin.lembaga-desa.index') }}" method="GET">
                    <input type="text" class="form-control form-control-solid w-250px ps-13" placeholder="Cari Lembaga Desa" name="search" value="{{ request('search') }}"/>
                </form>
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <button type="button" class="btn btn-light-primary" onclick="window.location.href='{{ route('admin.lembaga-desa.create') }}'">
                <i class="ki-duotone ki-plus-square fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>Tambah Lembaga Desa
            </button>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
            <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">Nama Lembaga Desa</th>
                    <th class="text-end min-w-100px">Aksi</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                @foreach ($villageInstitutions as $villageInstitution)
                <tr>
                    <td>{{ $villageInstitution->name }}</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-0" onclick="window.location.href='{{ route('admin.lembaga-desa.edit',['id' => $villageInstitution->id]) }}'">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px delete-btn" data-bs-toggle="modal" data-bs-target="#delete-modal" data-id="{{ $villageInstitution->id }}">
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
                @if($villageInstitutions->isEmpty())
                <tr>
                    <td colspan="3" class="text-center text-muted fs-6 fw-semibold">Belum ada data yang tersedia</td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="mt-7">
            {{ $villageInstitutions->links('pagination::bootstrap-5') }}
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@endsection
@section('scripts')
<script>
    $('.delete-btn').on('click', function() {
        var id = $(this).data('id');
        var url = '{{ route("admin.lembaga-desa.destroy", ":id") }}';
        url = url.replace(':id', id);
        $('#delete-form').attr('action', url);
    });
</script>
@endsection
