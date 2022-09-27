<footer class="py-3 my-4 bg-dark">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <?php
        foreach (PAGES as $page => $params) {
            echo '<li class="nav-item"><a href="' . $params['href'] .'" class="nav-link px-2 text-muted">' . $page . '</a></li>';
        }
        ?>
    </ul>
    <p class="text-center text-muted">© <?php echo date('Y') . '-' . get_title()?></p>
</footer>