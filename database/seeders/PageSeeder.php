<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Beranda',
                'slug' => 'beranda',
                'content' => json_encode([
                    'kd_description' => 'Selamat Datang Di Website Resmi Desa Talun, Kecamatan Kemalang, Kabupaten Klaten. Website resmi Desa Talun ini dihadirkan sebagai pintu gerbang informasi yang mudah diakses bagi siapa saja, baik warga desa, pendatang baru, maupun masyarakat luas. Keterbukaan informasi menjadi fondasi utama dalam mewujudkan pemerintahan yang sehat dan partisipatif. Komitmen penuh diberikan untuk terus memperbarui serta menyajikan informasi yang akurat, relevan, dan bermanfaat bagi masyarakat. Sambutan “selamat datang” ini bukan sekadar ucapan formal, melainkan undangan terbuka untuk mengenal lebih jauh desa ini secara transparan dan jujur. Dengan mengakses website ini, pengunjung akan mendapatkan berbagai informasi penting tentang pelayanan publik, program pembangunan, serta berita terkini di Desa Talun. Hal ini menunjukkan komitmen desa untuk mengedepankan keterbukaan dan kejelasan informasi, yang merupakan dasar dari pertanggungjawaban pemerintahan desa. Mari bersama-sama kita manfaatkan ruang digital ini sebagai sarana membangun komunikasi yang lebih baik, memperkuat kolaborasi, dan mendorong partisipasi aktif demi mewujudkan Desa Talun yang maju, mandiri, dan bermartabat.',
                    'tt_subtitle' => 'Sekilas Statistik Desa Talun',
                    'tt_title_1' => '5 Dusun di Desa Talun',
                    'tt_description_1' => 'Desa Talun terdiri dari 5 dusun yang menjadi bagian dari struktur wilayah administratif. Setiap dusun memiliki karakteristik dan potensi tersendiri yang berkontribusi dalam pembangunan desa secara menyeluruh.',
                    'tt_url_1' => '#',
                    'tt_title_2' => '15 RT dan 5 RW',
                    'tt_description_2' => 'Struktur pemerintahan di Desa Talun terbagi ke dalam 15 Rukun Tetangga (RT) dan 5 Rukun Warga (RW). Pembagian ini memudahkan koordinasi antarwarga serta pelaksanaan program kerja dan pelayanan masyarakat.',
                    'tt_url_2' => '#',
                    'tt_title_3' => '12,5 Kilometer Persegi',
                    'tt_description_3' => 'Dengan luas wilayah sekitar 12,5 km², Desa Talun memiliki beragam topografi yang meliputi pemukiman, lahan pertanian, dan kawasan potensial lainnya untuk dikembangkan sebagai sumber ekonomi desa.',
                    'tt_url_3' => '#',
                    'sdt_image' => 'setting/beranda-1.jpg',
                    'sdt_subtitle' => 'Perjalanan Panjang Menuju Kemajuan',
                    'sdt_population' => '700',
                    'sdt_description' => 'Desa Talun memiliki sejarah panjang sebagai daerah pertanian yang subur. Sejak masa kolonial, wilayah ini telah menjadi pusat aktivitas pertanian dengan sistem irigasi tradisional yang masih dipertahankan hingga saat ini. Melalui gotong royong dan semangat kebersamaan, masyarakat Desa Talun terus membangun dan mengembangkan desanya menjadi komunitas yang maju dan sejahtera. Tradisi pertanian yang diwariskan secara turun-temurun tetap dijaga, sambil perlahan-lahan beradaptasi dengan perkembangan teknologi dan kebutuhan zaman. Kini, Desa Talun tidak hanya dikenal sebagai lumbung pangan lokal, tetapi juga sebagai contoh desa yang berhasil menjaga kearifan lokal di tengah modernisasi.',
                    'vp_thumbnail' => 'setting/blank.png',
                    'vp_subtitle' => 'Jelajahi Keindahan dan Potensi dari Desa Talun',
                    'vp_video_url' => 'https://www.youtube.com/watch?v=vkew-1KK3Sc'
                    ])
                ],
                [
                    'title' => 'Sejarah Desa',
                    'slug' => 'sejarah-desa',
                    'content' => json_encode([
                        'sd_image1' => 'setting/blank.png',
                        'sd_image2' => 'setting/blank.png',
                        'sd_subtitle' => 'Sekilas Desa Talun',
                        'sd_description' => 'Desa Talun adalah sebuah desa yang terletak di Kecamatan Kemalang, Kabupaten Klaten, Jawa Tengah. Dengan luas wilayah 12,5 km² dan terdiri dari 5 dusun, 15 RT, dan 5 RW, desa ini menjadi rumah bagi sekitar 1.945 jiwa penduduk yang hidup dalam keharmonisan dan gotong royong. Desa Talun memiliki sejarah panjang sebagai daerah pertanian yang subur dengan warisan budaya yang kaya. Desa Talun adalah sebuah desa yang terletak di Kecamatan Kemalang, Kabupaten Klaten, Jawa Tengah. Dengan luas wilayah 12,5 km² dan terdiri dari 5 dusun, 15 RT, dan 5 RW, desa ini menjadi rumah bagi sekitar 1.945 jiwa penduduk yang hidup dalam keharmonisan dan gotong royong. Desa Talun memiliki sejarah panjang sebagai daerah pertanian yang subur dengan warisan budaya yang kaya. Desa Talun adalah sebuah desa yang terletak di Kecamatan Kemalang, Kabupaten Klaten, Jawa Tengah. Dengan luas wilayah 12,5 km² dan terdiri dari 5 dusun, 15 RT, dan 5 RW, desa ini menjadi rumah bagi sekitar 1.945 jiwa penduduk yang hidup dalam keharmonisan dan gotong royong. Desa Talun memiliki sejarah panjang sebagai daerah pertanian yang subur dengan warisan budaya yang kaya.',
                        'pu_subtitle' => 'Kekayaan Desa Talun',
                        'pu_image1' => 'setting/blank.png',
                        'pu_potension1' => 'Pertanian',
                        'pu_image2' => 'setting/blank.png',
                        'pu_potension2' => 'Perternakan',
                        'pu_image3' => 'setting/blank.png',
                        'pu_potension3' => 'Pertambangan',
                        'pu_image4' => 'setting/blank.png',
                        'pu_potension4' => 'UMKM',
                        'sd_population' => '2199',
                        'sd_subdistrict' => '16',
                        'sd_rw' => '10',
                        'sd_rt' => '41',
                        'bdt_subtitle' => 'Sosial Budaya Desa Talun',
                        'bdt_1' => 'Identitas Wilayah',
                        'bdt_description1' => 'Desa Talun merupakan salah satu desa di Kecamatan Kemalang, Kabupaten Klaten Provinsi Jawa Tengah dengan luas wilayah 201.5315 H  dan terdiri dari 2 Padukuhan. Desa ini terdiri atas beberapa dukuh, yaitu Ngemplak, Sidorejo, Ngagrong, Wukirsari, Tawangmangu, Plosokerep, dan Madat.',
                        'bdt_2' => 'Nilai Gotong Royong',
                        'bdt_description2' => 'Gotong royong atau kerja bakti menjadi kegiatan yang rutin dilakukan oleh seluruh warga, terutama pada acara besar atau perayaan tertentu. Contohnya, pada bulan Suro atau Muharram, desa biasanya mengadakan kegiatan khusus yang melibatkan kerja bakti membersihkan makam dan lingkungan sekitar.',
                        'bdt_3' => 'Adat Istiadat',
                        'bdt_description3' => 'Adat istiadat sadranan yang dilaksanakan di Desa Talun, Kemalang, merupakan tradisi yang sangat penting dalam budaya Jawa, seperti upacara tabur bunga dan doa arwah leluhur. Upacara ini berlangsung pada bulan Ruwah, yang merupakan bulan terakhir dalam penanggalan Jawa menjelang Ramadan.',
                        'bdt_4' => 'Arah Pembangunan Digital',
                        'bdt_description4' => 'Arah pembangunan digital di Desa Talun, Kemalang yaitu terdapat layanan informasi publik berbasis website, peningkatan literasi teknologi masyarakat, dan dukungan terhadap UMKM digital. Bertujuan untuk pemanfaatan teknologi informasi mempercepat pelayanan publik, mendorong keterbukaan informasi.',
                    ]),
                ],
                [
                    'title' => 'Kesehatan',
                    'slug' => 'kesehatan',
                    'content' => json_encode([
                        'subtitle' => 'Get In Touch',
                        'description' => 'tes'
                    ]),
                ],
                [
                    'title' => 'Hubungi Kami',
                    'slug' => 'hubungi-kami',
                    'content' => json_encode([
                        'subtitle' => 'Hubungi Kami Untuk Informasi dan Pelayanan Desa Talun',
                        'maps_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.14085946552!2d110.54!3d-7.71!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6e8b7c3e7e7f%3A0x4027a76e352e240!2sTalun%2C%20Kemalang%2C%20Klaten%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1689012345678!5m2!1sen!2sid',
                        'description' => 'Website Desa Talun, Kemalang tidak hanya dirancang sebagai pusat informasi, tetapi juga sebagai ruang komunikasi yang memungkinkan warga dan pengunjung untuk berkomunikasi secara langsung dengan pemerintah desa. Kami mengakui bahwa transparansi dan kelancaran komunikasi adalah fondasi utama dalam membangun kepercayaan dan memperkuat partisipasi masyarakat. Oleh karena itu, melalui halaman ini, kami menyediakan berbagai saluran resmi yang dapat diakses dengan mudah untuk menjawab kebutuhan informasi, saran, maupun keluhan. Pendekatan kami tidak hanya sebatas menerima masukan, tetapi juga mengedepankan sikap kritis dalam mendengarkan dan menindaklanjuti setiap komunikasi yang diterima. Kami berkomitmen untuk memberikan respons yang tepat dan konstruktif agar setiap aspirasi dapat menjadi bahan evaluasi dan perbaikan bersama. Bagi warga yang mengalami kendala pelayanan, memiliki aspirasi, atau sekadar ingin mengetahui lebih lanjut tentang Desa Talun, tersedia formulir kontak dan informasi lengkap yang dapat digunakan untuk menghubungi perangkat desa secara cepat dan efisien.'
                    ]),
                ],
                [
                    'title' => 'Visi Misi',
                    'slug' => 'visi-misi',
                    'content' => json_encode([
                        'subtitle' => 'Visi Misi Desa Talun',
                        'description' => 'visi misi'
                    ]),
                ],
                [
                    'title' => 'Struktur Organisasi',
                    'slug' => 'struktur-organisasi',
                    'content' => json_encode([
                        'subtitle' => 'Struktur Organisasi Desa Talun',
                        'description' => 'tes'
                    ]),
                ],
                [
                    'title' => 'Perangkat Desa',
                    'slug' => 'perangkat-desa',
                    'content' => json_encode([
                        'subtitle' => 'Perangkat Desa Talun',
                        'description' => 'tes'
                    ]),
                ],
                // [
                //     'title' => 'Lembaga Desa',
                //     'slug' => 'lembaga-desa',
                //     'content' => json_encode([
                //         'subtitle' => 'Lembaga Desa Talun',
                //         'description' => 'tes'
                //     ]),
                // ],
                [
                    'title' => 'Badan Permusyawaratan Desa',
                    'slug' => 'badan-permusyawaratan-desa',
                    'content' => json_encode([
                        'subtitle' => 'Badan Permusyawaratan Desa',
                        'description' => 'tes'
                    ]),
                ],
                [
                    'title' => 'Monografi Desa',
                    'slug' => 'monografi-desa',
                    'content' => json_encode([
                        'subtitle' => 'Monografi Desa Talun',
                        'description' => '',
                        'month' => '',
                        'year' => '',
                        'village_name' => 'Talun',
                        'year_of_formation' => '',
                        'legal_basis_of_formation' => '',
                        'area_code_number' => '33.10.21.20',
                        'postal_code_number' => '',
                        'sub_district' => '',
                        'district' => '',
                        'province' => '',
                        'village_typology' => '',
                        'village_development_level' => '',
                        'area' => '',
                        'northern_boundary' => '',
                        'southern_boundary' => '',
                        'western_boundary' => '',
                        'eastern_boundary' => '',
                        'orbital_from_sub_district_government_center' => '',
                        'orbital_from_city_government_center' => '',
                        'orbital_from_district_capital' => '',
                        'orbital_from_provincial_capital' => '',
                        'population' => '',
                        'family_card_count' => '',
                        'male' => '',
                        'female' => '',
                        'ages_0_15' => '',
                        'ages_15_55' => '',
                        'ages_55_and_over' => '',
                        'majority_of_occupations' => '',
                        'kindergarten' => '',
                        'elementary_school' => '',
                        'junior_high_school' => '',
                        'senior_high_school' => '',
                        'academy' => '',
                        'bachelors_degree' => '',
                        'postgraduate' => '',
                        'islamic_boarding_school' => '',
                        'religious_education' => '',
                        'special_schools' => '',
                        'skill_courses' => '',
                        'not_graduated' => '',
                        'number_of_poor_residents' => '',
                        'number_family_card_of_poor_residents' => '',
                        'district_minimum_wage' => '',
                        'infrastructure_village_office' => '',
                        'infrastructure_community_health_center' => '',
                        'infrastructure_village_health_post' => '',
                        'infrastructure_ukbm' => '',
                        'educational_infrastructure_village_library' => '',
                        'educational_infrastructure_preschool' => '',
                        'educational_infrastructure_kindergarten' => '',
                        'educational_infrastructure_elementary_school' => '',
                        'educational_infrastructure_junior_high_school' => '',
                        'educational_infrastructure_senior_high_school' => '',
                        'educational_infrastructure_college' => '',
                        'religious_facilities_mosque' => '',
                        'religious_facilities_mushola' => '',
                        'religious_facilities_church' => '',
                        'religious_facilities_temple' => '',
                        'religious_facilities_vihara' => '',
                        'religious_facilities_chinese_temple' => '',
                        'public_infrastructure_sports' => '',
                        'public_infrastructure_arts_culture' => '',
                        'public_infrastructure_meeting_hall' => '',
                        'public_infrastructure_village_well' => '',
                        'public_infrastructure_village_market' => '',
                        'public_infrastructure_other' => '',
                    ]),
                ],
                
            ];
            
            foreach ($pages as $page) {
                \App\Models\Page::Create($page);
            }
        }
    }
    