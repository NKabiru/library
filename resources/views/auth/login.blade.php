@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel py-4">
        <p class="panel-heading">Login</p>
        <div class="panel-block">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="field">
                    <label for="" class="label">Email Address</label>
                    <div class="control">
                        <input type="email" name="email" id="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" value="{{ old('email') }}" required autofocus>
                    </div>

                    @if($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="" class="label">Password</label>
                    <div class="control">
                        <input type="password" name="password" id="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" required>
                    </div>

                    @if($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>
                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-primary" type="submit">Submit</button>
                    </div>
                    @if(Route::has('password.request'))
                        <div class="control">
                            <a href="{{ route('password.request') }}" class="button is-text">Forgot Your Password?</a>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
