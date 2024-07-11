<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4 p-4 align-middle w-25 border rounded" style="background-color:#CBC3F5">
        <form action="/form" method="post">
            @csrf
            <h6>Add a New Block</h6>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">URL</label>
                <input type="url" class="form-control" id="" aria-describedby="emailHelp" name="url" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name='pw'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p class="mt-4"><a href="/links" class="link-underline-light"><< Back to Social Media page</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>