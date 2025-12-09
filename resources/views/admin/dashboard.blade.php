<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="css">

  
</head>

<style>
  
  /* dashboard */
  h4 {
    margin-top: 30px;
    font-family: 'Poppins';
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
  }

  /* summery cards */
  .summery-content {
    display: flex;
    gap: 10px;
    margin-top: 100px;
    justify-content: center;
    align-items: center;
  }

  .summery-card{
    width: auto;
    height: 170px;
    background:linear-gradient(to top,#000000,#C70039); 
    border-radius: 10px;
    margin-bottom: 10px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
    background-color: #000000;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #FF8400;
    /* box-shadow: 0px 0px 15px #FF8400,
    0px 0px 15px #FF8400 inset; */
  }

  .summery-card h5 {
    color: #FF8400;
    font-family: 'Poppins';
    text-transform: capitalize;
  }

  /* gallery card */
  .gallery-card {
    width: auto;
    height: 300px;
    background-color: #ff0051ff;
    border-radius: 10px;
    margin-bottom: 10px;
  }

  .gallery {
    width: auto;
    height: 300px;
  }

  .overflow-background {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #adadadff;
    border-radius: 10px;
  }
</style>

<body>

@include('layouts.adminNav')
  

  <div>
    <h4>dashboard</h4>
  </div>

  <!-- summery cards -->
  <div class="container-fluid mt-4">
    <div class="summey-content">
      <div class="row">
        <div class="col-12 col-md-3">
          <div class="summery-card">
            <h5>Total Orders {{$count}}</h5>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="summery-card">
            <h5>Total Users {{$users}}</h5>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="summery-card">
            <h5>Total appointments 10</h5>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="summery-card">
            <h5>Total messages 10</h5>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- gallery -->
  <!-- <div class="container-fluid mt-5 mb-5">
    <div class="row">

      <div class="col-12 col-md-8 overflow-background">
        <div class="overflow-y-scroll" style="height: 300px;width: auto;">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="gallery-card"></div>
      </div>

    </div>

  </div> -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>

</html>