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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">PERTANIAN</b>
                            </h5>
                            <p class="card-text small">
                                Misi utama kami adalah menyediakan solusi paling tepat dan efektif guna memaksimalkan produktivitas serta profitabilitas usaha pertanian Anda.
                                <br>
                                Selain berbagai selang, sabuk mesin, dan sistem hidraulik, kami juga menyediakan layanan pemeliharaan prima guna menjaga performa peralatan Anda tetap optimal. Kami paham pentingnya efisiensi, dan karena itu kami menyediakan layanan tepat waktu dan penuh komitmen.
                                <br>
                                Di SDA Global kami menjunjung tinggi nilai kepercayaan dan kerja sama dalam jangka panjang. Untuk itu, kami akan terus memberikan lini produk dan pelayanan terbaik.
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">MANUFAKTUR PRODUK KONSUMEN/FMCG</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global bertekad menyediakan solusi industrial lengkap untuk berbagai sektor, termasuk manufaktur produk konsumen yang bergerak cepat (FMCG). Kami menyediakan solusi operasional yang andal, termasuk peralatan produksi, sistem kerja mesin beserta pemeliharaannya. Produk-produk kami seperti sabuk mesin dan selang-selang industri dirancang dan diuji khusus untuk performa tinggi dan operasi terus-menerus, memaksimalkan keuntungan ekonomi dalam jangka panjang.
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">general manufacturing</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">ALAT BERAT INDUSTRIAL</b>
                            </h5>
                            <p class="card-text small">
                                Sektor industrial manufaktur terus mengalami transformasi seiring munculnya beragam teknologi baru. Pertumbuhan positif ini melibatkan sistem pintar dan autonomus berbasis data dan pemrograman cerdas. Integrasi ini terbukti menggenjot sektor manufaktur yang cerdas pula, baik dalam hal peralatan berat, proses, manajemen personel, sampai sistem operasional terpadu. Produk-produk kami dirancang untuk kebutuhan serbacepat ini, memastikan produktivitas serta efisiensi dalam setiap proses industri.
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">PENDINGIN & SIRKULASI UDARA (HVAC)</b>
                            </h5>
                            <p class="card-text small">
                                Pasar sistem pengaturan suhu & sirkulasi udara (HVAC) sedang tumbuh pesat seiring permintaan global dan tumbuhnya inovasi yang memunculkan produk-produk eco-friendly yang mudah digunakan. Manufaktur berhadapan dengan aturan terkait lingkungan, tantangan supply chain pasca-pandemi, dengan menghasilkan produk-produk yang meningkatkan standar kualitas udara.
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">lawn, garden & professional lanscaping</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">machine tools & precission equipment</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">micromobility</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">mining</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">powersports</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
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
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">truck & bus</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
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
