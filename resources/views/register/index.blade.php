@extends('layout.main')


@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto ">
            <div class="card">
                <div class="card-body">
                    <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating ">
                            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" require value="{{ old('name') }}">
                            <label for="name">Full name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" require value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" require value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" require>
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="confirm-password" name="confirm-password" class="form-control rounded-bottom @error('confirm-password') is-invalid @enderror" id="confirm-password" placeholder="confirm-password" require>
                            <label for="confirm-password">Confirm Password</label>
                            @error('confirm-password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
                    </form>

                </div>
            </div>

            <small class="text-center d-block mt-3">Alredy Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection