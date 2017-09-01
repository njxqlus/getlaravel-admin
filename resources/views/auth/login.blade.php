@extends('auth.layouts.default')

@section('page-title', 'Login')

@section('css')

    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('vendor/icheck/skins/square/blue.css')}}">

@endsection

@section('content')

    <div class="login-box">
        <div class="login-logo">
            <a href="#">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <!-- /.login-logo -->

        <div class="login-box-body">
            <p class="login-box-msg">@lang('cp.login_message')</p>

            <form action="{{ route('login') }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="@lang('cp.email')"
                           value="{{ old('email') }}" name="email"
                           required
                           autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="@lang('cp.password')"
                           name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"
                                       class="icheck" {{ old('remember') ? 'checked' : '' }}>
                                @lang('cp.remember_me')
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">@lang('cp.sign_in')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>
                    @lang('cp.sign_in_using_facebook')
                </a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>
                    @lang('cp.sign_in_using_google_plus')
                </a>
            </div>
            <!-- /.social-auth-links -->

            <a href="{{ route('password.request') }}">@lang('cp.i_forgot_my_password')</a><br>
            <a href="{{ route('register') }}" class="text-center">@lang('cp.register_a_new_membership')</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

@endsection

@section('scripts')

    <!-- iCheck -->
    <script src="{{asset('vendor/icheck/icheck.min.js')}}"></script>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

@endsection