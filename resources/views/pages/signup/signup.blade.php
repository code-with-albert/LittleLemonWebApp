<div class="container py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 p-5 d-flex flex-column justify-content-between bg-dark-green">

            <form action="../../includes/signupHandler.inc.php" method="POST">
                <h5 class="text-center fs-1 markazi-text-700 font-lemon-yellow">Sign Up</h5>
                <input type="text" id="signupUsername" class="form-control mb-3" name="username"
                    placeholder=" Username">

                <input type="email" id="signupEmail" class="form-control mb-3" name="email" aria-describedby="emailHelp"
                    placeholder=" Email">

                <input type="password" id="signupPassword" class="form-control mb-3" name="password"
                    placeholder=" Password">

                <input type="password" id="signupRePassword" class="form-control mb-3" name="rePassword"
                    placeholder=" Confirm Password">
                <div class="d-grid gap-2 col-12 mx-auto">
                    <button type="submit" class="btn btn-outline-warning fs-5 mt-3">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 p-0 m-0 bg-secondary-subtle">
            <img src="{{asset('images/restauranfood.jpg')}}" class="img-thumbnail p-0 rounded-0 border-0"
                alt="login_side_picture">
        </div>

    </div>
</div>