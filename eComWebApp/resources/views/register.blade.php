<x-header />
<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="section-title">

                    <h2>Create new account</h2>

                </div>
                <div class="contact__form">
                    <form action="{{ URL::to('registerUser') }}" method="POST" enctype="multipart/form-data">//
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="fullname" placeholder="Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-lg-12">
                                <input type="file" name="file" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <!-- ✅ This is the new password confirmation field -->
                            <div class="col-lg-12">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                    required>
                            </div>


                            <div class="col-lg-12">

                                <button type="submit" name="register" class="site-btn">Sign Up</button>
                            </div>
                        </div>
                    </form>

                    {{-- <form action="{{ URL::to('registerUser') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Other fields for username, email, password, etc. -->
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="fullname" placeholder="Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>


                            <div class="col-lg-12">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <!-- ✅ This is the new password confirmation field -->
                            <div class="col-lg-12">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                    required>
                            </div>

                            <!-- File upload field for profile picture -->
                            <label for="profile_picture">Upload Profile Picture:</label>
                            <input type="file" id="profile_picture" name="profile_picture"
                                accept="public/uploads/profiles/phebes.jpg">

                            <button type="submit" name="register">Sign Up</button>

                        </div>

                    </form> --}}







                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<x-footer />