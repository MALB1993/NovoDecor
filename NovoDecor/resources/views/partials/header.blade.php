<header class="shadow">
    <nav class="navbar navbar-expand-lg navbar-desktop">
        <a id="navbar-brand" class="navbar-brand col-2" href="#">
            <img src="./img/logo.jpg" alt width="75" height="75" />
        </a>
        <div class="row">
            <div class="col-12">
                <form id="search-box" class="search-box me-auto col-12" action="/" method="post">
                    <i id="arrow-right" class="bi bi-arrow-right fs-3 position-absolute"
                        style="top: 4px; right: -10px"></i>
                    <input id="search" class="form-control" name="search" type="text" placeholder="جستجوی محصول" />
                    <button class="btn btn-sm" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="navigation-buttons ms-auto ms-3">
            <a id="search-window" class="btn btn-md btn-outline-secondary">
                <i class="bi bi-search fs-5"></i>
            </a>

            <a id="account-button" class="btn btn-md btn-outline-primary account-button" href="#"
                style="margin: 0 10px">
                <i class="bi bi-person fs-5"></i>
                <span>حساب کاربری</span>
            </a>
        </div>
    </nav>
    <hr class="border-secondary p-0 m-0" />
    <nav class="navbar container p-0 nav-menu">
        <ul class="nav align-items-center">
            <li class="nav-item">
                <a class="btn btn-md btn-outline-primary" href="#" aria-current="page">
                    <i class="bi bi-bricks fs-4"></i>
                    دسته بندی محصولات
                </a>
                <ul class="mega-menu">
                    <li><a href="#">سرویس چوبی</a></li>
                    <li><a href="#">سرویس خواب</a></li>
                    <li><a href="#">دکور</a></li>
                    <li><a href="#">کلبه چوبی</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="#" data-bs-toggle="modal"
                    data-bs-target="#repairModal">تعمیرات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" data-bs-toggle="modal" data-bs-target="#aboutUsModal">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" data-bs-toggle="modal" data-bs-target="#contactUsModal">تماس باما</a>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-center align-items-center" href="tel:09212516014">
                    <div class="text-center mx-2">
                        <p class="text-dark">پشتیبانی</p>
                        <p class="text-secondary">09212516014</p>
                    </div>
                    <div class="text-dark">
                        <i class="bi bi-phone-vibrate fs-1"></i>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</header>