@extends("layout.main")

@section("container")

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            <small class="text-center d-block mt-3">Not Register? <a href="/register">Register now</a></small>
        </main>
    </div>
</div>


@endsection