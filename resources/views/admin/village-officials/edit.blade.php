@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.perangkat-desa.update', ['id' => $villageOfficial->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
                <style>.image-input-placeholder { background-image: url('{{ asset('uploads') }}/{{ $villageOfficial->image }}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset('uploads') }}/{{ $villageOfficial->image }}'); }</style>
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
        <!--end::Thumbnail settings-->
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
                                <h2>Perangkat Desa</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Nama</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nama Perangkat Desa" value="{{ old('name') ?? $villageOfficial->name }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('name')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <div class="fv-row text-start">
                                <!--begin::Label-->
                                <label class="form-label">Posisi</label>
                                <!--end::Label-->
                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Pilih Posisi" name="position_id">
                                    <option></option>
                                    @foreach(\App\Helpers\AppHelper::getPositions() as $position)
                                    <option value="{{ $position->id }}" {{ $position->id == $villageOfficial->position_id ? 'selected' : '' }}>{{ $position->name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->
                                <!--begin::Description-->
                                @error('position_id')
                                <div class="text-danger fs-7 mb-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7 mb-7">Set the date of the order to process.</div>
                                @enderror
                                <!--end::Description-->
                                <a href="{{ route('admin.posisi.index') }}" class="btn btn-light-primary btn-sm">
                                    <i class="ki-duotone ki-plus fs-2"></i>Tambah Posisi Baru
                                </a>  
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                </div>
            </div>
            <!--end::Tab pane-->
        </div>
        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="{{ route('admin.perangkat-desa.index') }}" class="btn btn-light me-5">Batalkan</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </div>
</div>
</form>
@endsection