@extends('admin.layouts.auth')

@section('content')
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <h1>
                    <a href="#">
                        Dev Admin
                    </a>
                </h1>
            </div>

            <div class="login-form">
                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>

                    <div class="login-checkbox">
                        <label>
                            
                        </label>

                        <label>
                            <a href="#">Forgotten Password?</a>
                        </label>
                    </div>

                    <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">sign in</button>
                </form>
            </div>
        </div>
    </div>
@endsection