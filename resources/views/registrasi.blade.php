<x-layouts>
    <div class="main-wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        
        <!-- Auth box -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img src="../../assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Register</h5>
                    </div>
                    
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" action="/register" method="POST">
                        @csrf   
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="text" id="username" name="username" required placeholder="Name">
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="text" id="email" name="email" required placeholder="E-mail">
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="text" id="no_telpon" name="no_telpon" required placeholder="Nomor Telepon">
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="password" id="password" name="password" required placeholder="Password">
                            </div>
                        </div>                       
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info" type="submit">SIGN UP</button>
                            </div>
                        </div>                        
                        <div class="form-group m-b-0 m-t-10">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="/login" class="text-info m-l-5"><b>Sign In</b></a>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
</x-layouts>
