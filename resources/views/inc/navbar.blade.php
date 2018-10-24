<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Journal') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                <li>
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                        <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
                    </li>
                <li>
                    <a class="nav-link" href="/posts">Blog</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="nav-link" href="/posts/create">Create Post</a>
                    </li>
                </ul>
        </div>
    </div>
</nav>