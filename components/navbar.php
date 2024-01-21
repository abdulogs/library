<nav class="navbar navbar-expand-lg bg-white shadow-sm mb-3 py-3">
    <div class="container">
        <a class="navbar-brand fw-bold me-5" href="index.php">Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (auth::is_authenticated()) : ?>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php if (auth::is_admin() | auth::is_faculty()) : ?>
                        <li class="nav-item">
                            <a class="nav-link fw-bold px-3 active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold px-3" href="books.php">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold px-3" href="users.php">Users</a>
                        </li>
                    <?php endif; ?>

                    <?php if (auth::is_student()) : ?>
                        <li class="nav-item">
                            <a class="nav-link fw-bold px-3" href="library.php">Library</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link fw-bold px-3" href="borrow-books.php">Borrowed books</a>
                    </li>
                    <?php if (auth::is_admin() | auth::is_faculty()) : ?>
                        <li class="nav-item">
                            <a class="nav-link fw-bold px-3" href="fined-students.php">Fined students</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php if (auth::is_admin() | auth::is_faculty()) : ?>
                    <form class="d-flex" action="books.php" role="search">
                    <?php else : ?>
                        <form class="d-flex" action="library.php" role="search">
                        <?php endif; ?>

                        <input class="form-control me-2" type="search" placeholder="Search" name="search" value="<?= http::input('search'); ?>" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <div class="dropdown ms-3">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                <?= $GLOBALS["user"]["first_name"]; ?> <?= $GLOBALS["user"]["last_name"]; ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
            </div>
        <?php else : ?>
            <div>
                <a class="btn btn-success" href="login.php">Login</a>
                <a class="btn btn-success ms-3" href="signup.php">Signup</a>
            </div>
        <?php endif; ?>
    </div>
</nav>