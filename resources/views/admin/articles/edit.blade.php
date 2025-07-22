@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.artikel.update', ['slug' => $article->slug]) }}" method="POST" enctype="multipart/form-data">
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
                <style>.image-input-placeholder { background-image: url('{{ asset('uploads') }}/{{ $article->image }}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset('uploads') }}/{{ $article->image }}'); }</style>
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
                <div class="text-danger fs-7 mb-3">{{ $message }}</div>
                @else
                <div class="text-muted fs-7 mb-3">Allowed file types: png, jpg, jpeg.</div>
                @enderror
                <!--end::Description-->
                <div class="fv-row text-start">
                    <!--begin::Label-->
                    <label class="form-label">Kategori</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select class="form-select mb-2" name="category_id" data-control="select2" data-hide-search="true" data-placeholder="Pilih Kategori">
                        <option></option>
                        @foreach (\App\Helpers\AppHelper::getCategories() as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id') ?? $article->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    @error('category_id')
                    <div class="text-danger fs-7 mb-3">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7 mb-3">Set a description to the product for better visibility.</div>
                    @enderror
                    <!--end::Description-->
                    <a href="{{ route('admin.kategori.index') }}" class="btn btn-light-primary btn-sm">
                        <i class="ki-duotone ki-plus fs-2"></i>Tambah Kategori Baru
                    </a>  
                </div>
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
                                <h2>Detail Artikel</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Judul Artikel</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" class="form-control mb-2" placeholder="Judul Artikel" value="{{ old('title') ?? $article->title }}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('title')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">Judul artikel diperlukan dan disarankan untuk unik.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Konten</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <textarea id="tinymce1" name="content" class="tox-target">{{ old('content') ?? $article->content }}</textarea>
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
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                </div>
            </div>
            <!--end::Tab pane-->
        </div>
        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="{{ route('admin.artikel.index') }}" class="btn btn-light me-5">Batalkan</a>
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
@section('scripts')
<script src="{{ asset('common') }}/vendor/tinymce/tinymce.min.js"></script>
<script src="{{ asset('common') }}/js/tinymce.js"></script>
@endsection