@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel py-4">
        <p class="panel-heading">Register</p>
        <div class="panel-block">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="field">
                    <label for="" class="label">Name</label>
                    <div class="control">
                        <input type="text" name="name" class="input{{ $errors->has('name') ? ' is-danger' : '' }}">
                    </div>

                    @if($errors->has('name'))
                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label for="" class="label">E-Mail Address</label>
                    <div class="control">
                        <input type="email" name="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" required>
                    </div>

                    @if($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label for="" class="label">Password</label>
                    <div class="control">
                        <input type="password" name="password" id="password" class="input{{ $errors->has('password') ? ' is-danger': '' }}" required>
                    </div>

                    @if($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label for="" class="label">Confirm Password</label>
                    <div class="control">
                        <input type="password" name="password_confirmation" id="password-confirm" class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
