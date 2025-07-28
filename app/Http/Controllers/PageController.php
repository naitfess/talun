<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\VillageOfficial;
use App\Models\VillageInstitution;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function beranda()
    {
        $data['page_title'] = 'Beranda';
        $data['village_head'] = \App\Models\VillageOfficial::where('position_id', 1)->first();
        $data['page'] = Page::where('slug', 'beranda')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.homepage', $data);
    }
    
    public function sejarahDesa()
    {
        $data['page_title'] = 'Sejarah Desa';
        $data['page'] = Page::where('slug', 'sejarah-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.about-us', $data);
    }
    
    public function visiMisi()
    {
        $data['page_title'] = 'Visi Misi';
        $data['page'] = Page::where('slug', 'visi-misi')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.page-detail', $data);
    }
    
    public function monografiDesa()
    {
        $data['page_title'] = 'Monografi Desa';
        $data['page'] = Page::where('slug', 'monografi-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        // dd($data['content']);
        return view('admin.pages.geographic-demographic', $data);
    }
    
    public function strukturOrganisasi()
    {
        $data['page_title'] = 'Struktur Organisasi';
        $data['page'] = Page::where('slug', 'struktur-organisasi')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.page-detail', $data);
    }
    
    public function perangkatDesa()
    {
        $data['page_title'] = 'Perangkat Desa';
        $data['villageOfficials'] = VillageOfficial::query()
        ->select('name', 'position_id')
        ->with('position')
        ->get();
        $data['page'] = Page::where('slug', 'perangkat-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.page-detail', $data);
    }
    
    public function lembagaDesa()
    {   
        $data['page_title'] = 'Lembaga Desa';
        $data['villageInstitutions'] = VillageInstitution::query()
        ->select('name')
        ->get();
        $data['page'] = Page::where('slug', 'lembaga-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.page-detail', $data);
    }

    public function badanPermusyawaratanDesa()
    {
        $data['page_title'] = 'Badan Permusyawaratan Desa';
        $data['page'] = Page::where('slug', 'badan-permusyawaratan-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.page-detail', $data);
    }
    
    public function hubungiKami()
    {
        $data['page_title'] = 'Hubungi Kami';
        $data['page'] = Page::where('slug', 'hubungi-kami')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.contact', $data);
    }
    
    public function kesehatan()
    {
        $data['page_title'] = 'Kesehatan';
        $data['page'] = Page::where('slug', 'kesehatan')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('admin.pages.page-detail', $data);
    }
    
    //
    
    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        
        switch($page->slug){
            case 'hubungi-kami':
                $rules = [
                    'subtitle' => 'required|string|max:255',
                    'maps_url' => 'required|url',
                    'description' => 'required|string',
                ];
                break;
                case 'beranda':
                    $rules = [
                        'kd_description' => 'required|string',
                        'tt_subtitle' => 'required|string|max:255',
                        'tt_title_1' => 'required|string|max:255',
                        'tt_description_1' => 'required|string',
                        'tt_url_1' => 'required|string|max:255',
                        'tt_title_2' => 'required|string|max:255',
                        'tt_description_2' => 'required|string',
                        'tt_url_2' => 'required|string|max:255',
                        'tt_title_3' => 'required|string|max:255',
                        'tt_description_3' => 'required|string',
                        'tt_url_3' => 'required|string|max:255',
                        'sdt_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                        'sdt_subtitle' => 'required|string|max:255',
                        'sdt_population' => 'required|numeric',
                        'sdt_description' => 'required|string',
                        'vp_thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                        'vp_subtitle' => 'required|string|max:255',
                        'vp_video_url' => 'required|url|max:255',
                    ];
                    break;
                    case 'sejarah-desa':
                        $rules = [
                            'sd_image1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                            'sd_image2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                            'sd_subtitle' => 'required|string|max:255',
                            'sd_description' => 'required|string',
                            'pu_subtitle' => 'required|string|max:255',
                            'pu_image1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                            'pu_potension1' => 'required|string|max:255',
                            'pu_image2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                            'pu_potension2' => 'required|string|max:255',
                            'pu_image3' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                            'pu_potension3' => 'required|string|max:255',
                            'pu_image4' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                            'pu_potension4' => 'required|string|max:255',
                            'sd_population' => 'required|numeric',
                            'sd_subdistrict' => 'required|numeric',
                            'sd_rw' => 'required|numeric',
                            'sd_rt' => 'required|numeric',
                            'bdt_subtitle' => 'required|string|max:255',
                            'bdt_1' => 'required|string|max:255',
                            'bdt_description1' => 'required|string',
                            'bdt_2' => 'required|string|max:255',
                            'bdt_description2' => 'required|string',
                            'bdt_3' => 'required|string|max:255',
                            'bdt_description3' => 'required|string',
                            'bdt_4' => 'required|string|max:255',
                            'bdt_description4' => 'required|string',
                        ];
                        break;
                        case 'monografi-desa' :
                            $rules = [
                                'subtitle' => 'required|string|max:255',
                                'description' => 'nullable|string',
                                'month' => 'nullable|string|max:255',
                                'year' => 'nullable|string|max:255',
                                'village_name' => 'nullable|string|max:255',
                                'year_of_formation' => 'nullable|string|max:255',
                                'legal_basis_of_formation' => 'nullable|string|max:255',
                                'area_code_number' => 'nullable|string|max:255',
                                'postal_code_number' => 'nullable|numeric',
                                'sub_district' => 'nullable|string|max:255',
                                'district' => 'nullable|string|max:255',
                                'province' => 'nullable|string|max:255',
                                'village_typology' => 'nullable|string|max:255',
                                'village_development_level' => 'nullable|string|max:255',
                                'area' => 'nullable|string|max:255',
                                'northern_boundary' => 'nullable|string|max:255',
                                'southern_boundary' => 'nullable|string|max:255',
                                'western_boundary' => 'nullable|string|max:255',
                                'eastern_boundary' => 'nullable|string|max:255',
                                'orbital_from_sub_district_government_center' => 'nullable|string|max:255',
                                'orbital_from_city_government_center' => 'nullable|string|max:255',
                                'orbital_from_district_capital' => 'nullable|string|max:255',
                                'orbital_from_provincial_capital' => 'nullable|string|max:255',
                                'population' => 'nullable|numeric',
                                'family_card_count' => 'nullable|numeric',
                                'male' => 'nullable|numeric',
                                'female' => 'nullable|numeric',
                                'ages_0_15' => 'nullable|numeric',
                                'ages_15_55' => 'nullable|numeric',
                                'ages_55_and_over' => 'nullable|numeric',
                                'majority_of_occupations' => 'nullable|string',
                                'kindergarten' => 'nullable|numeric',
                                'elementary_school' => 'nullable|numeric',
                                'junior_high_school' => 'nullable|numeric',
                                'senior_high_school' => 'nullable|numeric',
                                'academy' => 'nullable|numeric',
                                'bachelors_degree' => 'nullable|numeric',
                                'postgraduate' => 'nullable|numeric',
                                'islamic_boarding_school' => 'nullable|numeric',
                                'religious_education' => 'nullable|numeric',
                                'special_schools' => 'nullable|numeric',
                                'skill_courses' => 'nullable|numeric',
                                'not_graduated' => 'nullable|numeric',
                                'number_of_poor_residents' => 'nullable|numeric',
                                'number_family_card_of_poor_residents' => 'nullable|numeric',
                                'district_minimum_wage' => 'nullable|numeric',
                                'infrastructure_village_office' => 'nullable|string|max:255',
                                'infrastructure_community_health_center' => 'nullable|string|max:255',
                                'infrastructure_village_health_post' => 'nullable|numeric',
                                'infrastructure_ukbm' => 'nullable|numeric',
                                'educational_infrastructure_village_library' => 'nullable|numeric',
                                'educational_infrastructure_preschool' => 'nullable|numeric',
                                'educational_infrastructure_kindergarten' => 'nullable|numeric',
                                'educational_infrastructure_elementary_school' => 'nullable|numeric',
                                'educational_infrastructure_junior_high_school' => 'nullable|numeric',
                                'educational_infrastructure_senior_high_school' => 'nullable|numeric',
                                'educational_infrastructure_college' => 'nullable|numeric',
                                'religious_facilities_mosque' => 'nullable|numeric',
                                'religious_facilities_mushola' => 'nullable|numeric',
                                'religious_facilities_church' => 'nullable|numeric',
                                'religious_facilities_temple' => 'nullable|numeric',
                                'religious_facilities_vihara' => 'nullable|numeric',
                                'religious_facilities_chinese_temple' => 'nullable|numeric',
                                'public_infrastructure_sports' => 'nullable|numeric',
                                'public_infrastructure_arts_culture' => 'nullable|numeric',
                                'public_infrastructure_meeting_hall' => 'nullable|numeric',
                                'public_infrastructure_village_well' => 'nullable|numeric',
                                'public_infrastructure_village_market' => 'nullable|numeric',
                                'public_infrastructure_other' => 'nullable|numeric',
                            ];
                            break;
                            default:{
                                $rules = [
                                    'subtitle' => 'required|string|max:255',
                                    'description' => 'required|string',
                                ];
                            }
                        }
                        
                        $validator = Validator::make($request->all(), $rules);
                        if ($validator->fails()) {
                            return redirect()->back()->withErrors($validator)->withInput();
                        }
                        switch($page->slug){
                            case 'hubungi-kami':
                                $data = [
                                    'content' => json_encode([
                                        'subtitle' => $request->input('subtitle'),
                                        'maps_url' => $request->input('maps_url'),
                                        'description' => $request->input('description'),
                                    ]),
                                    'edited_by' => Auth::id(),
                                ];
                                break;
                                case 'beranda':
                                    $content = json_decode($page->content, true);
                                    $sdt_image = $request->file('sdt_image') ? Storage::disk('public_upload')->put('images', $request->file('sdt_image')) : $content['sdt_image'];
                                    $vp_thumbnail = $request->file('vp_thumbnail') ? Storage::disk('public_upload')->put('images', $request->file('vp_thumbnail')) : $content['vp_thumbnail'];
                                    
                                    $data = [
                                        'content' => json_encode([
                                            'kd_description' => $request->input('kd_description'),
                                            'tt_subtitle' => $request->input('tt_subtitle'),
                                            'tt_title_1' => $request->input('tt_title_1'),
                                            'tt_description_1' => $request->input('tt_description_1'),
                                            'tt_url_1' => $request->input('tt_url_1'),
                                            'tt_title_2' => $request->input('tt_title_2'),
                                            'tt_description_2' => $request->input('tt_description_2'),
                                            'tt_url_2' => $request->input('tt_url_2'),
                                            'tt_title_3' => $request->input('tt_title_3'),
                                            'tt_description_3' => $request->input('tt_description_3'),
                                            'tt_url_3' => $request->input('tt_url_3'),
                                            'sdt_image' => $sdt_image,
                                            'sdt_subtitle' => $request->input('sdt_subtitle'),
                                            'sdt_population' => $request->input('sdt_population'),
                                            'sdt_description' => $request->input('sdt_description'),
                                            'vp_thumbnail' => $vp_thumbnail,
                                            'vp_subtitle' => $request->input('vp_subtitle'),
                                            'vp_video_url' => $request->input('vp_video_url'),
                                        ]),
                                    ];
                                    break;
                                    case 'sejarah-desa' :
                                        $content = json_decode($page->content, true);
                                        $sd_image1 = $request->file('sd_image1') ? Storage::disk('public_upload')->put('images', $request->file('sd_image1')) : $content['sd_image1'];
                                        $sd_image2 = $request->file('sd_image2') ? Storage::disk('public_upload')->put('images', $request->file('sd_image2')) : $content['sd_image2'];
                                        $pu_image1 = $request->file('pu_image1') ? Storage::disk('public_upload')->put('images', $request->file('pu_image1')) : $content['pu_image1'];
                                        $pu_image2 = $request->file('pu_image2') ? Storage::disk('public_upload')->put('images', $request->file('pu_image2')) : $content['pu_image2'];
                                        $pu_image3 = $request->file('pu_image3') ? Storage::disk('public_upload')->put('images', $request->file('pu_image3')) : $content['pu_image3'];
                                        $pu_image4 = $request->file('pu_image4') ? Storage::disk('public_upload')->put('images', $request->file('pu_image4')) : $content['pu_image4'];
                                        
                                        $data = [
                                            'content' => json_encode([
                                                'sd_subtitle' => $request->input('sd_subtitle'),
                                                'sd_description' => $request->input('sd_description'),
                                                'sd_population' => $request->input('sd_population'),
                                                'sd_subdistrict' => $request->input('sd_subdistrict'),
                                                'sd_rw' => $request->input('sd_rw'),
                                                'sd_rt' => $request->input('sd_rt'),
                                                'bdt_subtitle' => $request->input('bdt_subtitle'),
                                                'bdt_1' => $request->input('bdt_1'),
                                                'bdt_description1' => $request->input('bdt_description1'),
                                                'bdt_2' => $request->input('bdt_2'),
                                                'bdt_description2' => $request->input('bdt_description2'),
                                                'bdt_3' => $request->input('bdt_3'),
                                                'bdt_description3' => $request->input('bdt_description3'),
                                                'bdt_4' => $request->input('bdt_4'),
                                                'bdt_description4' => $request->input('bdt_description4'),
                                                'sd_image1' => $sd_image1,
                                                'sd_image2' => $sd_image2,
                                                'pu_subtitle' => $request->input('pu_subtitle'),
                                                'pu_image1' => $pu_image1,
                                                'pu_potension1' => $request->input('pu_potension1'),
                                                'pu_image2' => $pu_image2,
                                                'pu_potension2' => $request->input('pu_potension2'),
                                                'pu_image3' => $pu_image3,
                                                'pu_potension3' => $request->input('pu_potension3'),
                                                'pu_image4' => $pu_image4,
                                                'pu_potension4' => $request->input('pu_potension4'),
                                            ]),
                                            'edited_by' => Auth::id(),
                                        ];
                                        break;
                                        case 'monografi-desa' :
                                            $data = [
                                                'content' => json_encode([
                                                    'subtitle' => $request->input('subtitle'),
                                                    'description' => $request->input('description'),
                                                    'month' => $request->input('month'),
                                                    'year' => $request->input('year'),
                                                    'village_name' => $request->input('village_name'),
                                                    'year_of_formation' => $request->input('year_of_formation'),
                                                    'legal_basis_of_formation' => $request->input('legal_basis_of_formation'),
                                                    'area_code_number' => $request->input('area_code_number'),
                                                    'postal_code_number' => $request->input('postal_code_number'),
                                                    'sub_district' => $request->input('sub_district'),
                                                    'district' => $request->input('district'),
                                                    'province' => $request->input('province'),
                                                    'village_typology' => $request->input('village_typology'),
                                                    'village_development_level' => $request->input('village_development_level'),
                                                    'area' => $request->input('area'),
                                                    'northern_boundary' => $request->input('northern_boundary'),
                                                    'southern_boundary' => $request->input('southern_boundary'),
                                                    'western_boundary' => $request->input('western_boundary'),
                                                    'eastern_boundary' => $request->input('eastern_boundary'),
                                                    'orbital_from_sub_district_government_center' => $request->input('orbital_from_sub_district_government_center'),
                                                    'orbital_from_city_government_center' => $request->input('orbital_from_city_government_center'),
                                                    'orbital_from_district_capital' => $request->input('orbital_from_district_capital'),
                                                    'orbital_from_provincial_capital' => $request->input('orbital_from_provincial_capital'),
                                                    'population' => $request->input('population'),
                                                    'family_card_count' => $request->input('family_card_count'),
                                                    'male' => $request->input('male'),
                                                    'female' => $request->input('female'),
                                                    'ages_0_15' => $request->input('ages_0_15'),
                                                    'ages_15_55' => $request->input('ages_15_55'),
                                                    'ages_55_and_over' => $request->input('ages_55_and_over'),
                                                    'majority_of_occupations' => $request->input('majority_of_occupations'),
                                                    'kindergarten' => $request->input('kindergarten'),
                                                    'elementary_school' => $request->input('elementary_school'),
                                                    'junior_high_school' => $request->input('junior_high_school'),
                                                    'senior_high_school' => $request->input('senior_high_school'),
                                                    'academy' => $request->input('academy'),
                                                    'bachelors_degree' => $request->input('bachelors_degree'),
                                                    'postgraduate' => $request->input('postgraduate'),
                                                    'islamic_boarding_school' => $request->input('islamic_boarding_school'),
                                                    'religious_education' => $request->input('religious_education'),
                                                    'special_schools' => $request->input('special_schools'),
                                                    'skill_courses' => $request->input('skill_courses'),
                                                    'not_graduated' => $request->input('not_graduated'),
                                                    'number_of_poor_residents' => $request->input('number_of_poor_residents'),
                                                    'number_family_card_of_poor_residents' => $request->input('number_family_card_of_poor_residents'),
                                                    'district_minimum_wage' => $request->input('district_minimum_wage'),
                                                    'infrastructure_village_office' => $request->input('infrastructure_village_office'),
                                                    'infrastructure_community_health_center' => $request->input('infrastructure_community_health_center'),
                                                    'infrastructure_village_health_post' => $request->input('infrastructure_village_health_post'),
                                                    'infrastructure_ukbm' => $request->input('infrastructure_ukbm'),
                                                    'educational_infrastructure_village_library' => $request->input('educational_infrastructure_village_library'),
                                                    'educational_infrastructure_preschool' => $request->input('educational_infrastructure_preschool'),
                                                    'educational_infrastructure_kindergarten' => $request->input('educational_infrastructure_kindergarten'),
                                                    'educational_infrastructure_elementary_school' => $request->input('educational_infrastructure_elementary_school'),
                                                    'educational_infrastructure_junior_high_school' => $request->input('educational_infrastructure_junior_high_school'),
                                                    'educational_infrastructure_senior_high_school' => $request->input('educational_infrastructure_senior_high_school'),
                                                    'educational_infrastructure_college' => $request->input('educational_infrastructure_college'),
                                                    'religious_facilities_mosque' => $request->input('religious_facilities_mosque'),
                                                    'religious_facilities_mushola' => $request->input('religious_facilities_mushola'),
                                                    'religious_facilities_church' => $request->input('religious_facilities_church'),
                                                    'religious_facilities_temple' => $request->input('religious_facilities_temple'),
                                                    'religious_facilities_vihara' => $request->input('religious_facilities_vihara'),
                                                    'religious_facilities_chinese_temple' => $request->input('religious_facilities_chinese_temple'),
                                                    'public_infrastructure_sports' => $request->input('public_infrastructure_sports'),
                                                    'public_infrastructure_arts_culture' => $request->input('public_infrastructure_arts_culture'),
                                                    'public_infrastructure_meeting_hall' => $request->input('public_infrastructure_meeting_hall'),
                                                    'public_infrastructure_village_well' => $request->input('public_infrastructure_village_well'),
                                                    'public_infrastructure_village_market' => $request->input('public_infrastructure_village_market'),
                                                    'public_infrastructure_other' => $request->input('public_infrastructure_other'),
                                                ]),
                                                'edited_by' => Auth::id(),
                                            ];
                                            break;
                                            default: {
                                                $data = [
                                                    'content' => json_encode([
                                                        'subtitle' => $request->input('subtitle'),
                                                        'description' => $request->input('description'),
                                                    ]),
                                                    'edited_by' => Auth::id(),
                                                ];
                                            }
                                        }
                                        $page->update($data);
                                        
                                        return redirect()->back()->with([
                                            'message' => 'Halaman ' . $page->title . ' berhasil diperbarui!',
                                            'status' => 'success',
                                            'title' => 'Berhasil',
                                        ]);
                                    }
                                }
                                