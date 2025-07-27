@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
@include('inc.alert')
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.halaman.update', ['slug' => 'sejarah-desa']) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
                                <h2>Sejarah Desa</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-wrap gap-5 mb-7 text-center">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label mb-3">Gambar 1</label>
                                    <div>
                                        <style>.image-input-placeholder-1 { background-image: url('{{ asset('uploads') }}/{{ $content['sd_image1'] }}'); } [data-bs-theme="dark"] .image-input-placeholder-1 { background-image: url('{{ asset('uploads') }}/{{ $content['sd_image1'] }}'); }</style>
                                        <!--end::Image input placeholder-->
                                        <div class="image-input image-input-empty image-input-outline image-input-placeholder-1 mb-3" data-kt-image-input="true">
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
                                                <input type="file" name="sd_image1" accept=".png, .jpg, .jpeg" />
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
                                        @error('sd_image1')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label mb-3">Gambar 2</label>
                                    <div>
                                        <style>.image-input-placeholder-2 { background-image: url('{{ asset('uploads') }}/{{ $content['sd_image2'] }}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset('uploads') }}/{{ $content['sd_image2'] }}'); }</style>
                                        <!--end::Image input placeholder-->
                                        <div class="image-input image-input-empty image-input-outline image-input-placeholder-2 mb-3" data-kt-image-input="true">
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
                                                <input type="file" name="sd_image2" accept=".png, .jpg, .jpeg" />
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
                                    @error('sd_image2')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Subjudul</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="sd_subtitle" class="form-control mb-2" placeholder="Subjudul" value="{{ old('sd_subtitle') ?? $content['sd_subtitle'] }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('sd_subtitle')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image files are accepted</div>
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
                                <textarea name="sd_description" class="form-control h-200px mb-2" placeholder="Deskripsi">{{ old('sd_description') ?? $content['sd_description'] }}</textarea>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                @error('sd_description')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <!--begin::Pricing-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Potensi Unggulan</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Subjudul</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="pu_subtitle" class="form-control mb-2" placeholder="Subjudul" value="{{ old('pu_subtitle') ?? $content['pu_subtitle'] }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('pu_subtitle')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Tax-->
                                <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <div class="fv-row w-100 flex-md-root mb-7">
                                            <!--begin::Label-->
                                            <label class="form-label mb-3">Gambar 1</label>
                                            <div>
                                                <style>.image-input-placeholder-3 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image1'] }}'); } [data-bs-theme="dark"] .image-input-placeholder-3 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image1'] }}'); }</style>
                                                <!--end::Image input placeholder-->
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder-3 mb-3" data-kt-image-input="true">
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
                                                        <input type="file" name="pu_image1" accept=".png, .jpg, .jpeg" />
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
                                            @error('pu_image1')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                            @else
                                            <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                            @enderror
                                        </div>
                                        <!--begin::Label-->
                                        <label class="form-label">Potensi 1</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="pu_potension1" class="form-control mb-2" value="{{ old('pu_potension1') ?? $content['pu_potension1'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('pu_potension1')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <div class="fv-row w-100 flex-md-root mb-7">
                                            <!--begin::Label-->
                                            <label class="form-label mb-3">Gambar 2</label>
                                            <div>
                                                <style>.image-input-placeholder-4 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image2'] }}'); } [data-bs-theme="dark"] .image-input-placeholder-4 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image2'] }}'); }</style>
                                                <!--end::Image input placeholder-->
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder-4 mb-3" data-kt-image-input="true">
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
                                                        <input type="file" name="pu_image2" accept=".png, .jpg, .jpeg" />
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
                                            @error('pu_image2')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                            @else
                                            <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                            @enderror
                                        </div>
                                        <!--begin::Label-->
                                        <label class="form-label">Potensi 2</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="pu_potension2" class="form-control mb-2" value="{{ old('pu_potension2') ?? $content['pu_potension2'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('pu_potension2')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <div class="fv-row w-100 flex-md-root mb-7">
                                            <!--begin::Label-->
                                            <label class="form-label mb-3">Gambar 3</label>
                                            <div>
                                                <style>.image-input-placeholder-5 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image3'] }}'); } [data-bs-theme="dark"] .image-input-placeholder-5 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image3'] }}'); }</style>
                                                <!--end::Image input placeholder-->
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder-5 mb-3" data-kt-image-input="true">
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
                                                        <input type="file" name="pu_image3" accept=".png, .jpg, .jpeg" />
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
                                            @error('pu_image3')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                            @else
                                            <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                            @enderror
                                        </div>
                                        <!--begin::Label-->
                                        <label class="form-label">Potensi 3</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="pu_potension3" class="form-control mb-2" value="{{ old('pu_potension3') ?? $content['pu_potension3'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('pu_potension3')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <div class="fv-row w-100 flex-md-root mb-7">
                                            <!--begin::Label-->
                                            <label class="form-label mb-3">Gambar 4</label>
                                            <div>
                                                <style>.image-input-placeholder-6 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image4'] }}'); } [data-bs-theme="dark"] .image-input-placeholder-6 { background-image: url('{{ asset('uploads') }}/{{ $content['pu_image4'] }}'); }</style>
                                                <!--end::Image input placeholder-->
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder-6 mb-3" data-kt-image-input="true">
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
                                                        <input type="file" name="pu_image4" accept=".png, .jpg, .jpeg" />
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
                                            @error('pu_image4')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                            @else
                                            <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                            @enderror
                                        </div>
                                        <!--begin::Label-->
                                        <label class="form-label">Potensi 4</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="pu_potension4" class="form-control mb-2" value="{{ old('pu_potension4') ?? $content['pu_potension4'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('pu_potension4')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror                                        
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end:Tax-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Statistik Desa</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Penduduk</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sd_population" class="form-control mb-2" value="{{ old('sd_population') ?? $content['sd_population'] }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('sd_population')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Dusun</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sd_subdistrict" class="form-control mb-2" value="{{ old('sd_subdistrict') ?? $content['sd_subdistrict'] }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('sd_subdistrict')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah RW</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sd_rw" class="form-control mb-2" value="{{ old('sd_rw') ?? $content['sd_rw'] }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('sd_rw')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah RT</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sd_rt" class="form-control mb-2" value="{{ old('sd_rt') ?? $content['sd_rt'] }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('sd_rt')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Budaya dan Tradisi</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Subtitle</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="bdt_subtitle" class="form-control mb-2" value="{{ old('bdt_subtitle') ?? $content['bdt_subtitle'] }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('bdt_subtitle')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Set the product VAT about.</div>
                                @enderror
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Tax-->
                                <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Budaya dan Tradisi 1</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="bdt_1" class="form-control mb-2" value="{{ old('bdt_1') ?? $content['bdt_1'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_1')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                        <!--begin::Label-->
                                        <label class="form-label mt-7">Deskripsi 1</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea name="bdt_description1" class="form-control h-200px mb-2" placeholder="Deskripsi">{{ old('bdt_description1') ?? $content['bdt_description1'] }}</textarea>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_description1')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Budaya dan Tradisi 2</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="bdt_2" class="form-control mb-2" value="{{ old('bdt_2') ?? $content['bdt_2'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_2')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                        <!--begin::Label-->
                                        <label class="form-label mt-7">Deskripsi 2</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea name="bdt_description2" class="form-control h-200px mb-2" placeholder="Deskripsi">{{ old('bdt_description2') ?? $content['bdt_description2'] }}</textarea>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_description2')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Budaya dan Tradisi 3</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="bdt_3" class="form-control mb-2" value="{{ old('bdt_3') ?? $content['bdt_3'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_3')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                        <!--begin::Label-->
                                        <label class="form-label mt-7">Deskripsi 3</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea name="bdt_description3" class="form-control h-200px mb-2" placeholder="Deskripsi">{{ old('bdt_description3') ?? $content['bdt_description3'] }}</textarea>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_description3')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Budaya dan Tradisi 4</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="bdt_4" class="form-control mb-2" value="{{ old('bdt_4') ?? $content['bdt_4'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_4')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--begin::Label-->
                                        <label class="form-label mt-7">Deskripsi 4</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea name="bdt_description4" class="form-control h-200px mb-2" placeholder="Deskripsi">{{ old('bdt_description4') ?? $content['bdt_description4'] }}</textarea>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('bdt_description4')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        @enderror
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end:Tax-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end mt-10 mb-5">
                <!--begin::Button-->
                <a href="{{ route('admin.halaman.sejarah-desa') }}"class="btn btn-light me-5">Cancel</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">Save Changes</span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </div>
</div>
</form>
@endsection
@section('scripts')
@endsection