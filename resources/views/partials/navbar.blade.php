<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{($active === 'home')? 'active': '';}}" href="/">Home</a>
                <a class="nav-link {{($active === 'about')? 'active': '';}}" href="/about">About</a>
                <a class="nav-link {{($active === 'blog')? 'active': '';}}" href="/blog">Blogs</a>
                <a class="nav-link {{($active === 'categories')? 'active': '';}}" href="/categories">Categories</a>
            </div>
            <div class="navbar-nav ms-auto">

                <a href="/login" class="nav-link {{($active === 'login')? 'active': '';}}"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>

            </div>
        </div>
    </div>
</nav>