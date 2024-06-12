<div class="page-wrapper">
    <div class="max-w-lg mx-auto card">
        <form class="card-body" wire:submit="simpan">
            <h3 class="card-title">Update Profile</h3>

            <div class="py-4 space-y-2">
                <label class="form-control">
                    <div class="lable">
                        <span class="label-text">
                            Nama lengkap
                        </span>
                    </div>
                    <input type="text" placeholder="Type here" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('name'),
                    ]) wire:model='name' />
                </label>
                <lable class="form-control">
                    <div class="label">
                        <span class="label-text">Alamat email</span>
                    </div>
                    <input type="email" placeholder="Type here" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('email'),
                    ]) wire:model='email'
                        autocomplete='email'>
                </lable>
                <lable class="form-control">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input type="password" placeholder="Ketik disini untuk mengubah password"
                        @class([
                            'input input-bordered',
                            'input-error' => $errors->first('password'),
                        ]) wire:model='password' />
                </lable>
            </div>

            <div class="card-actions">
                <button class="btn btn-primary">
                    <x-tabler-check class="sizer" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
