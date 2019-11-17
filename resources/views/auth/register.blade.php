@extends('layouts.auth')

@section('content')
    <div class="page-title" style="background-image: url('{{ asset('images/partner-bg.png') }}')">
        <h1>Sign Up</h1>
    </div>

    <section id="sign-up">
        <div class="container">
            <div class="row contact-wrap">
                <form id="sign-in-form" name="sign-in-form" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            <label>Email *</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}" required="required">
                            @if($errors->has('email'))
                            <ul class="parsley-errors-list filled" style="color: red;">
                                {{ $errors->first('email') }}
                            </ul>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required="required">
                            @if($errors->has('name'))
                            <ul class="parsley-errors-list filled" style="color: red;">
                                {{ $errors->first('name') }}
                            </ul>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('password')) has-error @endif">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" required="required">
                            @if($errors->has('password'))
                            <ul class="parsley-errors-list filled" style="color: red;">
                                {{ $errors->first('password') }}
                            </ul>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Confirm Password *</label>
                            <input type="password" name="password_confirmation" class="form-control" required="required">
                        </div>
                        <div class="form-group text-right">
                            <a href="{{ route('login.index') }}">Sign In &nbsp</a>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </form>
            </div><!--/.row-->
        </div>
    </section>
@endsection
