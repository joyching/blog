@extends('layouts.auth')

@section('content')
    <div class="page-title" style="background-image: url('{{ asset('images/partner-bg.png') }}')">
        <h1>Sign In</h1>
    </div>

    <section id="sign-in">
        <div class="container">
            <div class="row contact-wrap">
                <div class="row">
                    <div class="col-xs-12"></div>
                        @if(Session::has('authentication'))
                            <div class="alert alert-danger">
                                {{ __('auth.failed') }}
                            </div>
                        @endif
                    </div>
                </div>
                <form id="sign-in-form" name="sign-in-form" method="post" action="{{ route('login') }}">
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
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group text-right">
                            <a href="{{ route('register.index') }}">need a account? &nbsp</a>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Sign In</button>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </form>
            </div><!--/.row-->
        </div>
    </section>
@endsection
