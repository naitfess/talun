@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
@include('inc.alert')
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.halaman.update', ['slug' => $page->slug]) }}" method="POST" enctype="multipart/form-data">
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
                                <h2>Kepala Desa</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Image input-->
                            <!--begin::Image input placeholder-->
                            <style>.image-input-placeholder-1 { background-image: url('{{ asset('uploads') }}/{{ $village_head->image }}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset('uploads') }}/{{ $village_head->image }}'); }</style>
                            <!--end::Image input placeholder-->
                            <div class="image-input image-input-empty image-input-outline image-input-placeholder-1 mb-3" data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-200px h-200px"></div>
                                <!--end::Preview existing avatar-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Nama Kepala Desa dapat diedit melalui 
                                <a href="{{ route('admin.perangkat-desa.index') }}">halaman ini</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Nama Kepala Desa</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="{{ $village_head->name }}" readonly/>
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Foto Kepala Desa dapat diedit melalui 
                                    <a href="{{ route('admin.perangkat-desa.index') }}">halaman ini</a>.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Deskripsi</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <textarea name="kd_description" class="form-control h-150px mb-2">{{ old('kd_description') ?? $content['kd_description'] }}</textarea>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                @error('kd_description')
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
                                <h2>Tentang Talun</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Subjudul</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="tt_subtitle" class="form-control mb-2" placeholder="Subjudul" value="{{ old('tt_subtitle') ?? $content['tt_subtitle'] }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('tt_subtitle')
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
                                        <!--begin::Label-->
                                        <label class="form-label">Judul 1</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="tt_title_1" class="form-control mb-2" placeholder="Judul 1" value="{{ old('tt_title_1') ?? $content['tt_title_1'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('tt_title_1')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                        @enderror
                                        <!--end::Description-->
                                        <label class="form-label mt-7">Deskripsi 1</label>
                                        <textarea name="tt_description_1" class="form-control h-150px mb-2" placeholder="Deskripsi 1">{{ old('tt_description_1') ?? $content['tt_description_1'] }}</textarea>
                                        @error('tt_description_1')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                        @enderror
                                        <label class="form-label mt-7">Url 1</label>
                                        <input type="text" name="tt_url_1" class="form-control mb-2" placeholder="Url 1" value="{{ old('tt_url_1') ?? $content['tt_url_1'] }}" />
                                        @error('tt_url_1')
                                        <div class="text-muted fs-7 pb-2 border-bottom-sm">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7 pb-2 border-bottom-sm">Set the product VAT about.</div>
                                        @enderror
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Judul 2</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="tt_title_2" class="form-control mb-2" placeholder="Judul 2" value="{{ old('tt_title_2') ?? $content['tt_title_2'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('tt_title_2')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                        @enderror
                                        <!--end::Description-->
                                        <label class="form-label mt-7">Deskripsi 2</label>
                                        <textarea name="tt_description_2" class="form-control h-150px mb-2" placeholder="Deskripsi 2">{{ old('tt_description_2') ?? $content['tt_description_2'] }}</textarea>
                                        @error('tt_description_2')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                        @enderror
                                        <label class="form-label mt-7">Url 2</label>
                                        <input type="text" name="tt_url_2" class="form-control mb-2" placeholder="Url 2" value="{{ old('tt_url_2') ?? $content['tt_url_2'] }}" />
                                        @error('tt_url_2')
                                        <div class="text-muted fs-7 pb-2 border-bottom-sm">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7 pb-2 border-bottom-sm">Set the product VAT about.</div>
                                        @enderror
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Judul 3</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="tt_title_3" class="form-control mb-2" placeholder="Judul 3" value="{{ old('tt_title_3') ?? $content['tt_title_3'] }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        @error('tt_title_3')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                        @enderror
                                        <!--end::Description-->
                                        <label class="form-label mt-7">Deskripsi 3</label>
                                        <textarea name="tt_description_3" class="form-control h-150px mb-2" placeholder="Deskripsi 3">{{ old('tt_description_3') ?? $content['tt_description_3'] }}</textarea>
                                        @error('tt_description_3')
                                        <div class="text-danger fs-7">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                        @enderror
                                        <label class="form-label mt-7">Url 3</label>
                                        <input type="text" name="tt_url_3" class="form-control mb-2" placeholder="Url 3" value="{{ old('tt_url_3') ?? $content['tt_url_3'] }}" />
                                        @error('tt_url_3')
                                        <div class="text-muted fs-7 pb-2 border-bottom-sm">{{ $message }}</div>
                                        @else
                                        <div class="text-muted fs-7 pb-2 border-bottom-sm">Set the product VAT about.</div>
                                        @enderror
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
                                <h2>Sejarah Desa Talun</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Image input-->
                            <!--begin::Image input placeholder-->
                            <style>.image-input-placeholder-2 { background-image: url('{{ asset('uploads') }}/{{ $content['sdt_image'] }}'); } [data-bs-theme="dark"] .image-input-placeholder-2 { background-image: url('{{ asset('uploads') }}/{{ $content['sdt_image'] }}'); }</style>
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
                                    <input type="file" name="sdt_image" accept=".png, .jpg, .jpeg" />
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
                            @error('sdt_image')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Allowed file types: png, jpg, jpeg.</div>
                            @enderror
                            <!--end::Description-->
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Subjudul</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sdt_subtitle" class="form-control mb-2" value="{{ old('sdt_subtitle') ?? $content['sdt_subtitle'] }}" placeholder="Subjudul"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('sdt_subtitle')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Penduduk</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="sdt_population" class="form-control mb-2" value="{{ old('sdt_population') ?? $content['sdt_population'] }}" placeholder="Jumlah Penduduk"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('sdt_population')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Deskripsi</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <textarea name="sdt_description" class="form-control h-150px mb-2" placeholder="Deskripsi">{{ old('sdt_description') ?? $content['sdt_description'] }}</textarea>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                @error('sdt_description')
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
                    <!--begin::Media-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Video Profil</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <label class="form-label mb-5">Thumbnail</label>
                            <div>
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>.image-input-placeholder-3 { background-image: url('{{ asset('uploads') }}/{{ $content['vp_thumbnail'] }}'); } [data-bs-theme="dark"] .image-input-placeholder-3 { background-image: url('{{ asset('uploads') }}/{{ $content['vp_thumbnail'] }}'); }</style>
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
                                        <input type="file" name="vp_thumbnail" accept=".png, .jpg, .jpeg" />
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
                                @error('vp_thumbnail')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Allowed file types: png, jpg, jpeg.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <!--begin::Card body-->
                        <div class="card-body py-0">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Subjudul</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="vp_subtitle" class="form-control mb-2" placeholder="Subjudul" value="{{ old('vp_subtitle') ?? $content['vp_subtitle'] }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('vp_subtitle')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Video Profile Url</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="vp_video_url" class="form-control mb-2" placeholder="Video Profile Url" value="{{ old('vp_video_url') ?? $content['vp_video_url'] }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('vp_video_url')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Media-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Hubungi Kami</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <div class="card-body pt-0">
                            <div class="text-muted fs-7">Halaman hubungi kami dapat diedit melalui 
                                <a href="{{ route('admin.halaman.hubungi-kami') }}">halaman ini.</a>
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end mt-10 mb-5">
                <!--begin::Button-->
                <a href="{{ route('admin.halaman.beranda') }}" class="btn btn-light me-5">Batal</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">Simpan Perubahan</span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </div>
</div>
</form>
<!--end::Form-->

@endsection
@section('scripts')
<script src="{{ asset('common') }}/js/dropzone.js"></script>
@endsection