<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">

  <!-- popins font -->
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    

    .line {
      width: auto;
      height: 3px;
      background: linear-gradient(to top, #000000, #C70039);
      margin-top: 90px;
     
    }

    .offcanvas-title {
      font-size: 24px;
      font-family: "Science Gothic", sans-serif;
      text-transform: uppercase;
      text-align: center;
    }

    .side-bar {
      display: flex;
      flex-direction: column;
      gap: 70px;
      margin-top: 30px;
      justify-content: center;
      align-items: center;
      justify-items: center;
    }

    /* .side-bar-item{

  } */

    .side-bar-item a {
      text-decoration: none;
      font-size: 18px;
      font-family: 'Poppins';
      font-weight: 600;
      color: #ff0051ff;
      padding: 20px;
      text-transform: capitalize;
    }

    .header{
    position: fixed;
    height: 100px;
    width: 100%;
    background-color: #222831;
    display: flex;
    justify-content: space-between;
    top: 0;
    left: 0;
    z-index: 9999;
}

    .profile{
      /* background-color: #C70039; */
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .user-name{
      color: #FF9B00;
      text-transform: capitalize;
    }
  </style>
</head>

<body>
  <div class="header">

    <div style="display: flex;justify-content: center;color: #FF9B00;padding:20px;">
      <button class="btn offcanves-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF9B00" class="bi bi-menu-up" viewBox="0 0 16 16">
        <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793zM1 9V6h14v3zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5m0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5m0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5" />
      </svg>
    </button>
    </div>

    <div  style="display: flex;justify-content: center;color: #FF9B00;align-items: center;text-align: center;padding:10px;text-transform: capitalize;"><h1></h1></div>

    <div style="display: flex;justify-content: center;align-items: center;gap:10px;padding:20px;justify-items: flex-start;">
      <div class="profile">
        <img src="{{asset('images/admin/shehan.jpg')}}" class="" alt="" style="border-radius: 50%;height:50px;width: 50px;object-fit: cover;">
      </div>
      <h6 class="user-name">shehan fernando</h6>
    </div>

    <!-- <div class="line"></div> -->

  </div>






  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <!-- <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" style="text-align: center;">admin panel</h5> -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="display: flex;align-items: center;justify-content: center;">
      <!-- <p>Try scrolling the rest of the page to see this option in action.</p> -->
      <div class="side-bar">
        <div class="side-bar-item">
          <a href="{{ route('admin.index') }}">dashboard</a>
        </div>
        <div class="side-bar-item">
          <a href="{{ route('products.index') }}">add product</a>
        </div>
        <div class="side-bar-item">
          <a href="{{ route('admin.index') }}">manage users</a>
        </div>
        <div class="side-bar-item">
          <a href="{{ route('adminOrder.index') }}">manage orders</a>
        </div>
        <div class="side-bar-item">
          <a href="">appointments</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>