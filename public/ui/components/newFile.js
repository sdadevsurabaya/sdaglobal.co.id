document.write(`
<li class="list-group-item px-0 py-4">
    <div class="row gy-4 gy-lg-0 justify-content-lg-between align-items-lg-center">
        <div class="col col-12 col-lg-auto order-lg-1">
            <h2 class="fs-3 fw-medium text-capitalize">sales counter</h2>
            <div class="opacity-50"><span>Level : Staff <br> Berlaku Hingga : 24 September 2023</span>
            </div>
        </div>
        <div class="col col-12 order-lg-3">
            <div class="collapse fade" id="kualifikasi1">
                <div class="py-lg-4">
                    <div class="mb-4">
                        <h5 class="fs-reset fw-medium">Deskripsi Pekerjaan :</h5>
                        <ul class="marker-circle">
                            <li>Menawarkan produk yang dijual</li>
                            <li>Memberikan pelayanan yang terbaik kepada pelanggan, baik yang datang
                                maupun
                                melalui telepon</li>
                            <li>Menjalin hubungan baik dengan customer</li>
                            <li>Melakukan kegiatan penjualan untuk mencapai target yang diberikan</li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="fs-reset fw-medium">Kualifikasi :</h5>
                        <ul class="marker-circle">
                            <li>Usia Maksimal 35 tahun</li>
                            <li>Pendidikan minimal SMA/K semua jurusan</li>
                            <li>Pengalaman kerja minimal 1 tahun sebagai sales counter</li>
                            <li>Berpenampilan menarik & rapi</li>
                            <li>Memiliki kemampuan negosiasi yang baik</li>
                            <li>Memiliki keterampilan komunikasi yang baik</li>
                            <li>Jujur, disiplin, dan tanggung jawab</li>
                            <li>Dapat mengoperasikan Microsoft office</li>
                            <li>Penempatan Surabaya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-auto order-lg-2">
            <div class="d-flex flex-column gap-2 flex-md-row">
                <button class="btn border w-100 border-dark collapsed" data-bs-toggle="collapse"
                    data-bs-target="#kualifikasi1">Kualifikasi</button>
                <a class="btn border w-100 border-dark" href="career_form1.html">Lamar</a>
            </div>
        </div>
    </div>
</li>
`);
