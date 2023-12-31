@props(['titlePage'])

<!-- Navbar -->
<div class="container sticky-top z-index-sticky top-0">
    <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
        @csrf
    </form>
    <div class="row">
        <div class="col-12">
            <nav
                class="navbar navbar-expand-lg bg-gradient-light border-radius-xl mt-4 top-0 z-index-3 position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <div class=" navbar-brand px-0 font-weight-bolder ms-sm-2">

                        <a href=" {{ route('user-area') }} ">
                            <img src="{{ asset('assets/img/logos/logos.png') }}" width="80px" alt="logos">
                        </a>
                        @if ($titlePage)
                            / {{ $titlePage }}
                        @endif
                    </div>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item ms-lg-auto">
                                <a class="nav-link nav-link-icon me-2" href="{{ route('home') }}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
                                    <i class="fa fa-home me-0 opacity-8"></i>
                                    <span class="d-lg-none">Home</span>
                                </a>
                            </li>
                            <li class="nav-item ms-lg-auto">
                                <a class="nav-link nav-link-icon" href="{{ route('user-area') }}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard">
                                    <i class="bi bi-speedometer"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>


                            <li class="nav-item dropdown dropdown-hover ms-lg-auto pe-2 px-3 my-2 align-items-center"
                                data-bs-toggle="dropdown" data-bs-placement="bottom" title="Message">
                                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell cursor-pointer"></i>
                                    <span class="d-lg-none">Notifications</span>
                                </a>
                                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-2 me-sm-n4"
                                        aria-labelledby="dropdownMenuButton">
                                        <li class="mb-1">
                                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                                <div class="d-flex py-1">
                                                    <div class="my-auto">
                                                        <img src="{{ asset('assets') }}/img/team-2.jpg"
                                                            class="avatar avatar-sm  me-3 ">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="text-sm font-weight-normal mb-1">
                                                            <span class="font-weight-bold">New message</span> from Laur
                                                        </h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            <i class="fa fa-clock me-1"></i>
                                                            13 minutes ago
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                        </li>

                                            <li class="mb-1">
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    <div class="d-flex py-1">
                                                        <div class="my-auto">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="text-sm font-weight-normal mb-1">
                                                                <span class="font-weight-bold">Tejo</span> Answer the question
                                                                Scott
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                <i class="fa fa-clock me-1"></i>
                                                                1 minutes ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                            </li>

                                        <div class="collapse " id="collapseNotif">
                                            <li class="mb-1">
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    <div class="d-flex py-1">
                                                        <div class="my-auto">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp"
                                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="text-sm font-weight-normal mb-1">
                                                                <span class="font-weight-bold">Angelia</span> Answer the question
                                                                Putri
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                <i class="fa fa-clock me-1"></i>
                                                                1 day
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                            </li>
                                        </div>

                                        <div class="collapse " id="collapseNotif">
                                            <li class="mb-1">
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    <div class="d-flex py-1">
                                                        <div class="my-auto">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="text-sm font-weight-normal mb-1">
                                                                <span class="font-weight-bold">Putri</span> Answer the question
                                                                Scott
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                <i class="fa fa-clock me-1"></i>
                                                                1 day
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                            </li>
                                        </div>
                                        <div class="justify-content-end">
                                            <a class="btn btn-link" data-bs-toggle="collapse" href="#collapseNotif"
                                                role="button" aria-expanded="false" aria-controls="collapseNotif">
                                                <span class="small text-info icon-move-right " style="text-transform: capitalize">
                                                    More <i class="fas fa-solid fa-hand-point-right fa-bounce"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </ul>

                            </li>
                            <li class="nav-item dropdown dropdown-hover ms-lg-auto px-1">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                    id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="h-100">
                                        <img class="border-radius-md shadow-lg rounded-circle rounded mx-auto d-block"
                                            src="{{ route('img.retrieve', ['user_image', Auth::user()->user_image]) }}"
                                            height="20px" alt="image">
                                    </span>
                                    <span class="d-lg-none"> Account</span>
                                    <i class="fa fa-caret-down mx-1 opacity-8"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuBlocks">
                                    @auth
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="{{ route('user-area') }}">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                <i class="fa fa-laptop me-2"></i>
                                                                <span>User Area</span>
                                                            </h6>
                                                            <div class="text-sm">
                                                                <i class="fa fa-hand-o-right ms-3"></i>
                                                                <span>Go to User Area</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                <i class="fa fa-user-circle me-2"></i>
                                                                <span>My Account</span>
                                                            </h6>
                                                        </div>
                                                        <i class="fa fa-angle-right ms-3"></i>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{ route('profile', Auth::user()->user_key) }}">
                                                        <i class="fa fa-eye me-1"></i>
                                                        <span>View Profile</span>
                                                    </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                        href="{{ route('user-profile') }}">
                                                        <i class="fa fa-user-secret me-1"></i>
                                                        <span>Edit Profile</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="You must relogin in the future">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="#"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                <i class="fa fa-sign-out me-2"></i>
                                                                <span>Sign Out</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-md-12">
                                                <div class="d-flex mb-2">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="{{ route('user-area') }}">
                                                                <h6
                                                                    class="dropdown-header text-dark d-flex justify-content-cente align-items-center p-0">
                                                                    <i
                                                                        class="fa fa-laptop text-gradient text-primary me-2"></i>
                                                                    <span>User Area</span>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="#">
                                                                <h6
                                                                    class="dropdown-header text-dark d-flex justify-content-cente align-items-center p-0">
                                                                    <i
                                                                        class="fa fa-chevron-right text-gradient text-primary me-2"></i>
                                                                    <span>Profile</span>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('profile', Auth::user()->user_key) }}">
                                                    <i class="fa fa-eye text-gradient text-warning me-1"></i>
                                                    <span>View Profile</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('user-profile') }}">
                                                    <i class="fa fa-user-secret text-gradient text-warning me-1"></i>
                                                    <span>Edit Profile</span>
                                                </a>

                                                <div class="d-flex mb-2">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="#"
                                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                <h6
                                                                    class="dropdown-header text-dark d-flex justify-content-cente align-items-center p-0">
                                                                    <i
                                                                        class="fa fa-sign-out text-gradient text-primary me-2"></i>
                                                                    <span>Sign-out</span>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endauth

                                    @guest
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="{{ route('user-area') }}">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                <i class="fa fa-laptop me-2"></i>
                                                                <span>User Area</span>
                                                            </h6>
                                                            <div class="text-sm">
                                                                <i class="fa fa-sign-in ms-3"></i>
                                                                <span>Sign-in and go to User Area</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="{{ route('register') }}">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                <i class="fa fa-user-plus me-2"></i>
                                                                <span>Sign Up</span>
                                                            </h6>
                                                            <div class="text-sm">
                                                                <i class="fa fa-hand-o-right ms-3"></i>
                                                                <span>Create an account</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-md-12">
                                                <div class="d-flex mb-2">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="{{ route('user-area') }}">
                                                                <h6
                                                                    class="dropdown-header text-dark d-flex justify-content-cente align-items-center p-0">
                                                                    <i
                                                                        class="fa fa-laptop text-gradient text-primary me-2"></i>
                                                                    <span>Sign-in</span>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="{{ route('register') }}">
                                                                <h6
                                                                    class="dropdown-header text-dark d-flex justify-content-cente align-items-center p-0">
                                                                    <i
                                                                        class="fa fa-sign-out text-gradient text-primary me-2"></i>
                                                                    <span>Sign Up</span>
                                                                </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endguest
                                </ul>
                            </li>
                            <ul class="navbar-nav  justify-content-end">
                                {{-- <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon" href="{{ route('practice') }}"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Practice">
                                        <i class="bi bi-pencil-fill"></i>
                                        <p class="d-inline text-sm z-index-1">Practice</p>
                                    </a>
                                </li> --}}


                                {{-- <li class="nav-item px-3 d-flex align-items-center">
                                    <a href="javascript:;" class="nav-link text-body p-0">
                                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                    </a>
                                </li> --}}
                            </ul>



                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar -->
