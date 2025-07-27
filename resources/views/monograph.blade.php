@extends('layouts.fe-layout')
@section('content')
<main>
    <!-- Breadcrumb area start  -->
    @include('inc.fe-breadcrumb')
    <!-- Breadcrumb area start  -->
    
    <section class="our-featured-service background-gay  section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-55 mb-xs-35">
                        <span class="section__subtitle text-center text-third">{{ $page->title }}</span>
                        <h2 class="section__title title-animation">{{ $content['subtitle'] }}</h2>
                    </div>
                </div>
            </div>
            <div>
                <section>
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <p class="mb-0 monograph-subtitle">Bulan : {{ $content['month'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="mb-0 monograph-subtitle">Tahun : {{ $content['year'] ?? '' }}</p>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-12 col-lg-6 col-md-6 mb-4 px-0">
                            <table class="table table-bordered align-middle ">
                                <tr>
                                    <td class="fw-semibold no-border-right monograph-w p-4">Nama Desa</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['village_name'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">Tahun Pembentukan</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['year_of_formation'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">Dasar Hukum Pembentukan</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['legal_basis_of_formation'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">Nomor Kode Wilayah</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['area_code_number'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">Nomor Kode Pos</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['postal_code_number'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">Kecamatan</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['sub_district'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">Kabupaten / Kota</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['district'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">Provinsi</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['province'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">Data Umum</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">1. Tipologi Desa</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['village_typology'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">2. Tingkat Pengembangan Desa</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['village_development_level'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">3. Luas Wilayah</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['area'] ? ($content['area'] . ' km²') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">4. Batas Desa</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">A. Sebelah Utara</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['northern_boundary'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">B. Sebelah Selatan</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['southern_boundary'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">C. Sebelah Barat</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['western_boundary'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">D. Sebelah Timur</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['eastern_boundary'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">5. Orbitrasi (Jarak Dari Pusat Pemerintahan)</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">A. Jarak Dari Pusat Pemerintahan Kecamatan</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['orbital_from_sub_district_government_center'] ? ($content['orbital_from_sub_district_government_center'] . ' Km') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">B. Jarak Dari Pusat Pemerintahan Kota</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['orbital_from_city_government_center'] ? ($content['orbital_from_city_government_center'] . ' Km') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">C. Jarak Dari Ibukota Kabupaten</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['orbital_from_district_capital'] ? ($content['orbital_from_district_capital'] . ' Km') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">D. Jarak Dari Ibukota Provinsi</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['orbital_from_provincial_capital'] ? ($content['orbital_from_provincial_capital'] . ' Km') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">6. Jumlah Penduduk</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['population'] ? ($content['population'] . ' Jiwa') : '' }}{{ $content['family_card_count'] ? ', ' . ($content['family_card_count'] . ' KK') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">A. Laki-Laki</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['male'] ? ($content['male'] . ' Jiwa') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">B. Perempuan</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['female'] ? ($content['female'] . ' Jiwa') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">C. Usia 0 - 15</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['ages_0_15'] ? ($content['ages_0_15'] . ' Jiwa') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">D. Usia 15 - 55</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['ages_15_55'] ? ($content['ages_15_55'] . ' Jiwa') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">E. Usia 55 ke Atas</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['ages_55_and_over'] ? ($content['ages_55_and_over'] . ' Jiwa') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">7. Mayoritas Pekerjaan</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['majority_of_occupations'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">8. Tingkat Pendidikan Masyarakat</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">A. Lulusan Pendidikan Umum</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">1. Taman Kanak-Kanak</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['kindergarten'] ? ($content['kindergarten'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">2. Sekolah Dasar</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['elementary_school'] ? ($content['elementary_school'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">3. SMP</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['junior_high_school'] ? ($content['junior_high_school'] . ' Orang') : '' }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 mb-4 px-0">
                            <table class="table table-bordered align-middle ">
                                <tr>
                                    <td class="fw-semibold no-border-right w-50 p-4" colspan="2">4. SMA / SMU</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['senior_high_school'] ? ($content['senior_high_school'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">5. Akademi / D1 - D3</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['academy'] ? ($content['academy'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">6. Sarjana</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['bachelors_degree'] ? ($content['bachelors_degree'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">7. Pasca Sarjana</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['postgraduate'] ? ($content['postgraduate'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="4">B. Lulusan Pendidikan Khusus</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">1. Pondok Pesantren</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['islamic_boarding_school'] ? ($content['islamic_boarding_school'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">2. Pendidikan Keagamaan</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['religious_education'] ? ($content['religious_education'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">3. Sekolah Luar Biasa</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['special_schools'] ? ($content['special_schools'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">4. Kursus Keterampilan</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['skill_courses'] ? ($content['skill_courses'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">C. Tidak Lulus / Tidak Sekolah</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['not_graduated'] ? ($content['not_graduated'] . ' Orang') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">9. Jumlah Penduduk Miskin</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['number_of_poor_residents'] ? ($content['number_of_poor_residents'] . ' Jiwa') : '' }}{{ $content['number_family_card_of_poor_residents'] ?  ', ' . ($content['number_family_card_of_poor_residents'] . ' KK') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">10. UMR Kabupaten / Kota</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['district_minimum_wage'] ? ('Rp. ' . $content['district_minimum_wage']) : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="4">11. Sarana Prasarana</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">A. Kantor Desa</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['infrastructure_village_office'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="4">B. Prasarana Kesehatan</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">1. Puskesmas</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['infrastructure_community_health_center'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">2. Poskesdes</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['infrastructure_village_health_post'] ? ($content['infrastructure_village_health_post'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">3. UKBM (Posyandu, Polindes)</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['infrastructure_ukbm'] ? ($content['infrastructure_ukbm'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="4">C. Prasarana Pendidikan</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">1. Perpusdes</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['educational_infrastructure_village_library'] ? ($content['educational_infrastructure_village_library'] . ' Buah') : '' }}</td>
                                    <td class="fw-semibold no-border-right p-4">5. SMP</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['educational_infrastructure_junior_high_school'] ? ($content['educational_infrastructure_junior_high_school'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">2. PAUD</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['educational_infrastructure_preschool'] ? ($content['educational_infrastructure_preschool'] . ' Buah') : '' }}</td>
                                    <td class="fw-semibold no-border-right p-4">6. SMA</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['educational_infrastructure_senior_high_school'] ? ($content['educational_infrastructure_senior_high_school'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">3. TK</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['educational_infrastructure_kindergarten'] ? ($content['educational_infrastructure_kindergarten'] . ' Buah') : '' }}</td>
                                    <td class="fw-semibold no-border-right p-4">7. PT</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['educational_infrastructure_college'] ? ($content['educational_infrastructure_college'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">4. SD</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['educational_infrastructure_elementary_school'] ? ($content['educational_infrastructure_elementary_school'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="4">D. Prasarana Ibadah</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">1. Masjid</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['religious_facilities_mosque'] ? ($content['religious_facilities_mosque'] . ' Buah') : '' }}</td>
                                    <td class="fw-semibold no-border-right p-4">4. Pura</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['religious_facilities_temple'] ? ($content['religious_facilities_temple'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">2. Mushola</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['religious_facilities_mushola'] ? ($content['religious_facilities_mushola'] . ' Buah') : '' }}</td>
                                    <td class="fw-semibold no-border-right p-4">5. Vihara</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['religious_facilities_vihara'] ? ($content['religious_facilities_vihara'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4">3. Gereja</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['religious_facilities_church'] ? ($content['religious_facilities_church'] . ' Buah') : '' }}</td>
                                    <td class="fw-semibold no-border-right p-4">6. Klenteng</td>
                                    <td class="no-border-left"><span class="px-3">:</span>{{ $content['religious_facilities_chinese_temple'] ? ($content['religious_facilities_chinese_temple'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="4">E. Prasarana Umum</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">1. Olah Raga</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['public_infrastructure_sports'] ? ($content['public_infrastructure_sports'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">2. Kesenian / Budaya</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['public_infrastructure_arts_culture'] ? ($content['public_infrastructure_arts_culture'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">3. Balai Pertemuan</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['public_infrastructure_meeting_hall'] ? ($content['public_infrastructure_meeting_hall'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">4. Sumur Desa</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['public_infrastructure_village_well'] ? ($content['public_infrastructure_village_well'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">5. Pasar Desa</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['public_infrastructure_village_market'] ? ($content['public_infrastructure_village_market'] . ' Buah') : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold no-border-right p-4" colspan="2">6. Lainnya</td>
                                    <td class="no-border-left" colspan="2"><span class="px-3">:</span>{{ $content['public_infrastructure_other'] ? ($content['public_infrastructure_other'] . ' Buah') : '' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="text-justify">
                        {!! $content['description'] !!}
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>
@endsection