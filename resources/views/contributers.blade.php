<x-dashboardHead active="access-controls" buttonName="ADD MEMBER" url="/new-member"/>

      <!-- content -->
      <div class="content">
        @if(session('success'))
          <x-success-alert/>
        @elseif(session('error'))
          <x-error-alert/>
        @endif
        <div class="row">
          <div class="col-lg-10">
              <div class="card ">
                <div class="card-header ">
                  <h5 class="card-title">Member List</h5>
                  <p class="card-category">Access Controllers</p>
                </div>
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md">&nbsp;&nbsp;&nbsp;Name</div>
                    <div class="col-sm">Membership</div>
                    <div class="col-sm"></div>
                    <div class="col-sm"></div>
                  </div><br>
                  @if(!$user_list->isEmpty())
                    @foreach($user_list as $member)
                      <div class="row">
                        <div class="col-md"><p><i class="fa fa-circle text-primary"></i> {{ $member->name }}</p></div>
                        <div class="col-sm"><p><b>{{ $member->type }}</b></p></div>
                        <div class="col-sm">
                          <form action="/contributers/{{ $member->id }}">
                            @csrf
                            @if(Auth::user()->type == 'owner' || Auth::user()->type == 'admin')
                              <input type="submit" value="Change">
                            @else
                              <input type="submit" value="Change" disabled>
                            @endif
                          </form>
                        </div>
                        <div class="col-sm">
                          <form action="{{ route('new-member.destroy', $member->id)  }}" method="post" onsubmit="return confirm('Are you sure you want to delete this member?');">
                              @csrf
                              @method('DELETE')
                              @if(Auth::user()->type == 'owner' || Auth::user()->type == 'admin')
                                <button type="submit" class="btn btn-danger btn-sm mt-0" title="Delete">
                                    <img src="./assets/img/bin-removebg-preview.png" alt="delete icon" height="15px">
                                </button>
                              @else
                                <button type="submit" class="btn btn-danger btn-sm mt-0" title="Delete" disabled>
                                    <img src="./assets/img/bin-removebg-preview.png" alt="delete icon" height="15px">
                                </button>
                              @endif

                          </form>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <p>There is no data to show</p>
                  @endif
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <h3 class="description">Your content here</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- content ends here -->

<x-dashboardFooter/>