<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-warning text-decoration-none">
                <?php
                echo get_title();
                ?>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <?php
                foreach (PAGES as $page => $params) {
                    echo '<li class="nav-item"><a href="' . $params['href'] . '" class="nav-link px-2 text-white">' . $page . '</a></li>';
                }
                ?>
            </ul>
            <form class="d-flex" role="search" method="get" id="search-form" action="#">
                <input class="form-control me-2" type="search" name="s" placeholder="Search" aria-label="Search" value="">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
        </div>
    </div>
</header>