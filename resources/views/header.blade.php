<nav class="navbar is-info" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/projects">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="/projects" class="navbar-item">
                Home
            </a>

            <a href="/projects/create" class="navbar-item">
                Add Project
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>

                <div class="navbar-dropdown">
                    <a href="#" class="navbar-item">
                        About
                    </a>
                    <a href="#" class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a href="#" class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @if(auth()->id())
                        <a class="button is-light is-outlined">
                            Log in
                        </a>
                     @else{
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                    }
                    @endif

                </div>
            </div>
        </div>
    </div>
</nav>
