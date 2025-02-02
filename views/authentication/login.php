<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php echo $this->render('../partials/main'); ?>

<head>

    <?php echo $this->render('../partials/title-meta', array('title' => 'Sign In')); ?>

    <?php echo $this->render('../partials/head-css'); ?>

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="/" class="d-inline-block auth-logo">
                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/logo-light.png" alt=""
                                        height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign into your account.</p>
                                </div>
                                <div class="p-2 mt-4">


                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter password">
                                    </div>
                                    <div
                                        style="display: flex;justify-content: space-between;height: 28px;align-items: center;">
                                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                                            <button type="button"
                                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img id="header-lang-img"
                                                    src="<?= Yii::$app->request->baseUrl ?>//images/flags/us.svg"
                                                    alt="Header Language" height="20" class="rounded">
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <!-- item-->
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item notify-item language py-2" data-lang="en"
                                                    title="English">
                                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/flags/us.svg"
                                                        alt="user-image" class="me-2 rounded" height="18">
                                                    <span class="align-middle">English</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                                    data-lang="sp" title="Spanish">
                                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/flags/spain.svg"
                                                        alt="user-image" class="me-2 rounded" height="18">
                                                    <span class="align-middle">Spanish</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                                    data-lang="gr" title="German">
                                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/flags/germany.svg"
                                                        alt="user-image" class="me-2 rounded" height="18"> <span
                                                        class="align-middle">Germany</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                                    data-lang="it" title="Italian">
                                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/flags/italy.svg"
                                                        alt="user-image" class="me-2 rounded" height="18">
                                                    <span class="align-middle">Italian</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                                    data-lang="ru" title="Russian">
                                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/flags/russia.svg"
                                                        alt="user-image" class="me-2 rounded" height="18">
                                                    <span class="align-middle">Russian</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                                    data-lang="ch" title="Chinese">
                                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/flags/br.svg"
                                                        alt="user-image" class="me-2 rounded" height="18">
                                                    <span class="align-middle">Portugese</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                                    data-lang="fr" title="French">
                                                    <img src="<?= Yii::$app->request->baseUrl ?>//images/flags/french.svg"
                                                        alt="user-image" class="me-2 rounded" height="18">
                                                    <span class="align-middle">Frence</span>
                                                </a>

                                            </div>
                                        </div>
                                        <div style="cursor: pointer;" data-bs-toggle="modal"
                                            data-bs-target="#signupModals">Forgot your password?</div>

                                    </div>




                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" id="login-button">Sign In</button>
                                    </div>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ?
                                <?= Html::a('Sign Up', ['velzon/index'], ['class' => 'fw-semibold text-primary text-decoration-underline']) ?>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;<?= date('Y') ?> Velzon. Crafted with <i
                                    class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <div id="signupModals" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header p-3">
                    <h4 class="card-title mb-0"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-success  rounded-0 mb-0">
                    <p class="mb-0">Forgot your password?</p>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Email</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your name">
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- end auth-page-wrapper -->

    <?php echo $this->render('../partials/vendor-scripts'); ?>
    <script>
    $(document).ready(function() {
        document.getElementById('login-button').addEventListener('click', function() {
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            fetch("<?= Url::to(['authentication/login']) ?>", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        'X-CSRF-Token': csrfToken
                    },
                    body: JSON.stringify({
                        user: username,
                        password: password,
                        _csrf: csrfToken
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // toastr.success('Welcome to login!');
                        localStorage.setItem('loginSuccessMessage', 'Welcome to login!');
                        window.location.href = "<?= Url::to(['velzon/index']) ?>";
                       
                    } else {
                        document.getElementById('login-error').innerText = data.message;
                        document.getElementById('login-error').style.display = 'block';
                    }
                })
                .catch(error => {
                    document.getElementById('login-error').innerText =
                        'An error occurred. Please try again.';
                    document.getElementById('login-error').style.display = 'block';
                });
        });
    })
    </script>

    <!-- particles js -->
    <script src="<?= Yii::$app->request->baseUrl ?>//libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/pages/password-addon.init.js"></script>
    <script>

    </script>
</body>

</html>