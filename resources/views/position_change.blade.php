<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Position Change</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-2 mt-2 w-50 align-middle">
        <div class="card">
            <div class="card-header">
                Change the position
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm text-center">{{ $member->name }}</div>
                    <div class="col-sm">
                        <form action="/contributers/{{ $member->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <select class="form-select" aria-label="Default select example" name="member_type">
                                @if( Auth::user()->type == 'owner')
                                    @if($member->type == "owner")
                                        <div>
                                            <option value="owner" selected>Owner </option>
                                            <option value="admin">Admin</option>
                                            <option value="member">Member</option>
                                        </div>
                                    @elseif($member->type == "admin")
                                        <div>
                                            <option value="owner">Owner</option>
                                            <option value="admin" selected>Admin</option>
                                            <option value="member">Member</option>
                                        </div>
                                    @else
                                        <div>
                                            <option value="owner">Owner</option>
                                            <option value="admin">Admin</option>
                                            <option value="member" selected>Member</option>
                                        </div>
                                    @endif
                                @else
                                    @if($member->type == "owner")
                                        <div>
                                            <option value="owner" selected>Owner </option>
                                        </div>
                                    @elseif($member->type == "admin")
                                        <div>
                                            <option value="admin" selected>Admin</option>
                                            <option value="member">Member</option>
                                        </div>
                                    @else
                                        <div>
                                            <option value="admin">Admin</option>
                                            <option value="member" selected>Member</option>
                                        </div>
                                    @endif
                                @endif
                            </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary float-end mt-2" value="Save">
                <!-- <a href="#" class="btn btn-primary float-end mt-2">Save</a> -->
                </form>
            </div>
        </div>
        <p class="mt-4"><a href="/contributers" class="link-underline-light"><< Back to Contributer page</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>