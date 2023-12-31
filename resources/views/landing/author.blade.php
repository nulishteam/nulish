<x-template.landing bodyClass="blog-author bg-gray-200 bg-gray-200">

    <x-navbars.navs.landingnav titlePage=''></x-navbars.navs.landingnav>

    <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
    <header>
        <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>
    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <!-- START Testimonials w/ user image & text & info -->
        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2"
                                src="../assets/img/logos/logo.png" alt="bruce" loading="lazy">
                        </div>
                        <div class="row py-5">
                            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="mb-0">Nulish Team</h3>
                                    <div class="d-block">
                                        <a type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0"
                                            href="https://www.instagram.com/nulishofficial/">Follow</a>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <span class="h6">323</span>
                                        <span>Posts</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h6">3.5k</span>
                                        <span>Followers</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h6">260</span>
                                        <span>Following</span>
                                    </div>
                                </div>
                                <p class="text-lg mb-0">Proficiency in using the English language, describes the ability
                                    to communicate orally and in writing. For that, don't forget to follow our social
                                    media, so you don't miss updates from us. Thank You.
                                    <br><a href="javascript:;" class="text-info icon-move-right">More about me
                                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->


    <div class="card card-body mx-3 mx-md-4">
        {{-- <span class="mask opacity-8 my-6"
            style="background-image: url('assets/img/logos/Logo-UT.png'); height:140vh; background-attachment:fixed;"> --}}
            <div class="mask opacity-4 rounded-3" style="background-image: url('assets/img/logos/Logo-UT.png');  background-attachment:fixed;">
        </div>
        {{-- </span> --}}
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-5 text-center" style="font-family: 'Times New Roman', Times, serif; font-color:black;">
                            Check My Social Media</h3>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-sm-6 mb-2 my-2">
                        <div class="row">
                            <div class="p-0 position-relative text-center">
                                <a class="d-block blur-shadow-image">
                                    <img src="../assets/img/teams/Rivo.png" alt="img-blur-shadow" width="130px"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div>
                                    <a href="javascript:;" class="font-weight-bold" style="color:black;">Rivo Ardian</a>
                                </div>
                                <span style="color:black;">
                                    Project Leader
                                </span>
                                <div style="color:black;">
                                    Prodi Sistem Informasi
                                </div>
                                {{-- <a type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0"
                                    href="https://www.instagram.com/cak_ipho/">Follow</a> --}}
                                <ul class="d-flex flex-row ms-n3 nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link pe-1" href="https://www.instagram.com/cak_ipho/"
                                            target="_blank">
                                            <i class="fab fa-instagram text-lg opacity-8 " data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Instagram"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pe-1" href="https://github.com/cakipho" target="_blank">
                                            <i class="fab fa-github text-lg opacity-8 text-info"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Github"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2 my-2">

                        <div class="p-0 position-relative text-center">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/teams/Faiz2.png" alt="img-blur-shadow" width="130px"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0 text-center">
                            <h5>
                                <a href="javascript:;" class="font-weight-bold" style="color:black;">Faiz Nurhadi</a>
                            </h5>
                            <span style="color:black;">
                                Technical Leader
                            </span>
                            <div style="color:black;">
                                Prodi Sistem Informasi
                            </div>
                            {{-- <a type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0"
                                    href="https://www.instagram.com/fa_faiz099/">Follow</a> --}}
                            <ul class="d-flex flex-row ms-n3 nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.instagram.com/fa_faiz099/"
                                        target="_blank">
                                        <i class="fab fa-instagram text-lg opacity-8 " data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://github.com/faiz099" target="_blank">
                                        <i class="fab fa-github text-lg opacity-8 text-info" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Github"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2 my-2">

                        <div class="p-0 position-relative text-center">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/teams/Luthfi1.png" alt="img-blur-shadow" width="130px"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0 text-center">
                            <h5>
                                <a href="javascript:;" class="font-weight-bold" style="color:black;">Muhammad Luthfi Hamid</a>
                            </h5>
                            <span style="color:black;">
                                Front End Dev
                            </span>
                            <div style="color:black;">
                                Prodi Sistem Informasi
                            </div>
                            {{-- <a type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0"
                                    href="https://www.instagram.com/lutpi_hamid/">Follow</a> --}}
                            <ul class="d-flex flex-row ms-n3 nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.instagram.com/lutpi_hamid/"
                                        target="_blank">
                                        <i class="fab fa-instagram text-lg opacity-8 " data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://github.com/Luthfi1995" target="_blank">
                                        <i class="fab fa-github text-lg opacity-8 text-info" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Github"></i>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2 my-2">

                        <div class="p-0 position-relative text-center">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/teams/Ade1.png" alt="img-blur-shadow" width="130px"
                                    class="img-fluid shadow border-none opacity-2" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0 text-center">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold"
                                    style="text-decoration: line-through" style="color:black;">Ade Ramdhani</a>
                            </h5>
                            <span style="color:black;">
                                IT Support
                            </span>
                            <div style="color:black;">
                                Prodi Sistem Informasi
                            </div>
                            {{-- <a type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0"
                                    href="https://www.instagram.com/mraderamdani/">Follow</a> --}}
                            <ul class="d-flex flex-row ms-n3 nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.instagram.com/mraderamdani/"
                                        target="_blank">
                                        <i class="fab fa-instagram text-lg opacity-8 " data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://github.com/aderamdani" target="_blank">
                                        <i class="fab fa-github text-lg opacity-8 text-info" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Github"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="row flex-row justify-content-center">

                        <div class="p-0 position-relative text-center">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/teams/dospem1.png" alt="img-blur-shadow" width="130px"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0 text-center">
                            <h5>
                                <a href="javascript:;" class="font-weight-bold" style="color:black;">Dian Nurdiana,
                                    S.Kom.,M.Kom.</a>
                            </h5>

                            <span style="color:black;">
                                Dosen Pembimbing
                            </span>
                            <div style="color:black;">
                                Prodi Sistem Informasi
                            </div>
                            {{-- <a type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0"
                                    href="https://www.instagram.com/lutpi_hamid/">Follow</a> --}}
                            <ul class="d-flex flex-row ms-n3 nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.instagram.com/nulishofficial/"
                                        target="_blank">
                                        <i class="fab fa-instagram text-lg opacity-8 " data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Instagram"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    {{-- <div class="row my-4">
                        <div class="col-lg-3 col-sm-6 mx-auto ">

                            <div class="p-0 position-relative text-center">
                                <a class="d-block blur-shadow-image">
                                    <img src="../assets/img/teams/dospem.jpeg" alt="img-blur-shadow" width="130px"
                                        class="img-fluid transparent shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0 text-center">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">Dian Nurdiana,
                                        S.Kom.,M.Kom.</a>
                                </h5>
                                <p>
                                    Dosen Pembimbing
                                    Prodi Sistem Informasi
                                </p>
                                <ul class="d-flex flex-row ms-n3 nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link pe-1" href="https://www.instagram.com/nulishofficial/"
                                            target="_blank">
                                            <i class="fab fa-instagram text-lg opacity-8" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Instagram"></i>
                                        </a>
                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div> --}}
                </div>
                {{-- <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/teams/Rivo.png') }}"
                                class="img-fluid shadow border-radius-lg rounded mx-auto d-block" alt="..."
                                width="100px">
                            <div class="card-body">
                                <h5 class="card-title">Rivo Ardian</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/teams/Faiz.png') }}"
                                class="img-fluid shadow border-radius-lg rounded mx-auto d-block" alt="..."
                                width="100px">
                            <div class="card-body">
                                <h5 class="card-title">Faiz Nurhadi</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/teams/Luthfi.jpg') }}"
                                class="img-fluid shadow border-radius-lg rounded mx-auto d-block" alt="..."
                                width="100px">
                            <div class="card-body">
                                <h5 class="card-title">Muhammad Luthfi Hamid</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center ">
                            <img src="{{ asset('assets/img/teams/Ade.png') }}"
                                class="img-fluid shadow border-radius-lg rounded mx-auto d-block" alt="..."
                                width="150px">
                            <div class="card-body">
                                <h5 class="card-title">Ade Ramdhani</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 mx-auto mb-4">
                        <div class="card text-center ">
                            <img src="{{ asset('assets/img/teams/Ade.png') }}"
                                class="img-fluid shadow border-radius-lg rounded mx-auto d-block" alt="..."
                                width="150px">
                            <div class="card-body">
                                <h5 class="card-title">Ade Ramdhani</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->

    </div>
</x-template.landing>
