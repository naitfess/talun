@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.lembaga-desa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Lembaga Desa</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-wrap gap-5">
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label mb-3">Gambar Utama</label>
                                    <div>
                                        <style>.image-input-placeholder { background-image: url('{{ asset('metronic') }}/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset('metronic') }}/media/svg/files/blank-image-dark.svg'); }</style>
                                        <!--end::Image input placeholder-->
                                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-200px h-200px"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                            @enderror
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Nama Lembaga Desa</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nama Lembaga Desa" value="{{ old('name') }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('name')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Deskripsi</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                {{-- <div class="min-h-200px mb-2" id="tinymce1"></div> --}}
                                <textarea id="tinymce1" name="content" class="tox-target">{{ old('content') }}</textarea>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                @error('content')
                                <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7 mt-2">Set a description to the product for better visibility.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->
            </div>
            <!--end::Tab pane-->
        </div>
        <!--end::Tab content-->
        <div class="d-flex justify-content-end mb-5">
            <!--begin::Button-->
            <a href="{{ route('admin.lembaga-desa.index') }}" class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
            </button>
            <!--end::Button-->
        </div>
    </div>
    <!--end::Main column-->
</form>
<!--end::Form-->

@endsection
@section('scripts')
<script src="{{ asset('common') }}/vendor/tinymce/tinymce.min.js"></script>
<script src="{{ asset('common') }}/js/tinymce.js"></script>
{{-- <script src="{{ asset('metronic') }}/js/custom/apps/ecommerce/catalog/save-product.js"></script> --}}
@endsection