@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
@include('inc.alert')
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.halaman.update', $page->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ $page->title }}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Subjudul</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="subtitle" class="form-control mb-2" placeholder="Subjudul" value="{{ old('subtitle') ?? $content['subtitle'] }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('subtitle')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Url Peta</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="maps_url" placeholder="Url Peta" class="form-control mb-2" value="{{ old('maps_url') ?? $content['maps_url'] }}" readonly/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('maps_url')
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
                                <textarea name="description" class="form-control h-150px mb-2" placeholder="Deskripsi">{{ old('description') ?? $content['description'] }}</textarea>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                @error('description')
                                <div class="text-danger fs-7">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end mt-10 mb-5">
                <!--begin::Button-->
                <a href="{{ route('admin.halaman.hubungi-kami') }}" class="btn btn-light me-5">Batal</a>
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
@endsection