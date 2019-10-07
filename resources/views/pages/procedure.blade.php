@extends('layouts.master')
@section('content')

	<!-- Content -->

    <div class="padding-top-180">
        <div class="container">
            <div class="row">
                <div class="col-md mb-4">
                    <h4>PROCEDURE</h4>
                    <hr/>
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Testing Process</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Buy STEL Document(s)</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0 mb-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-md-6 ml-4">
                                    <h3>A. Registrasi Pengujian</h3>
                                    <p class="mt-3">Customer melakukan beberapa kegiatan sebagai berikut</p>
                                    <ul>
                                        <li>- Melakukan pengisian Form Uji</li>
                                        <li>- Melengkapi Persyaratan, dengan dokumen uji sebagai berikut;
                                            <ol class="numbering-second-procedure ml-4">
                                                <li>Copy SIUP</li>
                                                <li>Copy NPWP</li>
                                                <li>Copy Sistem Manajemen Mutu</li>
                                                <li>Surat Penunjukan dari Prinsipal (agen distributor/pabrikan)</li>
                                                <li>Data Sheet Perangkat</li>
                                            </ol>
                                        </li>
                                    </ul>
                                    <p class="mt-3">Pengujian yang dilakukan</p>
                                    <ol class="numbering-second-procedure ml-4">
                                        <li>Quality Assurance</li>
                                        <li>Voluntary Test</li>
                                        <li>Test Approval</li>
                                    </ol>
                                </div> 
                                <div class="col-md-2">
                                    <img src="images/registrasi.png">
                                </div>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-md-6 ml-4">
                                    <h3>A. Pengajuan Pembelian</h3>
                                    <p class="mt-3">Prosedur ini dilakukan oleh customer yang dilakukan via email dengan melampirkan Judul/Perangkat Uji</p>
                                    <br>
                                    <h3>B. Feedback</h3>
                                    <p class="mt-3">Setelah mendapatkan email pengaduan dari Customer, UREL melakukan Feedback dengan melakukan point sebagai berikut</p>
                                        <ol class="numbering-second-procedure ml-4">
                                            <li>Melakukan konfirmasi nama, kode, versi, dan harga dokumen</li>
                                            <li>Pemberitahuan Rekening Telkom</li>
                                        </ol>
                                    <p class="mt-3">Pengujian yang dilakukan</p>
                                    <br>
                                    <h3>C. Pembayaran</h3>
                                    <p class="mt-3">Prosedur lanjutan ini dilakukannya pembayaran oleh Customer via transfer, dengan melampirkan tanda bukti transfer yang dikirim melalui email.</p>
                                    <br>
                                    <h3>D. Menyiapkan Dokumen yang dibeli</h3>
                                    <p class="mt-3">Setelah dilakukannya pembayaran dan konfirmasinya melalui email. UREL menyiapkan dokumen yang dibeli dengan mebubuhkan watermark.</p>
                                    <br>
                                    <h3>E. Pengiriman Dokumen</h3>
                                    <p class="mt-3">Setelah dokuymen yang diminta telah disiapkan, file-file dokumen pun dukurum oleh UREL melalui email.</p>
                                    <br>
                                    <h3>F. Konfirmasi Penerimaan dokumen</h3>
                                    <p class="mt-3">Setelah semua tahap sesuai, dan menerima dokumen yang telah disiapkan Customer memeberikan konfirmasi bahwa dokumen telah diterima.</p>
                                </div> 
                                <div class="col-md-2">
                                    <img class="mb-5" src="images/buy-stel-step1.png">
                                    <img class="mt-5" src="images/buy-stel-step2.png">
                                </div>
                            </div>   
                        </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get the element with id="defaultOpen" and click on it -->
    <script>
        document.getElementById("defaultOpen").click();
    </script>

@stop
