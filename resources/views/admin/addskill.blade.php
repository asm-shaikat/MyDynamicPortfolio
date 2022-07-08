<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>ADD SKILL || SHAIKAT</title>
</head>

<body>
  <div class="pop-nav-btn-addskill">
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="fa fa-bars"></i></button>
  </div>
  <div class="main-pop-nav">
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasTopLabel" style="margin-left: 700px;">Admin || Navigation</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ url('/addproject') }}">Add Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/addskill') }}">Add Skill</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <div class="addskill">
    <h2>ADD SKILL</h2>
    <form action="/addskill1" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Skill Name</label>
        <input type="text" name="title" class="form-control input-area-color " id="exampleFormControlInput1" placeholder="Enter skill name" required>
      </div>
      <div class="mb-3">
        <select class="form-select" name="category" aria-label="Default select example">
          <option selected>Select Library/Framework Category</option>
          <option value="Frontend">Frontend</option>
          <option value="Backend">Backend</option>
          <option value="Database">Database</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tools Image</label>
        <input type="file" name="image[]" class="form-control input-area-color " id="exampleFormControlInput1" placeholder="Enter Tools Image" multiple required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tools Description</label>
        <textarea class="form-control input-area-color" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>