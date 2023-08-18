<section>
    <h2 class="small-title">Profile</h2>
    <div class="card mb-5">
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <!-- Name -->
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="name"
                            value="{{ old('name', $user->name) }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                </div>

                <!-- Username -->
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="username"
                            value="{{ old('username', $user->username) }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('username')" />
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="email"
                            value="{{ old('email', $user->email) }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Photo -->
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Photo</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <div class="position-relative d-inline-block" id="singleImageUploadExample">
                            <img src="{{ isset($user->profile_photo_path) ? Storage::url($user->profile_photo_path) : Storage::url('img/profile/no_image.webp') }}"
                                alt="alternate text"
                                class="rounded-xl border border-separator-light border-4 sw-11 sh-11" />
                            <button
                                class="btn btn-sm btn-icon btn-icon-only btn-separator-light rounded-xl position-absolute e-0 b-0"
                                type="button">
                                <i data-acorn-icon="upload"></i>
                            </button>
                            <input class="file-upload d-none" type="file" name="photo"
                                accept="image/*" />
                        </div>
                    </div>
                </div>
                <!-- Photo End -->

                <div class="mb-3 row mt-5">
                    <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>