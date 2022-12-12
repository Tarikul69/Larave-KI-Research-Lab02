@extends('layouts.app')
@section('content')
<div   class="container">
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="background-color: gray;" class="card">
                <div class="card-header">
                <center><img src="assets/css/image/Logo.svg" style="hight: 200px; width: 200px;flex: 0 0 50%;text-align: center;" alt=""></center>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <center><h3>Registration</h3></center>
                        <br>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                    <select required class="form-control" name="cars" id="cars">
                                        <option selected>Select a role...</option>
                                        <option value="Principal Invastigator">Principal Invastigator</option>
                                        <option value="Research Assistant">Research Assistant</option>
                                        <option value="Content Devloper">Content Devloper</option>
                                        <option value="External ContributorOne">External ContributorOne</option>

                                    </select>
                            </div>
                        </div> -->

                        <!-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                            <div class="col-md-6"><input class="form-control" type="file"></div> 
                        </div> -->

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
