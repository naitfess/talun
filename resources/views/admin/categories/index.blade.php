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
                <form action="{{ route('admin.kategori.index') }}" method="GET">
                    <input type="text" name="search" class="form-control form-control-solid w-250px ps-13" placeholder="Cari Kategori" value="{{ request()->search }}"/>
                </form>
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Button-->
            <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#add_category_modal">
                <i class="ki-duotone ki-plus-square fs-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>Tambah Kategori</button>
                <!--end::Button-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Kategori</th>
                        <th class="text-end min-w-100px">Aksi</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($categories as $category)    
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td class="text-end">
                            <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-0" data-bs-toggle="modal" data-bs-target="#edit_category_modal" data-slug="{{ $category->slug }}" data-name="{{ $category->name }}">
                                <i class="ki-duotone ki-setting-3 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <button class="btn btn-icon btn-active-light-primary w-30px h-30px delete-btn" data-slug="{{ $category->slug }}" data-bs-toggle="modal" data-bs-target="#delete-modal">
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
                    @if($categories->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted fs-6 fw-semibold">Belum ada data yang tersedia</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
    <!--begin::Modals-->
    <!--begin::Modal - Add permissions-->
    <div class="modal fade" id="add_category_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Tambah Kategori</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="add_category_modal_form" class="form" action="{{ route('admin.kategori.store') }}" method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Nama Kategori</span>
                                <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="Nama Kategori" name="name" required/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-end pt-3">
                            <button class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Simpan</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add permissions-->
    <!--begin::Modal - Update permissions-->
    <div class="modal fade" id="edit_category_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Edit Kategori</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-permissions-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="edit_category_modal_form" class="form" action="{{ route('admin.kategori.update', ['slug' => ':slug']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="">Nama Kategori</span>
                                <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="Nama Kategori" name="name" required/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-end pt-3">
                            <button class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Simpan</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Update permissions-->
    <!--end::Modals-->
    @endsection
    @section('scripts')
    <script>
        $('.delete-btn').on('click', function() {
            var slug = $(this).data('slug');
            var url = '{{ route("admin.kategori.destroy", ":slug") }}';
            url = url.replace(':slug', slug);
            $('#delete-form').attr('action', url);
        });

        $('#edit_category_modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var slug = button.data('slug');
            var name = button.data('name');
            var modal = $(this);
            modal.find('.modal-body input[name="name"]').val(name);
            var actionUrl = '{{ route("admin.kategori.update", ":slug") }}';
            actionUrl = actionUrl.replace(':slug', slug);
            modal.find('#edit_category_modal_form').attr('action', actionUrl);
        });
    </script>
    @endsection