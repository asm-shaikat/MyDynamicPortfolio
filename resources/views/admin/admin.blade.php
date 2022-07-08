<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Admin || Shaikat</title>
</head>

<body>
  @extends('admin.navigation')
  @section('nav')
  @endsection
  @if(session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  <div class="addproject">
    <h2>ADD MORE PROJECT</h2>
    <form action="/addprojectdbms" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Project Title</label>
        <input type="text" class="form-control input-area-color" name="ptitle" id="exampleFormControlInput1" placeholder="Project title">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Front End</label>
        <input type="text" name="fend" class="form-control input-area-color " id="exampleFormControlInput1" placeholder="Front End Technology">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Back End</label>
        <input type="text" name="bend" class="form-control input-area-color " id="exampleFormControlInput1" placeholder="Back End Technology">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Database</label>
        <input type="text" name="dbms" class="form-control input-area-color " id="exampleFormControlInput1" placeholder="Database ">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Project Images</label>
        <input type="file" name="image[]" class="form-control input-area-color " id="exampleFormControlInput1" placeholder="Enter project Image" multiple required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Projecct Description</label>
        <textarea class="form-control input-area-color" name="pdescription" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success">ADD</button>
    </form>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>