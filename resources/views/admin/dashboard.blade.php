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

  .summery-card {
    width: auto;
    height: 170px;
    background: linear-gradient(to top, #000000, #C70039);
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

  .gallery-content {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;

  }

  .gallery-card {
    background-color: #C70039;
    height: 300px;
    width: 250px;
    border-radius: 20px;
  }

  .gallery-card1 {
    background-color: #C70039;
    height: 300px;
    width: 500px;
    border-radius: 20px;
  }

  .gallery-card2 {
    background-color: #C70039;
    height: 150px;
    width: 500px;
    border-radius: 20px;
  }

  .gallery-card3 {
    background-color: #C70039;
    height: 150px;
    width: 150px;
    border-radius: 20px;
  }

  
</style>

<body>

  @include('layouts.adminNav')


  <div style="margin-top: 100px;">
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

  <div class="container-fluid">
    <div class="gallery-content">
      <div class="gallery-card"></div>
      <div class="gallery-card1"></div>
      <div style="    display: flex;flex-direction: column;gap: 20px;">
        <div class="gallery-card2"></div>
        <div class="gallery-card2"></div>
      </div>

      <div style="display: flex;flex-direction: column;gap:20px;">
        <div style="display: flex;justify-content: center;gap:20px;">
          <div class="gallery-card3"></div>
          <div class="gallery-card3"></div>
        </div>

        <div style="display: flex;justify-content: center;gap:20px;">
          <div class="gallery-card3"></div>
          <div class="gallery-card3"></div>
        </div>

      </div>



    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>

</html>