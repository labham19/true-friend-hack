<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-heading">Login with True Friend</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="login-form" class="form" role="form" method="post" action="backend/auth.php">
                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                    </div>

                    <div class="form-group text-center">
                        <input name="login" type="submit" class="btn btn-block btn-primary" value="Login"></input>
                    </div>
                </form>
            </div>

            <div class="modal-footer justify-content-center">
                    <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signup-modal">Click here</a>
                    to register a new account
            </div>
        </div>
    </div>
</div>
