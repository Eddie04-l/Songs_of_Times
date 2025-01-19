<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage | {{Auth::user()->name}}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @vite(['resources/css/home.css', 'resources/js/app.js'])
</head>
<style>
    body{
        background-color: antiquewhite; 
        margin: 0;
        padding: 0;
    }
    ::-webkit-scrollbar{
        width: 15px;
    }
    ::-webkit-scrollbar-thumb{
        background: #ff5c00;
        border-radius: 20px;
    }
    .acc_det h1{
        color: goldenrod;
        font-family: 'Times New Roman', Times, serif;
        font-size: 70px;
        padding-top: 30px;
        font-weight: 600;
    }
    .grid-container{
        display: grid;
        grid-template-columns: 50% 50%;
    }
    .grid1 img{
        width: 100%;
        height: auto;
    }
    .paybtn button{
        width: 50%;
        height: auto;
        margin-left: 50%;
    }
    .flex{
        display: grid;
        grid-template-columns: 50% 45%;
        padding-left: 5%;
    }
    .en img{
        width: 200px;
        height: 200px;
    }
    @media screen and (max-width:1180px){
        .acc_det h1{
        color: goldenrod;
        font-family: 'Times New Roman', Times, serif;
        font-size: 60px;
        padding-top: 30px;
        font-weight: 600;
        text-align: center;
    }
    .grid-container{
        display: grid;
        grid-template-columns: 40% 60%;
    }
    .grid1 img{
        width: 100%;
        height: auto;
    }
    .paybtn button{
        width: 50%;
        height: auto;
        margin-left: 50%;
    }
    .flex{
        display: grid;
        grid-template-columns: 50% 45%;
        padding-left: 5%;
    }
    .flex h3{
        font-size: 20px;
    }
    .en img{
        width: 100px;
        height: 100px;
    }   
    }
    @media screen and (max-width:850px){
        .acc_det h1{
        color: goldenrod;
        font-family: 'Times New Roman', Times, serif;
        font-size: 60px;
        padding-top: 30px;
        font-weight: 600;
        text-align: center;
    }
    .grid-container{
        display: block;
    }
    .grid1 img{
        width: 100%;
        height: auto;
    }
    .paybtn button{
        width: 70%;
        height: auto;
        margin-left: 15%;
    }
    .flex{
        display: grid;
        grid-template-columns: 50% 45%;
        padding-left: 5%;
    }
    .flex h3{
        font-size: 20px;
    }
    .en img{
        width: 100px;
        height: 100px;
    }   
    }
    @media screen and (max-width:1100px){
        .acc_det h1{
        color: goldenrod;
        font-family: 'Times New Roman', Times, serif;
        font-size: 60px;
        padding-top: 30px;
        font-weight: 600;
        text-align: center;
    }
    .grid-container{
        display: grid;
        grid-template-columns: 50% 50%;
    }
    .grid1 img{
        width: 100%;
        height: auto;
    }
    .paybtn button{
        width: 50%;
        height: auto;
        margin-left: 50%;
    }
    .flex{
        display: grid;
        grid-template-columns: 50% 45%;
        padding-left: 5%;
    }
    .flex h3{
        font-size: 20px;
    }
    .en img{
        width: 100px;
        height: 100px;
    }   
    }
    @media screen and (max-width:480px){
        .acc_det h1{
        color: goldenrod;
        font-family: 'Times New Roman', Times, serif;
        font-size: 45px;
        padding-top: 30px;
        font-weight: 600;
        text-align: center;
    }
    .grid-container{
        display: block;
    }
    .grid1 img{
        width: 100%;
        height: auto;
    }
    .paybtn button{
        width: 50%;
        height: auto;
        margin-left: 25%;
    }
    .flex{
        display: grid;
        grid-template-columns: 47% 40%;
        padding-left: 5%;
        justify-content: space-between;
        margin-bottom: 200px;
    }
    .flex h3{
        font-size: 20px;
    }
    .en img{
        width: 100px;
        height: 100px;
    }
    }
</style>
<body>
    
<div class="grid-container">
   <div class="grid1">
        <img src="{{ URL('images/Copy-of-Copy-of-DSC08362-Large-1-520x347.jpeg')}}" alt="">
    </div>
    <div class="grid2">
        <div class="container">
            <div class="">
                <span>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="acc_det">
                        <h1>Edu-Tech Tour</h1>
                    </div>
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-8 col-md-offset-2">
                                <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                <input type="hidden" name="orderID" value="345">
                                <input type="hidden" name="amount" value="2500000"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}} 
                            
                                <p>
                                    <div class="paystack">
                                    <div class="paybtn">
                                    <button class="btn btn-outline-dark" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Book Your Spot!
                                    </button>
                                    </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                </span>
        </div>
        <div class="flex">
            <h3>Brought to you by: <img class="daytrit" style="width:200px;" src="{{ URL('images/DayTrit.png')}}" alt=""></h3>
            <div class="en"><h3>Endorsed by: <img src="{{ URL('images/lagg.png')}}" alt=""></h3></div>
        </div>
    </div>
</div>

</body>
</html>