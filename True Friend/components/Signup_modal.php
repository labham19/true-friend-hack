<div class="modal fade"  id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Signup with True Friend</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="signup-form" enctype="multipart/form-data" class="form" role="form" method="post" action="./backend/auth.php">
                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        <input type="text" class="form-control" name="name" placeholder="Full Name" maxlength="30" required>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" maxlength="10" minlength="10" required>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </span>
                        <input type="date" class="form-control" name="dob" maxlength="150" required>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-droplet"></i>
                            </span>
                            <select class="form-select" name="bloodGroup" required>
                                    <option selected>A+</option>
                                    <option>A-</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>B+</option>
                            </select>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                <i class="fas fa-id-card"></i>
                            </span>
                        <input type="text" class="form-control" name="aadhar" placeholder="Valid Aadhar Number" maxlength="30" required>
                    </div>

                    <div class="input-group form-group">
                            <span class="input-group-text">
                                Upload A Valid ID Proof
                            </span>
                        <input type="file" class="form-control" name="aadhar_pic" placeholder="PDF">
                    </div>

                    <div class="form-group text-center py-3">
                        <input name="register_reciever" type="submit" class="btn btn-block btn-primary" value="Create Account"></input>
                    </div>
                </form>
            </div>

            <div class="modal-footer justify-content-center">
                    <div>
                        Already have an account?
                        <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
                    </div>
                    <div>
                        Wanna Join True Friend As A Blood Bank ?
                        <a href="./RegisterAsHospital.php">Click Here</a>
                    </div>
            </div>
        </div>
    </div>
</div>
