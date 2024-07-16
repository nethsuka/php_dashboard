<x-dashboardHead active="social-media" buttonName="ADD NEW" url="/form"/>

      <div class="container" style="margin-top: 90px; max-height:800px;">
        <!-- <a href="/form"><button type="button" class="btn btn-success float-right">Add New</button></a> -->
        @if(session('success'))
          <x-success-alert/>
        @elseif(session('error'))
          <x-error-alert/>
        @endif
        @if(!$links->isEmpty())
        <div class="row">
          @foreach($links as $link)
          <div class="col-sm-3 mr-4">
            <div class="card mr-2" style="width: 18rem;float:left">
              <div class="card-header ">
                <h6 class="card-title"><i class="fa fa-circle text-warning"></i> {{ $link->name }}</h6>
              </div>
              <div class="card-body">
                  <div class="row">
                      <!-- <form action="/links/{{ $link->id }}" method="post"> -->
                      <form action="{{ route('links.update', $link->id) }}" method="post">
                          @csrf
                          @method('PUT')
                          <div class="col-sm">
                              <p>
                                  URL :
                                  <input type="url" name="url" value="{{ old('url', $link->url) }}" required>
                              </p>
                          </div>
                          <div class="col-sm">
                              <p>
                                Password : 
                                <input type="text" name="pw" value="{{ old('passwordForAccount', $link->passwordForAccount) }}" required>
                              </p>
                          </div>
                          <div class="col-sm">
                              <input type="submit" value="Save">
                        </form>
                          <!-- Add Delete Button -->
                          <form action="{{ route('links.destroy', $link->id) }}" method="post" class="float-right" onsubmit="return confirm('Are you sure you want to delete this link?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm float-right" title="Delete">
                                  <img src="./assets/img/bin-removebg-preview.png" alt="delete icon" height="15px">
                              </button>
                          </form>
                        </div>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @else
          <p>There is no data to show</p>
        @endif
        <div class="col-md-12">
          <h3 class="description">Your content here</h3>
        </div>
      </div>

<x-dashboardFooter/>