<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Fjalla+One|Montserrat:300,400,700,800|Open+Sans:300');

body {
 
  height: 100%;
  margin: 0;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

main{
  max-width: 720px;
  margin: 5% auto;
}

.card{
  box-shadow: 0 6px 6px rgba(#000, 0.3);
  transition: 200ms;
  background: #fff;

  
  .card__title{
    display: flex;
    align-items: center;
    padding: 30px 40px;
    
    h3{
      flex: 0 1 200px;
      text-align: right;
      margin: 0;
      color: #252525;
      font-family: sans-serif;
      font-weight: 600;
      font-size: 20px;
      text-transform: uppercase;
    }
    
    .icon{
      flex: 1 0 10px;
      background: linear-gradient(to right,#000000,#FF9B00);
      color: #fff;
      padding: 10px 10px;
      transition: 200ms;
      
      > a{
        color: #fff;
      }
      
      &:hover{
        background: #252525;
      }
    }
  }
  
  .card__body{
    padding: 0 40px;
    display: flex;
    flex-flow: row no-wrap;
    margin-bottom: 25px;
      border-radius: 30px;
    
    > .half{
       border-radius: 30px;
      padding: 0 15px;
      flex: 1 0 50%;
    }
    
    .featured_text{
      h1{
        margin: 0;
        padding: 0;
        font-weight: 800;
        font-family: "Montserrat", sans-serif;
        font-size: 64px;
        line-height: 50px;
        color: #181e28;
        text-transform: uppercase;
      }
      
      p{
        margin: 0;
        padding: 0;
        
        &.sub{
          font-family: "Montserrat", sans-serif;
          font-size: 26px;
          text-transform: uppercase;
          color: #686e77;
          font-weight: 300;
          margin-bottom: 5px;
        }
        
        &.price{
          font-family: "Fjalla One", sans-serif;
          color: #252525;
          font-size: 26px;
        }
      }
    }
    
    .image{
      padding-top: 15px;
      width: 100%;
      
      img{
        display: block;
        max-width: 100%;
        height: auto;
      }
    }
    
    .description{
      margin-bottom: 25px;
      
      p{
        margin: 0;
        font-family: "Open Sans", sans-serif;
        font-weight: 300;
        line-height: 27px;
        font-size: 16px;
        color: #555;
      }
    }
    
    span.stock{
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
      color: #a1cc16;
    }
    
    .reviews{
      .stars{
        display: inline-block;
        list-style: none;
        padding: 0;
        
        > li{
          display: inline-block;
          
          .fa{
            color: #f7c01b;
          }
        }
      }
      
      > span{
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        margin-left: 5px;
        color: #555;
      }
    }
  }
  
  .card__footer{
    padding: 30px 40px;
    display: flex;
    flex-flow: row no-wrap;
    align-items: center;
    position: relative;
    
    &::before{
      content: "";
      position: absolute;
      display: block;
      top: 0;
      left: 40px;
      width: calc(100% - 40px);
      height: 3px;
      background: #115dd8;
      background: linear-gradient(to right, #115dd8 0%,#115dd8 20%,#ddd 20%,#ddd 100%);
    }
    
    .recommend{
      flex: 1 0 10px;
      
      p{
        margin: 0;
        font-family: "Montserrat", sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 14px;
        color: #555;
      }
     
      h3{
        margin: 0;
        font-size: 20px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        color: #115dd8;
      }
    }
    
    
  }
}
.profile-btn{
  background-color: #FF9B00;
  text-decoration: none;
  width: 130px;
  height: 50px;
  border-radius: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #ffffff;
}

.profile-btn:hover{
  background-color: #000;
  color: white;
  transition: ease 0.3s;
  transform: scale(1.1);
}


/* MOBILE RESPONSIVE ADJUSTMENTS */
@media screen and (max-width: 768px) {
  /* Stack the card body halves vertically */
  .card__body {
    flex-direction: column;
    gap: 20px;
    padding: 20px;
  }

  .card__body .half {
    flex: 1 1 100%;
    padding: 0;
  }

  /* Resize featured text */
  .featured_text h1 {
    font-size: 2rem; /* smaller on tablet */
    line-height: 1.2em;
  }

  .featured_text p.sub,
  .featured_text p.price {
    font-size: 1rem;
  }

  /* Adjust card title for small screens */
  .card__title {
    flex-direction: row; /* still row but allow wrap */
    flex-wrap: wrap;
  }

  .card__title h3 {
    flex: 1 1 100%;
    text-align: left;
    margin-top: 10px;
  }

  /* Card footer adjustments */
  .card__footer {
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    padding: 20px;
  }

  .card__footer::before {
    width: 100%;
    left: 0;
  }

  /* Profile button full width */
  .profile {
    width: 100%;
    justify-content: center;
    padding: 12px 0;
    font-size: 0.9rem;
  }
}

@media screen and (max-width: 480px) {
  .featured_text h1 {
    font-size: 1.5rem;
  }

  .featured_text p.sub,
  .featured_text p.price {
    font-size: 0.85rem;
  }

  .description p {
    font-size: 0.8rem;
  }

  .reviews span {
    font-size: 0.75rem;
  }
}
  </style>
</head>

<body>
  @include('layouts.nav')

  <main>
    <div class="card">
      <div class="card__title">
        <div class="icon">
          <a href="#"><i class="fa fa-arrow-left"></i></a>
        </div>
        <h3>New product</h3>
      </div>
      <div class="card__body">
        <div class="half">
          <div class="featured_text">
            <h1>{{$order->product_name}}</h1>
            <p class="sub">DJI</p>
            <p class="price">LKR {{$order->product_price}}/=</p>
          </div>
          <div class="image">
            <img src="{{ asset('upload_aircraft/'.$order->aircraft) }}" alt="">
          </div>
        </div>
        <div class="half">
          <div class="description">
            <p>Order Id: {{$order->id}}</p>
            <p>Order Id: {{$order->product_id}}</p>
            <p>Status : {{$order->status}}</p>
            <p>Quantity: {{$order->quantity}}</p>
            <p>Order Id: {{$order->address}}</p>
            
          </div>
          <span class="stock"><i class="fa fa-pen"></i> In stock</span>
          <div class="reviews">
            <ul class="stars">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
            <span>(64 reviews)</span>
          </div>
        </div>
      </div>
      <div class="card__footer">
        <div class="recommend">
          <h3>Tech-Enabled Tracking</h3>
          <p>The Future of Delivery: Transparency and Real-Time Updates</p>
        </div>
        <div class="action">
          
          <a type="button" class="profile-btn" href="{{ route('pages.profile') }}">Go to profile</a>
        </div>
      </div>
    </div>
  </main>

  @include('layouts.footer')
</body>

</html>