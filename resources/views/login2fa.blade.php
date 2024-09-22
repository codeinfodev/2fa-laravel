<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Laravel - 2FA - Verification </title>

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}" />
    </head>
    <body class="login-page">
        <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    
                    <div class="col-md-8 col-lg-7">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title mt-4">
                                <h2 class="text-center text-dark">Two Factor Authentication</h2>
                            </div>
                            <form method="POST" action="{{ route('2fa.verify') }}">
                                @csrf
                                <p>{{ __('Please enter your one-time password to complete your login.') }}</p>
                                <div class="mb-4">
                                    <div class="input-group custom" style="margin-bottom:0px;">
                                        <input type="password" name="one_time_password" class="form-control form-control-lg" placeholder="**********" />
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                        </div>
                                    </div>
                                    @error('one_time_password')
                                        <div class="form-control-feedback text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                
                                <div class="row mt-4 mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <input class="btn btn-danger btn-lg btn-block" type="submit" value="Verify">
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{asset('vendors/scripts/core.js')}}"></script>
        <script src="{{asset('vendors/scripts/script.min.js')}}"></script>
        <script src="{{asset('vendors/scripts/process.js')}}"></script>
        <script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
    </body>
</html>
