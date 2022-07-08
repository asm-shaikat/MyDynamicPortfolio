@yield('publicnav')
<header class="header_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 offset-md-1 px-0">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            SHAIKAT
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link pl-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#projects">Projects </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/skill') }}"> Skill </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact me</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>