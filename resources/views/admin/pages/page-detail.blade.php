@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
@include('inc.alert')
<form class="form d-flex flex-column flex-lg-row" action="{{ route('admin.halaman.update', ['slug' => $page->slug]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @isset ($villageOfficials)
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <!--begin::Category & tags-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Perangkat Desa</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-0">
                <!--begin::Input group-->
                <!--begin::Label-->
                {{-- <label class="form-label">Daftar Lembaga Desa</label> --}}
                <!--end::Label-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Tbody-->
                        <tbody class="fw-6 fw-semibold text-gray-600">
                            @foreach ($villageOfficials as $official)
                            <tr class="border-0">
                                <td class="pt-0 px-0">
                                    <a class="text-gray-600"><span>{{ $official->position->name }} : </span>{{ $official->name }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Input group-->
                <!--begin::Button-->
                <a href="{{ route('admin.perangkat-desa.index') }}" class="btn btn-light-primary btn-sm mb-10">
                    <i class="ki-duotone ki-plus fs-2"></i>Atur Perangkat Desa
                </a>
                <!--end::Button-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Category & tags-->
    </div>
    @endisset
    @isset ($villageInstitutions)
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <!--begin::Category & tags-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Lembaga Desa</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-0">
                <!--begin::Input group-->
                <!--begin::Label-->
                {{-- <label class="form-label">Daftar Lembaga Desa</label> --}}
                <!--end::Label-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Tbody-->
                        <tbody class="fw-6 fw-semibold text-gray-600">
                            @foreach ($villageInstitutions as $institution)
                            <tr class="border-0">
                                <td class="pt-0 px-0">
                                    <a class="text-gray-600"><span>{{ $loop->iteration }}. </span>{{ $institution->name }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Input group-->
                <!--begin::Button-->
                <a href="{{ route('admin.lembaga-desa.index') }}" class="btn btn-light-primary btn-sm mb-10">
                    <i class="ki-duotone ki-plus fs-2"></i>Tambah Lembaga Desa
                </a>
                <!--end::Button-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Category & tags-->
    </div>
    @endisset
    <!--begin::Aside column-->
    <!--end::Aside column-->
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" role="tab-panel">
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
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Subjudul</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="subtitle" class="form-control mb-2" value="{{ old('subtitle') ?? $content['subtitle'] }}" placeholder="Subjudul"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('subtitle')
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
                                <textarea id="tinymce1" name="description" class="tox-target">{{ old('description') ?? $content['description'] }}</textarea>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                @error('description')
                                <div class="text-danger fs-7 mt-2">{{ $message }}</div>
                                @else
                                <div class="text-muted fs-7 mt-2">Set the product VAT about.</div>
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
                <a href="{{ route('admin.halaman.visi-misi') }}" class="btn btn-light me-5">Batal</a>
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
</form>
<!--end::Form-->

@endsection
@section('scripts')
<script src="{{ asset('common') }}/vendor/tinymce/tinymce.min.js"></script>
<script src="{{ asset('common') }}/js/tinymce.js"></script>
@endsection