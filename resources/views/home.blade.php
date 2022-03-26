<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("https://wallpaperaccess.com/full/680087.jpg");
            background-repeat: no-repeat;
            background-size: 2300px 1100px;
        }
        #nav{
            display: flex;
            justify-content: flex-end;
            padding: 20px 80px;
        }
        .shoes{
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            border: solid 2px black; 
            border-radius: 20px;
            padding: 20px;
            margin-top: 30px;
            background-color: #EEEBDD;
            box-shadow: 10px 9px 10px 1px black;
        }
        .imgClass{
            margin-bottom: 20px;
            border-radius: 20px;
        }
        .price{
            text-align: center;
            /* margin-left: 100px */
        }
        .details{
            /* width: 150px;
            /* display: flex;
            justify-content: space-between; */ */
        }

/* CSS */
button {
  background: #344CB7;
  border: 1px solid black;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

button:hover,
button:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

button:active {
  opacity: .5;
  transform: scale(0.90);
}


.button-62 {
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

    </style>
</head>

<body>
    <div id="nav">
        <form action="{{url('/orders')}}">
        @csrf
            <input type="submit" class="button-62" value="CLICK TO OPEN CART" name="btn"/>
        </form>
    </div>
    <div style="display: flex; justify-content: space-around;">
        <form action="{{url('/item1')}}" method="POST">
        @csrf
            <div class="shoes">
                <img class="imgClass" src="https://sneakernews.com/wp-content/uploads/2020/07/Air-Jordan-7-Retro-Greater-China-CW2805_160-3.jpg" alt="AIR JORDAN 7 RETRO" height="250px" width="350px">
                <div class="details">
                    <h3>AIR JORDANS 7 RETRO OC</h3>
                    <h3 class="price">$ 3,098</h3>
                </div>
                <button type="submit" id="1" value="Air Jordan 7 Retro OC sneakers">add to cart</button>
            </div>
        </form>
        <form action="{{url('/item2')}}" method="POST">
        @csrf
            <div class="shoes">
                <img class="imgClass" src="https://sneakernews.com/wp-content/uploads/2018/01/2chainz-versace-shoes-2.jpg?w=780&h=550&crop=1" alt="Versace" height="250px" width="350px">
                <div class="details">
                    <h3>VERSACE TRIGRECA SNEAKERS</h3>
                    <h3 class="price">$ 10,300</h3>
                </div>
                <button type="submit" id="2" value="VERSACE TRIGRECA SNEAKERS">add to cart</button>
            </div>
        </form>
        <form action="{{url('/item3')}}" method="POST">
        @csrf
            <div class="shoes">
                <img class="imgClass" src="https://www.highsnobiety.com/static-assets/thumbor/J7R1i4h341FB41vQeQcMyq-iAhc=/1600x1067/www.highsnobiety.com/static-assets/wp-content/uploads/2017/04/15163500/adidas-yeezy-guide-wave-runner-main-1.jpg" alt="cake" height="250px" width="350px">
                <div class="details">
                    <h3>YEEZY BOOST 350</h3>
                    <h3 class="price">$ 2,040</h3>
                </div>
                <button type="submit" id="3" value="YEEZY BOOST 350">add to cart</button>
            </div>
        </form>
    </div>
    <div style="display: flex; justify-content: space-around;">
        <form action="{{url('/item4')}}" method="POST">
        @csrf
            <div class="shoes">
                <img class="imgClass" src="https://i.pinimg.com/736x/45/39/98/453998edd6efaca6e19ea17fd9a2b664.jpg" alt="muffin" height="250px" width="350px">
                <div class="details">
                    <h3>DIOR AIR JORDAN 1 HIGH</h3>
                    <h3 class="price">$ 37,480</h3>
                </div>
                <button type="submit" id="4" value="DIOR AIR JORDAN 1 HIGH">add to cart</button>
            </div>
        </form>
        <form action="{{url('/item5')}}" method="POST">
        @csrf
            <div class="shoes">
                <img class="imgClass" src="https://streetsense.co.in/wp-content/uploads/2021/05/nike-sb-dunk-low-what-the-p-rod-CZ2239-600-1.jpg" alt="biriyani" height="250px" width="350px">
                <div class="details">
                    <h3>Nike SB What The Dunk</h3>
                    <h3 class="price">$ 42,797</h3>
                </div>
                <button type="submit" id="5" value="Nike SB What The Dunk">add to cart</button>
            </div>
        </form>
        <form action="{{url('/item6')}}" method="POST">
        @csrf
            <div class="shoes">
                <img class="imgClass" src="https://sneakernews.com/wp-content/uploads/2022/01/air-jordan-1-zoom-cmft-purple-patent-CT0979-505-7.jpg?w=780&h=547&crop=1?w=780&h=547&crop=1?w=780&h=547&crop=1?w=1140" alt="cake" height="250px" width="350px">
                <div class="details">
                    <h3>AIR JORDAN DUNK HIGH</h3>
                    <h3 class="price">$ 1,240</h3>
                </div>
                <button type="submit" id="6" value="AIR JORDAN DUNK HIGH">add to cart</button>
            </div>
        </form>
    </div>
    
    </div>
</body>

</html>