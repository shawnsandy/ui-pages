<form class="" role="form" method="POST" action="{{ url('/login') }}">
    {!! csrf_field() !!}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="control-label">E-Mail Address</label>

        <input type="email" class="form-control" placeholder="Signup Email" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
        <label class="control-label">Password</label>

        <div class="">
            <input type="password" class="form-control" name="password" placeholder="Your Password">

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-lock"></i> Login
            </button>

            <a class="btn btn-link" href="{{ url('/page/login-reset') }}"> Forgot Your Password?</a>
        </div>
    </div>
</form>
