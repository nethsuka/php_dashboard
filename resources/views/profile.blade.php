<x-dashboardHead active="user-profile"/>

<div class="content">
    @if(session('success'))
        <x-success-alert/>
    @elseif(session('error'))
        <x-error-alert/>
    @endif
    <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">{{Auth::user()->name}}'s&nbsp; Profile</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update', Auth::user()->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name', Auth::user()->name) }}" required>
                    </div>
                    </div>
                    <div class="col-md-6 pl-1">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>Password (disabled)</label>
                        <input type="password" class="form-control" disabled="" placeholder="Password" value="111111111">
                    </div>
                    </div>
                    <div class="col-md-6 pl-1">
                    <div class="form-group">
                        <label>Membership (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Membership" value="{{ Auth::user()->type }}">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<x-dashboardFooter/>