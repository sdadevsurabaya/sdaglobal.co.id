@extends('front/layout/layout')
@section('pageStyles')
<style>
    .page-banner {
        background-position-x: 70%;
        background-image: linear-gradient(to top, white, transparent, transparent), url({{asset('assets/img/industries/banner-industries.jpg')}});
    }

    @media (min-width: 992px) {
        .page-banner {
            background-image: url({{asset('assets/img/industries/banner-industries.jpg')}});
        }
    }

    @media (min-width: 992px) {
        .card {
            position: relative;
        }

        .card-body {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: calc(1rem + .5vw);
            transform: translate(-50%, -50%) scale(.75);
            opacity: 0;
            transition: all .36s ease-in-out;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .industries-list a:hover .card-body {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
    }
</style>
@endsection
@section('content')
<section class="p-0">
    <div class="page-banner">
        <div class="container h-100">
            <div class="row row-cols-lg-auto h-100 align-items-end align-items-lg-center">
                <div class="col py-5">
                    <div class="p-4 bg-lg-primary text-primary text-lg-light px-md-5">
                        <h5 class="display-3 text-center text-lg-start">
                            ANDALAN
                            <br class="d-none d-lg-inline"><b class="fw-bold">BERBAGAI INDUSTRI</b>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="industries-list row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3">

            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/agriculture.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">PERTANIAN</b>
                            </h5>
                            <p class="card-text small">
                                Misi utama kami adalah menyediakan solusi paling tepat dan efektif guna memaksimalkan produktivitas serta profitabilitas usaha pertanian Anda.
                                <br><br>
                                Selain berbagai selang, sabuk mesin, dan sistem hidraulik, kami juga menyediakan layanan pemeliharaan prima guna menjaga performa peralatan Anda tetap optimal. Kami paham pentingnya efisiensi, dan karena itu kami menyediakan layanan tepat waktu dan penuh komitmen. Di SDA Global kami menjunjung tinggi nilai kepercayaan dan kerja sama dalam jangka panjang. Untuk itu, kami akan terus memberikan lini produk dan pelayanan terbaik.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/automotive.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">OTOMOTIF</b>
                            </h5>
                            <p class="card-text small">
                                Komitmen kami bertumpu pada kualitas, layanan, serta performa otomotif yang andal. Untuk itu kami hanya menyuplai material-material terbaik yang diuji dan diawasi langsung oleh tim teknis ahli dengan standar dan hasil kerja terbaik. Guna menghadapi tantangan industri di masa depan, percayakan performa dan pemeliharaan otomotif Anda kepada kami.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/construction.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">KONSTRUKSI</b>
                            </h5>
                            <p class="card-text small">
                                Peralatan konstruksi kerap menghadapi lingkungan yang keras dan berbahaya, seperti terik matahari, paparan bahan kimia, abrasi, sampai risiko cuaca, berimbas pada menurunnya fungsi dan berujung kerugian. Dengan komitmen tinggi pada efisiensi operasional, SDA Global menyediakan produk-produk prima demi performa proyek yang lebih baik. Kami percaya bahwa efektivitas dan efisiensi pekerjaan sangat penting dalam industri konstruksi, termasuk bagi bisnis Anda. Bersama kami, temukan solusi untuk setiap tantangan proyek yang Anda hadapi.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/consumer-product.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">MANUFAKTUR PRODUK KONSUMEN/FMCG</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global bertekad menyediakan solusi industrial lengkap untuk berbagai sektor, termasuk manufaktur produk konsumen yang bergerak cepat (FMCG). Kami menyediakan solusi operasional yang andal, termasuk peralatan produksi, sistem kerja mesin beserta pemeliharaannya. Produk-produk kami seperti sabuk mesin dan selang-selang industri dirancang dan diuji khusus untuk performa tinggi dan operasi terus-menerus, memaksimalkan keuntungan ekonomi dalam jangka panjang. Percayakan pada produk-produk kami menyelesaikan proses manufaktur secara cepat dan efektif.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/f&b.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">MAKANAN & MINUMAN</b>
                            </h5>
                            <p class="card-text small">
                                Kami menjadi simbol inovasi dalam menunjang industri manufaktur yang terus tumbuh. Berbagai inovasi dalam bentuk sabuk konveyor, selang industrial food grade, sampai transmisi mesin telah lama dipercayakan pada kami. Lini produk kami dirancang khusus untuk performa tinggi, minim pemeliharaan, dan minim risiko kontaminasi. Semua demi meningkatkan standar industri yang semakin berkualitas, efisien, dan aman.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/manufacturing.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">MANUFAKTUR UMUM</b>
                            </h5>
                            <p class="card-text small">
                                Memahami berbagai tantangan produksi dan operasi membantu kita menemukan solusi, memperbaiki efisiensi, dan memitigasi masalah. Misi kami adalah membantu Anda menyelesaikan tugas manufaktur secara paripurna, termasuk dalam hal perencanaan, penganggaran, dan pelaksanaan.
                                <br><br>
                                Komitmen setia kami pada hasil terbaik terbukti dengan pemeliharaan teratur pada rantai dan sabuk-sabuk mesin, sistem hidraulik, serta evaluasi standar keamanan menyeluruh.
                                <br><br>
                                SDA Global setia mengiringi Anda dalam menyediakan solusi manufaktur terbaik bagi pertumbuhan bisnis Anda.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/industiral.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">ALAT BERAT INDUSTRIAL</b>
                            </h5>
                            <p class="card-text small">
                                Dalam sektor alat beral industrial yang terus mengalami transformasi, kami hadir sebagai solusi meningkatkan efisiensi dan meminimalisir gangguan operasi. Produk-produk kami dirancang untuk kebutuhan serbacepat ini, memastikan produktivitas serta efisiensi dalam setiap proses industri. Tingkatkan output operasional, atasi setiap tantangan Anda bersama kami.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/hvac.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">PENDINGIN & SIRKULASI UDARA (HVAC)</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global menyediakan solusi sistem pengaturan suhu & sirkulasi udara yang tidak hanya menekan biaya energi, tetapi juga memastikan operasi berkesinambungan dan terpadu. Solusi kami membantu Anda menekan biaya dan kebutuhan pemeliharaan sekecil mungkin.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/garden.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">PEMELIHARAAN TAMAN DAN LANSEKAP</b>
                            </h5>
                            <p class="card-text small">
                                Kami memahami pentingnya peralatan pemeliharaan outdoor, termasuk pertamanan dan lansekap. Kami bermitra dengan produsen alat pertamanan paling mutakhir guna mempercantik taman dan lansekap Anda. Percantik semuanya dengan solusi alat pertamanan paling lengkap bersama kami.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/machines.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">MESIN DAN PERALATAN PRESISI</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global telah lama diakui untuk meningkatkan kapasitas industrial dengan sistem power transmisi yang tepat guna dan presisi. Selain itu, juga diakui sebagai  konsultan utama penyediaan solusi hidraulik yang dibutuhkan banyak industri. Dengan tingkat presisi yang andal, alat-alat kami terintegrasi baik dan dirancang khusus untuk berbagai peralatan.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/micromobility.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">Mikromobilitas</b>
                            </h5>
                            <p class="card-text small">
                                Lini produk sabuk mesin kami jadi tumpuan revolusi industri kendaraan pribadi dan mobilitas mikro yang mengubah gaya berkendara masyarakat umum. Sepeda, sepeda listrik atau e-skuter jadi tren baru transportasi pribadi yang ramah lingkungan dan ekonomis. Kami menyediakan solusi sabuk penggerak yang mengubah konsep Anda menjadi produk utuh siap pakai.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/mining.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">Pertambangan</b>
                            </h5>
                            <p class="card-text small">
                                Industri pertambangan global lekat dengan berbagai tantangan operasional, dan kami paham cara mengatasinya. Solusi pertambangan dari SDA dirancang khusus untuk meningkatkan produktivitas hasil tambang, standar keamanan, serta efisiensi. Penerapannya disempurnakan dengan pelayanan terpadu di lokasi tambang. Lini produk pertambangan kami meliputi selang hidraulik heavy duty, coupling, dan solusi transmisi yang dirancang khusus untuk medan pekerjaan berat dan operasi yang menantang.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/oil.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">MINYAK & GAS</b>
                            </h5>
                            <p class="card-text small">
                                Tren global mulai bergeser pada pemenuhan kebutuhan energi baru & terbarukan. Pemenuhan teknologi seperti pengeboran darat dan penyaluran gas alam semakin memerlukan teknologi produktivitas di berbagai sektor. Kami menyediakan alat-alat penting guna mendukung operasi spesifik semacam ini.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/sports.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">Kendaraan Sport</b>
                            </h5>
                            <p class="card-text small">
                                Sistem hidraulik dan transmisi penggerak berperan krusial dalam meningkatkan performa kendaraan sport dan mesin olahraga ekstrem, seperti ATV, motor cross, dan motor salju. Sistem terpadu kami memastikan kinerja kendaraan sport dalam menghadapi berbagai rintangan alam dan arena, meningkatkan performa serta kenyamanan berkendara.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/truck.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">Truk & Bus</b>
                            </h5>
                            <p class="card-text small">
                                Kami bekerja sama dengan sektor  kendaraan berat, komersial, dan industrial dengan menyediakan sabuk penggerak, selang mesin, dan komponen sistem yang lengkap guna menjamin bisnis transportasi dan logistik Anda berjalan baik, efisien dalam biaya, serta mengoptimalkan sumber daya yang ada.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('.nav-industries').addClass('active');
</script>
@endsection
