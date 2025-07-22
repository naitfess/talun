@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!--begin::Aside column-->
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <!--begin::Thumbnail settings-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Gambar</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
                <!--begin::Image input-->
                <!--begin::Image input placeholder-->
                <style>.image-input-placeholder { background-image: url('{{ asset('metronic') }}/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset('metronic') }}/media/svg/files/blank-image-dark.svg'); }</style>
                <!--end::Image input placeholder-->
                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-200px h-200px"></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
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
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
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
                <!--end::Image input-->
                <!--begin::Description-->
                @error('image')
                <div class="text-danger fs-7">{{ $message }}</div>
                @else
                <div class="text-muted fs-7">Allowed file types: png, jpg, jpeg.</div>
                @enderror
                <!--end::Description-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
    <!--end::Aside column-->
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
                                <h2>Umum</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Judul</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" class="form-control mb-2" placeholder="Judul" value="{{ old('title') }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('title')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Judul wajib diisi dan disarankan untuk bersifat unik</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Subjudul</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="subtitle" class="form-control mb-2" placeholder="Subjudul" value="{{ old('subtitle') }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('subtitle')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Subjudul wajib diisi dan disarankan untuk bersifat unik</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('admin.slider.index') }}" class="btn btn-light btn-active-light-primary me-5">Batalkan</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
            </div>
            <!--end::Tab pane-->
        </div>
    </div>
</form>
@endsection