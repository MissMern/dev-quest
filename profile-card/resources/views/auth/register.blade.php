@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

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
                     


<div class="row mb-3">
    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
    <div class="col-md-6">
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
    <div class="col-md-6">
        <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}">
        @error('country')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="pic" class="col-md-4 col-form-label text-md-end">{{ __('Profile Picture') }}</label>
    <div class="col-md-6">
        <input id="pic" type="file" class="form-control @error('pic') is-invalid @enderror" name="pic" accept="image/*">
        @error('pic')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="bio" class="col-md-4 col-form-label text-md-end">{{ __('Bio') }}</label>
    <div class="col-md-6">
        <textarea id="bio" class="form-control @error('bio') is-invalid @enderror" name="bio">{{ old('bio') }}</textarea>
        @error('bio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="comment" class="col-md-4 col-form-label text-md-end">{{ __('Comments') }}</label>
    <div class="col-md-6">
        <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment">{{ old('comment') }}</textarea>
        @error('comment')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<!--user links-->
<div class="row mb-3">
    <label for="facebook" class="col-md-4 col-form-label text-md-end">{{ __('Facebook') }}</label>
    <div class="col-md-6">
        <input id="facebook" type="url" class="form-control @error('links.facebook') is-invalid @enderror" name="links[facebook]" value="{{ old('links.facebook') }}">
        @error('links.facebook')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="twitter" class="col-md-4 col-form-label text-md-end">{{ __('Twitter') }}</label>
    <div class="col-md-6">
        <input id="twitter" type="url" class="form-control @error('links.twitter') is-invalid @enderror" name="links[twitter]" value="{{ old('links.twitter') }}">
        @error('links.twitter')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="instagram" class="col-md-4 col-form-label text-md-end">{{ __('Instagram') }}</label>
    <div class="col-md-6">
        <input id="instagram" type="url" class="form-control @error('links.instagram') is-invalid @enderror" name="links[instagram]" value="{{ old('links.instagram') }}">
        @error('links.instagram')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



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
