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
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Monografi Desa</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Bulan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Pilih Bulan" name="month">
                                        <option></option>
                                        <option value="Januari" {{ (old('month') ?? $content['month']) == 'Januari' ? 'selected' : '' }}>Januari</option>
                                        <option value="Februari" {{ (old('month') ?? $content['month']) == 'Februari' ? 'selected' : '' }}>Februari</option>
                                        <option value="Maret" {{ (old('month') ?? $content['month']) == 'Maret' ? 'selected' : '' }}>Maret</option>
                                        <option value="April" {{ (old('month') ?? $content['month']) == 'April' ? 'selected' : '' }}>April</option>
                                        <option value="Mei" {{ (old('month') ?? $content['month']) == 'Mei' ? 'selected' : '' }}>Mei</option>
                                        <option value="Juni" {{ (old('month') ?? $content['month']) == 'Juni' ? 'selected' : '' }}>Juni</option>
                                        <option value="Juli" {{ (old('month') ?? $content['month']) == 'Juli' ? 'selected' : '' }}>Juli</option>
                                        <option value="Agustus" {{ (old('month') ?? $content['month']) == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                                        <option value="September" {{ (old('month') ?? $content['month']) == 'September' ? 'selected' : '' }}>September</option>
                                        <option value="Oktober" {{ (old('month') ?? $content['month']) == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                                        <option value="November" {{ (old('month') ?? $content['month']) == 'November' ? 'selected' : '' }}>November</option>
                                        <option value="Desember" {{ (old('month') ?? $content['month']) == 'Desember' ? 'selected' : '' }}>Desember</option>
                                    </select>
                                    {{-- <input type="text" name="month" class="form-control mb-2" value="{{ old('month') ?? $content['month'] }}" placeholder="Bulan"/> --}}
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('month')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Tahun</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="year" class="form-control mb-2" value="{{ old('year') ?? $content['year'] }}" placeholder="Tahun"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('year')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Nama Desa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="village_name" class="form-control mb-2" value="{{ old('village_name') ?? $content['village_name'] }}" placeholder="Nama Desa"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('village_name')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Tahun Pembentukan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="year_of_formation" class="form-control mb-2" value="{{ old('year_of_formation') ?? $content['year_of_formation'] }}" placeholder="Tahun Pembentukan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('year_of_formation')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Dasar Hukum Tahun Pembentukan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="legal_basis_of_formation" class="form-control mb-2" value="{{ old('legal_basis_of_formation') ?? $content['legal_basis_of_formation'] }}" placeholder="Dasar Hukum Tahun Pembentukan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('legal_basis_of_formation')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Nomor Kode Wilayah</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="area_code_number" class="form-control mb-2" value="{{ old('area_code_number') ?? $content['area_code_number'] }}" placeholder="Nomor Kode Wilayah"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('area_code_number')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Nomor Kode Pos</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="postal_code_number" class="form-control mb-2" value="{{ old('postal_code_number') ?? $content['postal_code_number'] }}" placeholder="Dasar Hukum Tahun Pembentukan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('postal_code_number')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Kecamatan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sub_district" class="form-control mb-2" value="{{ old('sub_district') ?? $content['sub_district'] }}" placeholder="Kecamatan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('sub_district')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Kabupaten / Kota</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="district" class="form-control mb-2" value="{{ old('district') ?? $content['district'] }}" placeholder="Kabupaten / Kota"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('district')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Provinsi</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="province" class="form-control mb-2" value="{{ old('province') ?? $content['province'] }}" placeholder="Provinsi"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('province')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-body pt-5">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Tipologi Desa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="village_typology" class="form-control mb-2" value="{{ old('village_typology') ?? $content['village_typology'] }}" placeholder="Tipologi Desa"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('village_typology')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Tingkat Perkembangan Desa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Pilih Tingkat Perkembangan" name="village_development_level">
                                        <option></option>
                                        <option value="Swasembada" {{ (old('village_development_level') ?? $content['village_development_level']) == 'Swasembada' ? 'selected' : '' }}>Swasembada</option>
                                        <option value="Swadaya" {{ (old('village_development_level') ?? $content['village_development_level']) == 'Swadaya' ? 'selected' : '' }}>Swadaya</option>
                                        <option value="Swakarya" {{ (old('village_development_level') ?? $content['village_development_level']) == 'Swakarya' ? 'selected' : '' }}>Swakarya</option>
                                    </select>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('village_development_level')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Luas Wilayah (km²)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="any" name="area" class="form-control mb-2" value="{{ old('area') ?? $content['area'] }}" placeholder="Luas Wilayah"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('area')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="card-header border-0 px-0">
                                <div class="card-title">
                                    <h2>Batas Wilayah</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sebelah Utara</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="northern_boundary" class="form-control mb-2" value="{{ old('northern_boundary') ?? $content['northern_boundary'] }}" placeholder="Sebelah Utara"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('northern_boundary')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sebelah Selatan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="southern_boundary" class="form-control mb-2" value="{{ old('southern_boundary') ?? $content['southern_boundary'] }}" placeholder="Sebelah Selatan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('southern_boundary')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sebelah Barat</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="western_boundary" class="form-control mb-2" value="{{ old('western_boundary') ?? $content['western_boundary'] }}" placeholder="Sebelah Barat"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('western_boundary')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sebelah Timur</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="eastern_boundary" class="form-control mb-2" value="{{ old('eastern_boundary') ?? $content['eastern_boundary'] }}" placeholder="Sebelah Timur"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('eastern_boundary')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="card-header border-0 px-0">
                                <div class="card-title">
                                    <h2>Orbitrasi (Jarak Dari Pusat Pemerintahan)</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jarak Dari Pusat Pemerintahan Kecamatan (km)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="any" name="orbital_from_sub_district_government_center" class="form-control mb-2" value="{{ old('orbital_from_sub_district_government_center') ?? $content['orbital_from_sub_district_government_center'] }}" placeholder="Jarak Dari Pusat Pemerintahan Kecamatan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('orbital_from_sub_district_government_center')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jarak Dari Ibukota Provinsi (km)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="any" name="orbital_from_provincial_capital" class="form-control mb-2" value="{{ old('orbital_from_provincial_capital') ?? $content['orbital_from_provincial_capital'] }}" placeholder="Jarak Dari Ibukota Provinsi"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('orbital_from_provincial_capital')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jarak Dari Ibukota Kabupaten (km)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="any" name="orbital_from_district_capital" class="form-control mb-2" value="{{ old('orbital_from_district_capital') ?? $content['orbital_from_district_capital'] }}" placeholder="Jarak Dari Ibukota Kabupaten"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('orbital_from_district_capital')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jarak Dari Pusat Pemerintahan Kota (km)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="any" name="orbital_from_city_government_center" class="form-control mb-2" value="{{ old('orbital_from_city_government_center') ?? $content['orbital_from_city_government_center'] }}" placeholder="Jarak Dari Pusat Pemerintahan Kota"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('orbital_from_city_government_center')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-body pt-5">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Penduduk</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="population" class="form-control mb-2" value="{{ old('population') ?? $content['population'] }}" placeholder="Jumlah Penduduk"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('population')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah KK</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="family_card_count" class="form-control mb-2" value="{{ old('family_card_count') ?? $content['family_card_count'] }}" placeholder="Jumlah KK"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('family_card_count')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Laki-Laki</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="male" class="form-control mb-2" value="{{ old('male') ?? $content['male'] }}" placeholder="Jumlah Laki-Laki"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('male')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Perempuan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="female" class="form-control mb-2" value="{{ old('female') ?? $content['female'] }}" placeholder="Jumlah Perempuan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('female')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Usia 0 - 15</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="ages_0_15" class="form-control mb-2" value="{{ old('ages_0_15') ?? $content['ages_0_15'] }}" placeholder="Jumlah Usia 0 - 15"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('ages_0_15')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Usia 15 - 55</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="ages_15_55" class="form-control mb-2" value="{{ old('ages_15_55') ?? $content['ages_15_55'] }}" placeholder="Jumlah Usia 15 - 55"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('ages_15_55')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Usia 55 ke atas</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="ages_55_and_over" class="form-control mb-2" value="{{ old('ages_55_and_over') ?? $content['ages_55_and_over'] }}" placeholder="Jumlah Usia 55 ke atas"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('ages_55_and_over')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Mayoritas Pekerjaan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="majority_of_occupations" class="form-control mb-2" value="{{ old('majority_of_occupations') ?? $content['majority_of_occupations'] }}" placeholder="Mayoritas Pekerjaan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('majority_of_occupations')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="card-header border-0 px-0">
                                <div class="card-title">
                                    <h2>Tingkat Pendidikan Masyarakat</h2>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h4>A. Lulusan Pendidikan Umum</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Taman Kanak-Kanak</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="kindergarten" class="form-control mb-2" value="{{ old('kindergarten') ?? $content['kindergarten'] }}" placeholder="Jumlah Taman Kanak-Kanak"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('kindergarten')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sekolah Dasar</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="elementary_school" class="form-control mb-2" value="{{ old('elementary_school') ?? $content['elementary_school'] }}" placeholder="Jumlah Sekolah Dasar"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('elementary_school')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sekolah Menengah Pertama</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="junior_high_school" class="form-control mb-2" value="{{ old('junior_high_school') ?? $content['junior_high_school'] }}" placeholder="Jumlah Sekolah Menengah Pertama"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('junior_high_school')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sekolah Menengah Atas</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="senior_high_school" class="form-control mb-2" value="{{ old('senior_high_school') ?? $content['senior_high_school'] }}" placeholder="Jumlah Sekolah Menengah Atas"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('senior_high_school')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Akademi / D1 - D3</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="academy" class="form-control mb-2" value="{{ old('academy') ?? $content['academy'] }}" placeholder="Jumlah Akademi / D1 - D3"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('academy')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sarjana</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="bachelors_degree" class="form-control mb-2" value="{{ old('bachelors_degree') ?? $content['bachelors_degree'] }}" placeholder="Jumlah Sarjana"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('bachelors_degree')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Pasca Sarjana</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="postgraduate" class="form-control mb-2" value="{{ old('postgraduate') ?? $content['postgraduate'] }}" placeholder="Jumlah Pasca Sarjana"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('postgraduate')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="mb-5">
                                <h4>B. Lulusan Pendidikan Khusus</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Pondok Pesantren</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="islamic_boarding_school" class="form-control mb-2" value="{{ old('islamic_boarding_school') ?? $content['islamic_boarding_school'] }}" placeholder="Jumlah Pondok Pesantren"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('islamic_boarding_school')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Pendidikan Keagamaan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="religious_education" class="form-control mb-2" value="{{ old('religious_education') ?? $content['religious_education'] }}" placeholder="Jumlah Pendidikan Keagamaan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('religious_education')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Sekolah Luar Biasa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="special_schools" class="form-control mb-2" value="{{ old('special_schools') ?? $content['special_schools'] }}" placeholder="Jumlah Sekolah Luar Biasa"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('special_schools')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Kursus Keterampilan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="skill_courses" class="form-control mb-2" value="{{ old('skill_courses') ?? $content['skill_courses'] }}" placeholder="Jumlah Kursus Keterampilan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('skill_courses')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="mb-5">
                                <h4>C. Tidak Lulus / Tidak Sekolah</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Tidak Lulus / Tidak Sekolah</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="not_graduated" class="form-control mb-2" value="{{ old('not_graduated') ?? $content['not_graduated'] }}" placeholder="Jumlah Tidak Lulus / Tidak Sekolah"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('not_graduated')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-body pt-5">
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Penduduk Miskin</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="number_of_poor_residents" class="form-control mb-2" value="{{ old('number_of_poor_residents') ?? $content['number_of_poor_residents'] }}" placeholder="Jumlah Penduduk Miskin"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('number_of_poor_residents')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah KK Penduduk Miskin</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="number_family_card_of_poor_residents" class="form-control mb-2" value="{{ old('number_family_card_of_poor_residents') ?? $content['number_family_card_of_poor_residents'] }}" placeholder="Jumlah KK Penduduk Miskin"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('number_family_card_of_poor_residents')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">UMR Kabupaten / Kota</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="district_minimum_wage" class="form-control mb-2" value="{{ old('district_minimum_wage') ?? $content['district_minimum_wage'] }}" placeholder="UMR Kabupaten / Kota"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('district_minimum_wage')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="card-header border-0 px-0">
                                <div class="card-title">
                                    <h2>Sarana Prasarana</h2>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h4>A. Kantor Desa</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Kantor Desa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Pilih" name="infrastructure_village_office">
                                        <option></option>
                                        <option value="Sewa" {{ (old('infrastructure_village_office') ?? $content['infrastructure_village_office']) == 'Sewa' ? 'selected' : '' }}>Sewa</option>
                                        <option value="Semi Permanen" {{ (old('infrastructure_village_office') ?? $content['infrastructure_village_office']) == 'Semi Permanen' ? 'selected' : '' }}>Semi Permanen</option>
                                        <option value="Permanen" {{ (old('infrastructure_village_office') ?? $content['infrastructure_village_office']) == 'Permanen' ? 'selected' : '' }}>Permanen</option>
                                    </select>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('infrastructure_village_office')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="mb-5">
                                <h4>B. Prasarana Kesehatan</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Puskesmas</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Pilih" name="infrastructure_community_health_center">
                                        <option></option>
                                        <option value="Ada" {{ (old('infrastructure_community_health_center') ?? $content['infrastructure_community_health_center']) == 'Ada' ? 'selected' : '' }}>Ada</option>
                                        <option value="Tidak Ada" {{ (old('infrastructure_community_health_center') ?? $content['infrastructure_community_health_center']) == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                    </select>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('infrastructure_community_health_center')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Poskesdes</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="infrastructure_village_health_post" class="form-control mb-2" value="{{ old('infrastructure_village_health_post') ?? $content['infrastructure_village_health_post'] }}" placeholder="Jumlah Poskesdes"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('infrastructure_village_health_post')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah UKBM (Posyandu / Polindes)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="infrastructure_ukbm" class="form-control mb-2" value="{{ old('infrastructure_ukbm') ?? $content['infrastructure_ukbm'] }}" placeholder="Jumlah Puskesmas"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('infrastructure_ukbm')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="mb-5">
                                <h4>C. Prasarana Pendidikan</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Perpusdes</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="educational_infrastructure_village_library" class="form-control mb-2" value="{{ old('educational_infrastructure_village_library') ?? $content['educational_infrastructure_village_library'] }}" placeholder="Jumlah Perpusdes"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('educational_infrastructure_village_library')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah PAUD</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="educational_infrastructure_preschool" class="form-control mb-2" value="{{ old('educational_infrastructure_preschool') ?? $content['educational_infrastructure_preschool'] }}" placeholder="Jumlah PAUD"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('educational_infrastructure_preschool')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah TK</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="educational_infrastructure_kindergarten" class="form-control mb-2" value="{{ old('educational_infrastructure_kindergarten') ?? $content['educational_infrastructure_kindergarten'] }}" placeholder="Jumlah TK"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('educational_infrastructure_kindergarten')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah SD</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="educational_infrastructure_elementary_school" class="form-control mb-2" value="{{ old('educational_infrastructure_elementary_school') ?? $content['educational_infrastructure_elementary_school'] }}" placeholder="Jumlah SD"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('educational_infrastructure_elementary_school')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah SMP</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="educational_infrastructure_junior_high_school" class="form-control mb-2" value="{{ old('educational_infrastructure_junior_high_school') ?? $content['educational_infrastructure_junior_high_school'] }}" placeholder="Jumlah SMP"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('educational_infrastructure_junior_high_school')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah SMA</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="educational_infrastructure_senior_high_school" class="form-control mb-2" value="{{ old('educational_infrastructure_senior_high_school') ?? $content['educational_infrastructure_senior_high_school'] }}" placeholder="Jumlah SMA"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('educational_infrastructure_senior_high_school')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Perguruan Tinggi</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="educational_infrastructure_college" class="form-control mb-2" value="{{ old('educational_infrastructure_college') ?? $content['educational_infrastructure_college'] }}" placeholder="Jumlah Perguruan Tinggi"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('educational_infrastructure_college')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="mb-5">
                                <h4>D. Prasarana Ibadah</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Masjid</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="religious_facilities_mosque" class="form-control mb-2" value="{{ old('religious_facilities_mosque') ?? $content['religious_facilities_mosque'] }}" placeholder="Jumlah Masjid"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('religious_facilities_mosque')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Mushola</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="religious_facilities_mushola" class="form-control mb-2" value="{{ old('religious_facilities_mushola') ?? $content['religious_facilities_mushola'] }}" placeholder="Jumlah Mushola"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('religious_facilities_mushola')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Gereja</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="religious_facilities_church" class="form-control mb-2" value="{{ old('religious_facilities_church') ?? $content['religious_facilities_church'] }}" placeholder="Jumlah Gereja"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('religious_facilities_church')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Pura</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="religious_facilities_temple" class="form-control mb-2" value="{{ old('religious_facilities_temple') ?? $content['religious_facilities_temple'] }}" placeholder="Jumlah Pura"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('religious_facilities_temple')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Vihara</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="religious_facilities_vihara" class="form-control mb-2" value="{{ old('religious_facilities_vihara') ?? $content['religious_facilities_vihara'] }}" placeholder="Jumlah Vihara"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('religious_facilities_vihara')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Klenteng</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="religious_facilities_chinese_temple" class="form-control mb-2" value="{{ old('religious_facilities_chinese_temple') ?? $content['religious_facilities_chinese_temple'] }}" placeholder="Jumlah Klenteng"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('religious_facilities_chinese_temple')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <div class="mb-5">
                                <h4>E. Prasarana Umum</h4>
                            </div>
                            <!--end::Card header-->
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Tempat Olah Raga</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="public_infrastructure_sports" class="form-control mb-2" value="{{ old('public_infrastructure_sports') ?? $content['public_infrastructure_sports'] }}" placeholder="Jumlah Tempat Olah Raga"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('public_infrastructure_sports')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Kesenian / Budaya</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="public_infrastructure_arts_culture" class="form-control mb-2" value="{{ old('public_infrastructure_arts_culture') ?? $content['public_infrastructure_arts_culture'] }}" placeholder="Jumlah Kesenian / Budaya"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('public_infrastructure_arts_culture')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Balai Pertemuan</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="public_infrastructure_meeting_hall" class="form-control mb-2" value="{{ old('public_infrastructure_meeting_hall') ?? $content['public_infrastructure_meeting_hall'] }}" placeholder="Jumlah Balai Pertemuan"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('public_infrastructure_meeting_hall')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Sumur Desa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="public_infrastructure_village_well" class="form-control mb-2" value="{{ old('public_infrastructure_village_well') ?? $content['public_infrastructure_village_well'] }}" placeholder="Jumlah Sumur Desa"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('public_infrastructure_village_well')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-5 mb-7">
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Jumlah Pasar Desa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="public_infrastructure_village_market" class="form-control mb-2" value="{{ old('public_infrastructure_village_market') ?? $content['public_infrastructure_village_market'] }}" placeholder="Jumlah Pasar Desa"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('public_infrastructure_village_market')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Label-->
                                    <label class="form-label">Lainnya</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="public_infrastructure_other" class="form-control mb-2" value="{{ old('public_infrastructure_other') ?? $content['public_infrastructure_other'] }}" placeholder="Lainnya"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    @error('public_infrastructure_other')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                    @else
                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                    @enderror
                                    <!--end::Description-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
            </div>
            <!--end::Tab pane-->
        </div>
        <!--end::Tab content-->
        <div class="d-flex justify-content-end mt-0 mb-5">
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