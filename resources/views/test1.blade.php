<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Free Movie | home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar  navbar-expand-lg justify-content-center" style="background-color: #a7b2bd;text-align: center;">
        <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="index.html" style="font-weight: bold;">Home</a>
                      <a class="nav-link" href="applications.html">Applications</a>
                      <a class="nav-link" href="#">Galerry</a>
                      <a class="nav-link" href="#">About</a>
                  </div>
                </div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
              </button>

               <!---popup form----------->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!------------------->
        </div>
    </nav>
    <br>
    <h1 class="display-6 text-center">How to Downlaod A Film <font color="blue">Free</font></h1>

    @for($i = 2; $i < 10; $i++)
        <p>the number is {{ $i }}</p>
    @endfor

    @foreach($list as $array)
        <p>{{ $array->email }} --  {{ $array->name }}</p>
    @endforeach

    <p>{{ $name }} , {{ $age }}</p>

    <hr style="margin-left: 30px; margin-right: 30px;">
    <h5 class="display" style="margin-left: 20px; margin-right: 20px;">
      First visite below sites 
    </h5>
    <div class="container-sm">
      <div class="row">
        <div class="col" style="padding-left: 50px; padding-right: 50px;">
          <table class="table table-striped table-hover text-center">
            <tr>
              <td>The pirate bay</td>
            </tr>
            <tr>
              <td>YTS</td>
            </tr>
            <tr>
              <td>1337x</td>
            </tr>
            <tr>
              <td>Rarbg</td>
            </tr>
            <tr>
              <td>Torrenz2</td>
            </tr>
            <tr>
              <td>EZTV</td>
            </tr>
            <tr>
              <td>Limetorrents</td>
            </tr>
            <tr>
              <td>Zoogle</td>
            </tr>
            <tr>
              <td>MagnetDl</td>
            </tr>
            <tr>
              <td>Torrentdowloads</td>
            </tr>
          </table>
        </div>
        <div class="col">
          <p><font size="6px">A</font>fter that find a good copy of your film, When you are choosing a copy, pay attention
            to the leeshers and seeders columns on the sites. seeders means that who has the original copy and leechers means 
            people who dowload the film copy from the seeders. You can download the film copy that has highest seeders. These all sites are torrent sites, you can 
            directly download from the site but it's a bit complicated method, the easy way is downloading the film 
            through a utorrent or bit torrent application, to download through application click on the magnet button on the site,
            then it will automatically download through appliction. Once you download something from a torrent site you become a seeder 
            on this torrent network, you can help others to download the same copy from keeping the copy inside the application,
            if you don't like to share just remove the copy from the torrenting list .
          </p>
        </div>
      </div>
    </div>


    <div style="background-color: #a7b2bd;">
        <div class="container">
          <footer class="py-5">
            <div class="row">
        
              <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="index.html" class="nav-link p-0 text-muted">Home</a></li>
                  <li class="nav-item mb-2"><a href="applications.html" class="nav-link p-0 text-muted">Applications</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Galerry</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
              </div>
        
              <div class="col-md-5 offset-md-1 mb-3">
                <form>
                  <h5>Subscribe to our newsletter</h5>
                  <p>Monthly digest of what's new and exciting from us.</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
        
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-0 border-top">
              <p>&copy; 2022 Company, Inc. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
              </ul>
            </div>
          </footer>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>