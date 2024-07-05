<div class="container py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 p-5 d-flex flex-column justify-content-between bg-dark-green">

            <form action="../../includes/loginHandler.inc.php" method="POST">
                <h5 class="text-center fs-1 markazi-text-700 font-lemon-yellow">Welcome</h5>
                <input type="text" id="loginUsername" class="form-control mb-3" name="username" placeholder=" Username">

                <input type="password" id="loginPassword" class="form-control mb-3" name="password"
                    placeholder="Password">
                <div class="d-grid gap-2 col-12 mx-auto">
                    <button type="submit" class="btn btn-outline-warning fs-5 mt-3">Login</button>
                </div>
                <p class="mt-3 text-center"><a href="#"
                        class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Forgot
                        Password</a></p>
            </form>

            <p class="text-center text-light mt-3">
                Don't have an account yet? <a href="signup"
                    class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    Sign-up
                    Here</a>
            </p>
        </div>
        <div class="col-md-4 p-0 m-0 bg-secondary-subtle">
            <img src="{{asset('images/restauranfood.jpg')}}" class="img-thumbnail p-0 rounded-0 border-0"
                alt="login_side_picture">
        </div>
    </div>
</div>