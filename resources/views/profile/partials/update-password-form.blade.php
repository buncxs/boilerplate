<section>
    <h2 class="small-title">Password</h2>
    <div class="card mb-5">
        <div class="card-body">
            <form method="post" action="{{ route('password.update') }}" id="resetPasswordForm">
                @csrf
                @method('put')
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Current Password</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input class="form-control" id="current_password" name="current_password" type="password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input class="form-control" id="password" name="password" type="password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Password Confirmation</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input class="form-control" id="password_confirmation" name="password_confirmation"
                            type="password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="mb-3 row mt-5">
                    <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
