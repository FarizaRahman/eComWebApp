<x-header />

<section class="contact spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-title text-center">
                    <h2>My Account</h2>
                </div>

                <div class="contact__form">
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
                                 class="rounded-circle img-thumbnail"
                                 width="150" alt="Profile Picture">
                        </div>
                    @endif

                    {{-- Profile Update Form --}}
                    <form action="{{ url('updateUser') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <input type="text" name="fullname" placeholder="Full Name"
                                       value="{{ $user->fullname }}" required>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" name="email" placeholder="Email"
                                       value="{{ $user->email }}" readonly required>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label for="profilePic" class="form-label">Profile Picture</label>
                                <input type="file" name="file" accept="image/*" class="form-control" id="profilePic">
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label for="password" class="form-label">New Password (leave blank to keep current)</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="submit" class="site-btn">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<x-footer />
