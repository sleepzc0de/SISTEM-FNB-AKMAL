<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- Sidebar toggle for mobile -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <b class="logo-icon">
                    <img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo-icon" class="dark-logo">
                    <img src="{{ asset('assets/images/logo-light-icon.png') }}" alt="logo-light-icon" class="light-logo">
                </b>
                <span class="logo-text">
                    <img src="{{ asset('assets/images/logo-text.png') }}" alt="logo-text" class="dark-logo">
                    <img src="{{ asset('assets/images/logo-light-text.png') }}" alt="logo-light-text" class="light-logo">
                </span>
            </a>
            <!-- Toggle for mobile -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="#" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="ti-menu ti-close"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- Left navbar items -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar">
                        <i class="sl-icon-menu font-20"></i>
                    </a>
                </li>
            </ul>
            <!-- Right navbar items -->
            <ul class="navbar-nav float-right">
                <li class="nav-item">
                    <a id="loginButton" class="nav-link" href="/login">
                        Login Disini
                    </a>                    
                </li>
            </ul>
        </div>
    </nav>
</header>
<script>
    // Misalkan variabel isLoggedIn menunjukkan status login
    var isLoggedIn = false; // Ganti dengan logika sesuai dengan aplikasi Anda

    // Function untuk mengubah teks tombol berdasarkan status login
    function updateLoginButton() {
        var loginButton = document.getElementById('loginButton');
        if (isLoggedIn) {
            loginButton.textContent = 'Logout';
            loginButton.href = '/logout'; // Ganti dengan URL logout Anda
        } else {
            loginButton.textContent = 'Login Disini';
            loginButton.href = '/login'; // Ganti dengan URL login Anda
        }
    }

    // Panggil fungsi ini saat halaman dimuat
    updateLoginButton();
</script>

