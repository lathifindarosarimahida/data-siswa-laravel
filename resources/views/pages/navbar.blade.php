  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Laravel><</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

    

        <li class="nav-item active">
                <a class="nav-link" href={{ url('/') }}>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Home</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href={{ url('about') }}>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>About</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href={{ url('siswa') }}>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Siswa</span>
                </a>

            <li class="nav-item active">
                <a class="nav-link" href={{ url('kelas') }}>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Kelas</span>
                </a>

            <li class="nav-item active">
                <a class="nav-link" href={{ url('walikelas') }}>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Wali Kelas</span>
                </a>

            <li class="nav-item active">
            <a class="nav-link" href={{ url('guru') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Guru</span>
                </a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>

    </ul>

  </nav>