<h1>Hello Badhon<h1>

@if(session()->has('success'))
    <strong> {{ session()->get('success')}}</strong>
@endif

@if(session()->has('error'))
    <strong> {{ session()->get('error')}}</strong>
@endif
<form method="post" action=" {{ route('update.password')}}">
                    @csrf
                    <div>
                            <label>Current Password</label>
                            <input type="password" name="current_password" class="form-control" required>

                    </div><br>
                    <div>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div><br>
                    <div>
                            <label>ConfirmPassword</label>
                            <input type="password" name="password_confirmation" class="form-control" required>

                    </div><br>
                    <button type="submit" class="btn btn-primary" > Change Password</button>
                </form>