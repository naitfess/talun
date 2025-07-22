@extends('layouts.be-layout')
@section('content')
<!--begin::Navbar-->
@include('inc.alert')
<div class="card mb-9">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
            <!--begin::Image-->
            <div class="d-flex flex-center flex-shrink-0 w-50px h-50px me-5">
                <img class="mw-50px" src="{{ asset('uploads/' . $villageSetting->logo_header) }}" alt="image" />
            </div>
            <!--end::Image-->
            <!--begin::Wrapper-->
            <div class="flex-grow-1">
                <!--begin::Head-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2 flex-column">
                    <!--begin::Details-->
                    <div class="d-flex flex-column">
                        <!--begin::Status-->
                        <div class="d-flex align-items-center">
                            <a class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{ $villageSetting->name }}</a>
                        </div>
                        <!--end::Status-->
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-semibold mb-2 fs-5 text-gray-500">{{ $villageSetting->address }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Head-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->
    </div>
    <!--end::Navbar-->
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title fs-3 fw-bold">Pengaturan Web</div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Form-->
        <form class="form" method="POST" action="{{ route('admin.informasi-desa.update', ['id' => $villageSetting->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!--begin::Card body-->
            <div class="card-body p-9 border-bottom-sm">
                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Logo Header
                            <span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('metronic') }}/media/svg/avatars/blank.svg')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-200px h-200px bgi-position-center" style="background-size: 75%; background-image: url('{{ asset('uploads/' . $villageSetting->logo_header) }}')"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Inputs-->
                                <input type="file" name="logo_header" accept=".png, .jpg, .jpeg" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <!--end::Cancel-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        @error('logo_header')
                        <div class="text-danger fs-7 mt-2 mb-3">{{ $message }}</div>
                        @else
                        <div class="text-muted fs-7 mt-2 mb-3">Allowed file types: png, jpg, jpeg.</div>
                        @enderror
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Logo Footer
                            <span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('metronic') }}/media/svg/avatars/blank.svg')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-200px h-200px bgi-position-center" style="background-size: 75%; background-image: url('{{ asset('uploads/' . $villageSetting->logo_footer) }}')"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Inputs-->
                                <input type="file" name="logo_footer" accept=".png, .jpg, .jpeg" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <!--end::Cancel-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        @error('logo_header')
                        <div class="text-danger fs-7 mt-2 mb-3">{{ $message }}</div>
                        @else
                        <div class="text-muted fs-7 mt-2 mb-3">Allowed file types: png, jpg, jpeg.</div>
                        @enderror
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Nama Desa</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Nama Desa" class="form-control form-control-solid" name="name" value="{{ old('name') ?? $villageSetting->name }}" />
                        @error('name')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Deskripsi Desa</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <textarea name="description" class="form-control form-control-solid h-75px" placeholder="Deskripsi Desa">{{ old('description') ?? $villageSetting->description }}</textarea>
                        @error('description')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--begin::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Alamat</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Alamat" class="form-control form-control-solid" name="address" value="{{ old('address') ?? $villageSetting->address }}" />
                        @error('address')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Telepon</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Telepon" class="form-control form-control-solid" name="phone" value="{{ old('phone') ?? $villageSetting->phone }}" />
                        @error('phone')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Email</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Email" class="form-control form-control-solid" name="email" value="{{ old('email') ?? $villageSetting->email }}" />
                        @error('email')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title fs-3 fw-bold">Sosial Media</div>
                <!--end::Card title-->
            </div>
            <!--end::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Facebook</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Url Facebook" class="form-control form-control-solid" name="facebook_url" value="{{ old('facebook_url') ?? $villageSetting->facebook_url }}" />
                        @error('facebook_url')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Twitter</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Url Twitter" class="form-control form-control-solid" name="twitter_url" value="{{ old('twitter_url') ?? $villageSetting->twitter_url }}" />
                        @error('twitter_url')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Instagram</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Url Instagram" class="form-control form-control-solid" name="instagram_url" value="{{ old('instagram_url') ?? $villageSetting->instagram_url }}" />
                        @error('instagram_url')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Maps</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Url Maps" class="form-control form-control-solid" name="maps_url" value="{{ old('maps_url') ?? $villageSetting->maps_url }}" />
                        @error('maps_url')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Copyright</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" placeholder="Copyright" class="form-control form-control-solid" name="copyright" value="{{ old('copyright') ?? $villageSetting->copyright }}" />
                        @error('copyright')
                        <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button onclick="window.location.href='{{ route('admin.informasi-desa.index') }}'" class="btn btn-light btn-active-light-primary me-2">Batalkan</button>
                <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Simpan Perubahan</button>
            </div>
            <!--end::Card footer-->
        </form>
        <!--end:Form-->
    </div>
    <!--end::Card-->
</div>
@endsection