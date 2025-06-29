<x-adminheader title="Account Details" />



<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">



        <div class="row">
            <div class="col-12 col-md-6 mx-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">My Profile</p>



                        {{-- Flash Messages --}}
                        @if(session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Profile Picture --}}
                        @if(!empty($user->picture) && file_exists(public_path('uploads/profiles/' . $user->picture)))
                            <div class="text-center mb-3">
                                <img src="{{ asset('uploads/profiles/' . $user->picture) }}"
                                    class="rounded-circle img-thumbnail" width="150" alt="Profile Picture">
                            </div>
                        @endif

                        {{-- Profile Update Form --}}
                        <form action="{{ url('updateUser') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="fullname" placeholder="Full Name" class="form-control mb-2"
                                        value="{{ $user->fullname }}" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <input type="email" name="email" placeholder="Email" class="form-control mb-2"
                                        value="{{ $user->email }}" readonly required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="profilePic" class="form-label">Profile Picture</label>
                                    <input type="file" name="file" accept="image/*" class="form-control mb-2"
                                        id="profilePic">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="password" class="form-label">New Password (leave blank to keep
                                        current)</label>
                                    <input type="password" name="password" class="form-control mb-2" id="password"
                                        placeholder="New Password">
                                </div>

                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="register" class="btn btn-info">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <x-adminfooter />