<div class="container pt-3 pl-4 pr-4 pb-4">

    <div class="row margin-wrap">

        <div class="col-md-12 border border-black px-3 py-5 label-float rounded">
            <label class="label-custom">
                <h4>Profil</h4>
            </label>

            <div class="row margin-wrap">

                <div class="col-md-12">

                    <form id="profileForm" action="https://kuisioner.com/profile/update" method="POST">

                        <input type="hidden" name="_token" value="5UNAjqkXnU7sC6WRrp35BmYinHBVpCan0k8tXZsj">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row">

                            <div class="col-md-2">
                                <div class="avatar-box mb-3">
                                    <img src="
                                                                    https://kuisioner.com/storage/avatar/MTEwMDE3NTUyOTc1NjU0OTI5Nzky.jpg
                                                                " alt="avatar" class="rounded-circle" width="100px" height="100px">
                                    <svg id="changeProfile" data-image="
                                                                    https://kuisioner.com/storage/avatar/MTEwMDE3NTUyOTc1NjU0OTI5Nzky.jpg
                                                                " data-toggle="modal" data-name="Ahmad Nuzul Azmi" data-target=".modal" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="19.5" cy="19.5" r="19.5" fill="#9440FF" />
                                        <path d="M20 22.2667C21.4139 22.2667 22.56 21.1524 22.56 19.7778C22.56 18.4032 21.4139 17.2889 20 17.2889C18.5862 17.2889 17.44 18.4032 17.44 19.7778C17.44 21.1524 18.5862 22.2667 20 22.2667Z" fill="white" />
                                        <path d="M17.6 12L16.136 13.5556H13.6C12.72 13.5556 12 14.2556 12 15.1111V24.4444C12 25.3 12.72 26 13.6 26H26.4C27.28 26 28 25.3 28 24.4444V15.1111C28 14.2556 27.28 13.5556 26.4 13.5556H23.864L22.4 12H17.6ZM20 23.6667C17.792 23.6667 16 21.9244 16 19.7778C16 17.6311 17.792 15.8889 20 15.8889C22.208 15.8889 24 17.6311 24 19.7778C24 21.9244 22.208 23.6667 20 23.6667Z" fill="white" />
                                    </svg>
                                </div>

                            </div>

                            <div class="col-md-8">
                                <h3><strong>Ahmad Nuzul Azmi</strong></h3>
                                <hr>
                                <h5>pekerjaan belum di isi</h5>
                            </div>

                            <div class="col-md-12 pt-5">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pekerjaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sosial Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="lain-tab" data-toggle="tab" href="#lain" role="tab" aria-controls="lain" aria-selected="false">Lain-lain</a>
                                    </li>
                                </ul>

                                <div class="tab-content card-stack-3" id="myTabContent">
                                    <div class="tab-pane py-5 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="form-group">
                                            <label for="gender">Jenis Kelamin</label>
                                            <select class="custom-select input col-md-4" style="display: block" name="gender" required>
                                                <option value="">Silakan Pilih</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control input col-md-4" name="dateofbirth" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select class="custom-select input col-md-4" style="display: block" name="typeofblood" required>
                                                <option value="">Silakan Pilih</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <textarea name="address" class="form-control input col-md-4" name="address" cols="30" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select onchange="changeProvinsi(this)" class="custom-select input col-md-4" style="display: block" name="province" id="province" required>
                                                <option value="">--- Silakan pilih ---</option>

                                                <option data-id="11" value="ACEH">ACEH</option>
                                                <option data-id="12" value="SUMATERA UTARA">SUMATERA UTARA</option>
                                                <option data-id="13" value="SUMATERA BARAT">SUMATERA BARAT</option>
                                                <option data-id="14" value="RIAU">RIAU</option>
                                                <option data-id="15" value="JAMBI">JAMBI</option>
                                                <option data-id="16" value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                                                <option data-id="17" value="BENGKULU">BENGKULU</option>
                                                <option data-id="18" value="LAMPUNG">LAMPUNG</option>
                                                <option data-id="19" value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                                                <option data-id="21" value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                                                <option data-id="31" value="DKI JAKARTA">DKI JAKARTA</option>
                                                <option data-id="32" value="JAWA BARAT">JAWA BARAT</option>
                                                <option data-id="33" value="JAWA TENGAH">JAWA TENGAH</option>
                                                <option data-id="34" value="DAERAH ISTIMEWA YOGYAKARTA">DAERAH ISTIMEWA YOGYAKARTA</option>
                                                <option data-id="35" value="JAWA TIMUR">JAWA TIMUR</option>
                                                <option data-id="36" value="BANTEN">BANTEN</option>
                                                <option data-id="51" value="BALI">BALI</option>
                                                <option data-id="52" value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                                                <option data-id="53" value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                                                <option data-id="61" value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                                                <option data-id="62" value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                                                <option data-id="63" value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                                                <option data-id="64" value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                                                <option data-id="65" value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                                                <option data-id="71" value="SULAWESI UTARA">SULAWESI UTARA</option>
                                                <option data-id="72" value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                                                <option data-id="73" value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                                                <option data-id="74" value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                                                <option data-id="75" value="GORONTALO">GORONTALO</option>
                                                <option data-id="76" value="SULAWESI BARAT">SULAWESI BARAT</option>
                                                <option data-id="81" value="MALUKU">MALUKU</option>
                                                <option data-id="82" value="MALUKU UTARA">MALUKU UTARA</option>
                                                <option data-id="91" value="P A P U A">P A P U A</option>
                                                <option data-id="92" value="PAPUA BARAT">PAPUA BARAT</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota / Kabupaten</label>
                                            <select onchange="changeCity(this)" class="custom-select input col-md-4" style="display: block" name="city" id="city" required>
                                                <option value="">--- Silakan pilih ---</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select class="custom-select input col-md-4" style="display: block" name="subdistrict" id="subdistrict" required>
                                                <option value="">--- Silakan pilih ---</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 mt-5 d-flex justify-content-end">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-purple-dark py-3 px-4 d-flex align-items-center" onclick="changeTab('profile-tab')">
                                                    <svg width="16" height="14" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.01448 1.12073L8.91891 0.270125C9.30186 -0.0900415 9.92111 -0.0900415 10.3 0.270125L18.2198 7.71483C18.6028 8.075 18.6028 8.6574 18.2198 9.01373L10.3 16.4623C9.91703 16.8224 9.29779 16.8224 8.91891 16.4623L8.01448 15.6117C7.62745 15.2477 7.6356 14.6538 8.03078 14.2974L12.9399 9.89882H1.23128C0.689442 9.89882 0.253525 9.48884 0.253525 8.97925V7.75315C0.253525 7.24355 0.689442 6.83358 1.23128 6.83358H12.9399L8.03078 2.43495C7.63152 2.07862 7.62338 1.48473 8.01448 1.12073Z" fill="white" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane py-5 card-stack-3 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <select class="custom-select input col-md-4" style="display: block" name="job" required>
                                                <option value="">Silakan Pilih</option>

                                                <option value="Tidak memiliki pekerjaan">Tidak memiliki pekerjaan</option>
                                                <option value="Freelancer">Freelancer</option>
                                                <option value="Siswa">Siswa</option>
                                                <option value="Mahasiswa">Mahasiswa</option>
                                                <option value="Pengusaha">Pengusaha</option>
                                                <option value="Pegawai BUMN">Pegawai BUMN</option>
                                                <option value="Tenaga Medis">Tenaga Medis</option>
                                                <option value="Buruh">Buruh</option>
                                                <option value="Investor">Investor</option>
                                                <option value="Pegawai startup">Pegawai startup</option>
                                                <option value="Pengusaha E-Commerce">Pengusaha E-Commerce</option>
                                                <option value="Content creator">Content creator</option>
                                                <option value="Dosen">Dosen</option>
                                                <option value="Guru">Guru</option>
                                                <option value="Entrepreneur">Entrepreneur</option>
                                                <option value="Karyawan swasta">Karyawan swasta</option>
                                                <option value="Lainnya">Lainnya</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Penghasilan</label>
                                            <select class="custom-select input col-md-4" style="display: block" name="income_type" required>
                                                <option value="">--Silakan Pilih---</option>

                                                <option value="1">Dibawah 1 juta</option>
                                                <option value="2">1 juta sampai 5 juta</option>
                                                <option value="3">5 juta sampai 10 juta</option>
                                                <option value="4">10 juta sampai 50 juta</option>
                                                <option value="5">Diatas 50 juta</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Institusi (tidak wajib)</label>
                                            <input type="text" class="form-control input col-md-4" name="company_name" value="">
                                        </div>


                                        <div class="col-md-12 mt-5 d-flex justify-content-end">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-purple-dark py-3 px-4 d-flex align-items-center" onclick="changeTab('home-tab')">
                                                    <svg width="16" height="14" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4926 15.6117L9.58816 16.4623C9.2052 16.8225 8.58596 16.8225 8.20708 16.4623L0.287236 9.01759C-0.0957196 8.65742 -0.0957195 8.07502 0.287236 7.71869L8.20708 0.27015C8.59003 -0.0900163 9.20928 -0.0900162 9.58816 0.27015L10.4926 1.12075C10.8796 1.48475 10.8715 2.07864 10.4763 2.43498L5.56713 6.8336L17.2758 6.8336C17.8176 6.8336 18.2535 7.24358 18.2535 7.75317L18.2535 8.97927C18.2535 9.48887 17.8176 9.89885 17.2758 9.89885L5.56713 9.89884L10.4763 14.2975C10.8755 14.6538 10.8837 15.2477 10.4926 15.6117Z" fill="white" />
                                                    </svg>
                                                </button>
                                                <button type="button" class="btn btn-purple-dark py-3 px-4 d-flex align-items-center" onclick="changeTab('contact-tab')">
                                                    <svg width="16" height="14" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.01448 1.12073L8.91891 0.270125C9.30186 -0.0900415 9.92111 -0.0900415 10.3 0.270125L18.2198 7.71483C18.6028 8.075 18.6028 8.6574 18.2198 9.01373L10.3 16.4623C9.91703 16.8224 9.29779 16.8224 8.91891 16.4623L8.01448 15.6117C7.62745 15.2477 7.6356 14.6538 8.03078 14.2974L12.9399 9.89882H1.23128C0.689442 9.89882 0.253525 9.48884 0.253525 8.97925V7.75315C0.253525 7.24355 0.689442 6.83358 1.23128 6.83358H12.9399L8.03078 2.43495C7.63152 2.07862 7.62338 1.48473 8.01448 1.12073Z" fill="white" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade card-stack-3 py-5" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="form-group">
                                            <label>Alamat Email</label>
                                            <input type="text" class="form-control input col-md-4" name="email" value="ahmadnuzul18ti@mahasiswa.pcr.ac.id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Handphone (Whatsapp)</label>
                                            <input type="text" class="form-control input col-md-4" name="phone" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Username Instagram</label>
                                            <input type="text" class="form-control col-md-4" name="instagram" value="" required>
                                        </div>

                                        <div class="col-md-12 mt-5 d-flex justify-content-end">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-purple-dark py-3 px-4 d-flex align-items-center" onclick="changeTab('profile-tab')">
                                                    <svg width="16" height="14" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4926 15.6117L9.58816 16.4623C9.2052 16.8225 8.58596 16.8225 8.20708 16.4623L0.287236 9.01759C-0.0957196 8.65742 -0.0957195 8.07502 0.287236 7.71869L8.20708 0.27015C8.59003 -0.0900163 9.20928 -0.0900162 9.58816 0.27015L10.4926 1.12075C10.8796 1.48475 10.8715 2.07864 10.4763 2.43498L5.56713 6.8336L17.2758 6.8336C17.8176 6.8336 18.2535 7.24358 18.2535 7.75317L18.2535 8.97927C18.2535 9.48887 17.8176 9.89885 17.2758 9.89885L5.56713 9.89884L10.4763 14.2975C10.8755 14.6538 10.8837 15.2477 10.4926 15.6117Z" fill="white" />
                                                    </svg>
                                                </button>
                                                <button type="button" class="btn btn-purple-dark py-3 px-4 d-flex align-items-center" onclick="changeTab('lain-tab')">
                                                    <svg width="16" height="14" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.01448 1.12073L8.91891 0.270125C9.30186 -0.0900415 9.92111 -0.0900415 10.3 0.270125L18.2198 7.71483C18.6028 8.075 18.6028 8.6574 18.2198 9.01373L10.3 16.4623C9.91703 16.8224 9.29779 16.8224 8.91891 16.4623L8.01448 15.6117C7.62745 15.2477 7.6356 14.6538 8.03078 14.2974L12.9399 9.89882H1.23128C0.689442 9.89882 0.253525 9.48884 0.253525 8.97925V7.75315C0.253525 7.24355 0.689442 6.83358 1.23128 6.83358H12.9399L8.03078 2.43495C7.63152 2.07862 7.62338 1.48473 8.01448 1.12073Z" fill="white" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade py-5" id="lain" role="tabpanel" aria-labelledby="lain-tab">
                                        <div class="form-group">
                                            <label>Apakah anda merokok ?</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="tidak" name="smoking" class="custom-control-input input" value="0" checked required>
                                                <label class="custom-control-label" for="tidak">Tidak</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ya" name="smoking" class="custom-control-input input" value="1" required>
                                                <label class="custom-control-label" for="ya">Iya</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gadget yang anda miliki</label>
                                            <br>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Android" value="Android">
                                                <label class="custom-control-label" for="Android">Android</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Laptop" value="Laptop">
                                                <label class="custom-control-label" for="Laptop">Laptop</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Tablet" value="Tablet">
                                                <label class="custom-control-label" for="Tablet">Tablet</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Macbook" value="Macbook">
                                                <label class="custom-control-label" for="Macbook">Macbook</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="PC-Desktop" value="PC-Desktop">
                                                <label class="custom-control-label" for="PC-Desktop">PC-Desktop</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Iphone" value="Iphone">
                                                <label class="custom-control-label" for="Iphone">Iphone</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Ipad" value="Ipad">
                                                <label class="custom-control-label" for="Ipad">Ipad</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Imac" value="Imac">
                                                <label class="custom-control-label" for="Imac">Imac</label>
                                            </div>

                                        </div>

                                        <div class="col-md-12 mt-5 d-flex justify-content-end">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-purple-dark py-3 px-4 d-flex align-items-center" onclick="changeTab('contact-tab')">
                                                    <svg width="16" height="14" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4926 15.6117L9.58816 16.4623C9.2052 16.8225 8.58596 16.8225 8.20708 16.4623L0.287236 9.01759C-0.0957196 8.65742 -0.0957195 8.07502 0.287236 7.71869L8.20708 0.27015C8.59003 -0.0900163 9.20928 -0.0900162 9.58816 0.27015L10.4926 1.12075C10.8796 1.48475 10.8715 2.07864 10.4763 2.43498L5.56713 6.8336L17.2758 6.8336C17.8176 6.8336 18.2535 7.24358 18.2535 7.75317L18.2535 8.97927C18.2535 9.48887 17.8176 9.89885 17.2758 9.89885L5.56713 9.89884L10.4763 14.2975C10.8755 14.6538 10.8837 15.2477 10.4926 15.6117Z" fill="white" />
                                                    </svg>
                                                </button>

                                                <button type="button" class="btn btn-light py-3 px-4 d-flex align-items-center" onclick="checkVerified()">
                                                    <svg width="27" height="12" viewBox="0 0 33 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.47217 17.5456L0.322169 9.74558C-0.10739 9.27697 -0.10739 8.51718 0.322169 8.04852L1.87777 6.35146C2.30732 5.8828 3.00385 5.8828 3.43341 6.35146L8.24999 11.6059L18.5666 0.351457C18.9961 -0.117152 19.6927 -0.117152 20.1222 0.351457L21.6778 2.04852C22.1074 2.51713 22.1074 3.27693 21.6778 3.74558L9.02781 17.5456C8.59821 18.0142 7.90173 18.0142 7.47217 17.5456Z" fill="#00FD65" />
                                                        <path d="M16.7614 15.8593C16.3529 15.4876 16.323 14.8552 16.6947 14.4467L29.1659 0.7396C29.5376 0.331094 30.17 0.301235 30.5785 0.672908L32.4898 2.41185C32.8983 2.78352 32.9282 3.41598 32.5565 3.82449L20.0853 17.5316C19.7136 17.9401 19.0812 17.9699 18.6727 17.5983L16.7614 15.8593Z" fill="#00FD65" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>



                        </div>

                    </form>





                    <!-- Modal -->
                    <form action="https://kuisioner.com/profile/change-photo" id="formEdit" method="POST" enctype="multipart/form-data">
                        <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-white">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <input type="hidden" name="_token" value="5UNAjqkXnU7sC6WRrp35BmYinHBVpCan0k8tXZsj">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id" id="id">

                                        <div class="form-group d-flex justify-content-center">
                                            <img src="" width="100" alt="Photo" class="rounded-circle" id="image">
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input bg-dark" name="photo" id="customFile">
                                                <label class="custom-file-label" for="customFile">Klik disini untuk ganti foto</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="name" id="name" required>
                                        </div>

                                    </div>
                                    <div class="modal-footer border-white d-flex justify-content-start">

                                        <button type="submit" class="btn btn-purple btn-rounded">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                    <!-- /#page-content-wrapper -->

                </div>
                <!-- /#wrapper -->



            </div>




            <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>
            <script src="https://kuisioner.com/vendor/assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <script src="https://kuisioner.com/panel/js/app.js"></script>
            <script>
                var notifIsOpen = 0;

                function sendMarkRequest(id = null) {
                    let _token = '5UNAjqkXnU7sC6WRrp35BmYinHBVpCan0k8tXZsj';
                    return $.ajax("https://kuisioner.com/mark-as-read", {
                        method: 'POST',
                        data: {
                            _token,
                            id
                        }
                    });
                }

                function resetNotif() {
                    $('#btn-notif').removeClass('ring');
                    $('#btn-notif').html(`<svg width="20" height="21" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.18184 18C9.66365 18 10.9032 16.9779 11.1879 15.625H5.17583C5.46062 16.9779 6.70018 18 8.18184 18Z" fill="#3B3B3B"></path>
                    <path d="M13.9194 8.49939C13.9161 8.49939 13.9128 8.50011 13.9095 8.50011C10.7522 8.50011 8.1823 6.01422 8.1823 2.9585C8.1823 2.11846 8.382 1.32438 8.72972 0.610313C8.54964 0.593788 8.36717 0.583496 8.1823 0.583496C5.01928 0.583496 2.45506 3.06446 2.45506 6.12511V8.33225C2.45506 9.89896 1.74569 11.3778 0.501188 12.3959C0.0863529 12.7387 -0.0977685 13.2849 0.0511466 13.8178C0.224631 14.4376 0.857895 14.8335 1.52232 14.8335H14.8382C15.5353 14.8335 16.1924 14.3964 16.3338 13.7354C16.4435 13.224 16.2553 12.7133 15.8454 12.3801C14.6558 11.4151 13.9677 9.9971 13.9194 8.49939Z" fill="#3B3B3B"></path>
                    <path d="M2.44518 8.49941C2.44848 8.49941 2.45177 8.50014 2.45507 8.50014C5.6124 8.50014 8.1823 6.01422 8.1823 2.9585C8.1823 2.11846 7.9826 1.3244 7.63489 0.610336C7.81496 0.59381 7.99743 0.583496 8.1823 0.583496C11.3453 0.583496 13.9095 3.06448 13.9095 6.12514V8.33227C13.9095 9.89898 14.6189 11.3779 15.8634 12.3959C16.2783 12.7387 16.4624 13.2849 16.3135 13.8178C16.14 14.4376 15.5067 14.8335 14.8423 14.8335H1.52637C0.829286 14.8335 0.172202 14.3965 0.0307773 13.7355C-0.0788866 13.224 0.10928 12.7134 0.519171 12.3801C1.70884 11.4151 2.39694 9.99712 2.44518 8.49941Z" fill="#3B3B3B"></path>
                    </svg>`);
                    $('.notification').html(`<div style="max-height: 340px;overflow-y:auto">
                            <div href="#" class="text-dark pb-1">
                        <div class="subtitle">
                            Notifikasi masih kosong
                        </div>
                    </div>
                    </div>`);
                }

                $(function() {
                    $('.mark-as-read').click(function() {
                        let request = sendMarkRequest($(this).data('id'));
                        request.done((res) => {
                            $(this).parent().parent().remove();
                            if (res.count < 1) {
                                resetNotif();
                            }
                        });
                    });
                    $('#mark-all').click(function() {
                        let request = sendMarkRequest();
                        request.done(() => {
                            $('div.alert').remove();
                        })
                    });

                });
            </script>



            <script>
                function changeProvinsi(event) {
                    let province_id = event.options[event.selectedIndex].dataset.id;
                    let city_url = "https://kuisioner.com/region/city/:id";
                    city_url = city_url.replace(':id', province_id);
                    optionComponent(city_url, 'city');
                    $(`#subdistrict`).html('<option value="">--- Silakan pilih ---</option>');
                }

                function changeCity(event) {
                    let city_id = event.options[event.selectedIndex].dataset.id;
                    let subdistrict_url = "https://kuisioner.com/region/subdistrict/:id";
                    subdistrict_url = subdistrict_url.replace(':id', city_id);
                    optionComponent(subdistrict_url, 'subdistrict');
                }

                function optionComponent(urlAccess, elementId) {
                    $.ajax({
                        url: urlAccess,
                        method: "GET",
                        success: function(res) {
                            $(`#${elementId}`).html('<option value="">--- Silakan pilih ---</option>');

                            res.forEach(element => {
                                $(`#${elementId}`).append(`
                    <option data-id="${element.id}" value="${element.nama}">${element.nama}</option>
                `);
                            });
                        }
                    });
                }

                function checkVerified() {
                    Swal.fire({
                        title: 'Apakah anda sudah yakin memberikan data yang sebenarnya?',
                        text: "Data yang sudah disimpan tidak dapat diubah kembali!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#6009a4',
                        cancelButtonColor: '#e9e9e9',
                        confirmButtonText: 'Simpan',
                        cancelButtonText: 'Batal',
                    }).then((result) => {
                        if (result.value) {
                            if (checkNull()) {
                                $('#profileForm').submit();
                            }
                        }
                    });
                }

                function checkNull() {

                    let allLabel = "";
                    $('.input[required]').each(function(e) {
                        if ($(this).val() == '') {
                            let label = $(this).parent().find('label').html();
                            allLabel += label + " , ";
                        }
                    });

                    if ($('.check:checked').length) {

                    } else {
                        let label = $('.check').attr('title');
                        allLabel += label + " , ";
                    }
                    if (allLabel != "") {
                        Swal.fire({
                            title: 'Perhatian',
                            html: `${allLabel}<br><br> Harus diisi!`,
                            type: 'warning',
                            confirmButtonColor: '#6009a4',
                        });
                        return false;
                    } else {
                        return true;
                    }
                }

                function changeTab(idTab) {
                    $(`#${idTab}`).tab('show');
                }

                $('.receive').on('click', e => {
                    let taskId = $(".receive").data('task_id')
                    console.log(taskId)
                    const TYPE = 'receive';
                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: 'Menerima bukti pembayaran ini!',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#6009a4',
                        cancelButtonColor: '#e9e9e9',
                        confirmButtonText: 'Terima!',
                        html: false,
                        preConfirm: e => {
                            return new Promise(resolve => {
                                setTimeout(() => {
                                    resolve();
                                }, 50);
                            });
                        }
                    }).then(result => {
                        if (result.value) {

                            ajaxVerifyPayment(taskId, TYPE)
                            // result.dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire('Cancelled', 'Your imaginary file is safe :)', 'error');
                        }
                    });
                });


                $('.reject').on('click', e => {
                    let taskId = $(".reject").data('task_id')
                    const TYPE = 'reject';
                    toast({
                        title: 'Apakah anda yakin?',
                        text: 'Menolak bukti pembayaran ini!',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d26a5c',
                        confirmButtonText: 'Tolak!',
                        html: false,
                        preConfirm: e => {
                            return new Promise(resolve => {
                                setTimeout(() => {
                                    resolve();
                                }, 50);
                            });
                        }
                    }).then(result => {
                        if (result.value) {
                            ajaxVerifyPayment(taskId, TYPE)
                            // result.dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                        } else if (result.dismiss === 'cancel') {
                            toast('Cancelled', 'Your imaginary file is safe :)', 'error');
                        }
                    });
                });

                function ajaxVerifyPayment(id, type) {
                    const URL = "https://kuisioner.com/verify/payments"
                    $.ajax({
                        type: "patch",
                        url: URL,
                        data: {
                            task_id: id,
                            type: type
                        },
                        success: function(data) {
                            window.location.href = data
                        },
                        error: function(data) {

                        }
                    })
                }

                $('#changeProfile').on('click', function() {
                    let name = $(this).data('name');
                    let image = $(this).data('image');
                    $('#name').val(name);
                    $('#image').attr('src', image);
                });

                $(".custom-file-input").on("change", function(e) {
                    let image = URL.createObjectURL(e.target.files[0]);
                    $('#image').attr('src', image);
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script>