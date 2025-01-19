<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap-5.css"> -->
    <title>EduTechTour | Register</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    body{
        background-color: antiquewhite; 
        margin: 0;
    }
    ::-webkit-scrollbar{
        width: 15px;
    }
    ::-webkit-scrollbar-thumb{
        background: #ff5c00;
        border-radius: 20px;
    }
    .edu1{
        padding: 10px;
        display: grid;
        grid-template-columns: 48% 46%;
        justify-content: space-around;
        height: auto;
    }
    .edu1_grid1 img{
        width: 100%;
        height: auto;
    }
    .edu2{
        background-color: white;
        display: grid;
        grid-template-columns: 46% 49%;
        justify-content: space-around;
        height: auto;
        padding: 10px;
    }
    .edu2_grid2 p{
        font-size: 20px;
        padding-top: 50px;
    }
    .edu2_grid1 p{
        font-size: 20px;
        padding-top: 60px;
    }
    .edu2_grid2 img{
        width: 100%;
        height: auto;
    }
    h1{
        text-align: center;
        color: goldenrod;
        font-family: 'Times New Roman', Times, serif;
        font-size: 70px;
    }
    input,select{
        width: 60%;
        margin-left: 20%;
        padding: 10px;
        border-radius: 10px;
        /* border: solid 1px #000; */
        border: none;
        margin-bottom: 10px;
        outline: none;
    }
    button{
        width: 30%;
        margin-left: 35%;
        background: #ff5c00;
        color: #fff;
        border-radius: 20px;
        font-size: 20px;
        font-weight: 600;
        padding: 7px;
        border: none;
        outline: none;
        margin-bottom: 20px;
        outline: none;
    }
    @media screen and (max-width:1024px){
        .edu1{
            display: block;
            justify-content: space-around;
            height: auto;
        }
        .edu1_grid1 img{
            width: 100%;
            height: auto;
            padding: 20px;
        }
        .edu2{
            background-color: white;
            display: block;
            grid-template-columns: 46% 49%;
            justify-content: space-around;
            height: auto;
        }
        .edu2_grid2 p{
            font-size: 20px;
            padding-top: 50px;
        }
        .edu2_grid1 p{
            font-size: 20px;
            padding-top: 60px;
        }
        .edu2_grid2 img{
            width: 100%;
            height: auto;
            padding: 20px;
        }
    }
    @media screen and (max-width:480px){
        /* body{
            display: none;
        } */
        h1{
            text-align: center;
            color: goldenrod;
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
        }
        input,select{
            width: 80%;
            padding: 10px;
            margin-left: 10%;
            border-radius: 10px;
            /* border: solid 1px #000; */
            border: none;
            margin-bottom: 10px;
            outline: none;
        }
        button{
            width: 50%;
            margin-left: 25%;
            background: #ff5c00;
            color: #fff;
            border-radius: 20px;
            font-size: 20px;
            font-weight: 600;
            padding: 7px;
            border: none;
            outline: none;
            margin-bottom: 20px;
            outline: none;
        }
    }
    .error{
        text-align: center;
        color: red;
    }
    .registration{
        margin-left: 10%;
    }
    header{
        text-align: center;
        font-size: 50px;
        font-weight: 600;
        color: goldenrod;
    }
</style>
<body>
    <h1>Edu-Tech Tour</h1>
    <div class="edu1">
                <div class="edu1_grid1">
                    <img src="{{ URL('images/Tech-Education-in-Africa.png')}}" alt="">
                </div>
                <div class="edu2_grid2">
                    <p>
                        In accordance with directives issued by the Federal Government, 
                        the <b>Ministry of Education</b> underscores the significance and mandatory implementation of technology 
                        courses within educational institutions. 
                        It is imperative that schools adhere to this directive and 
                        incorporate technological courses into their curricula and 
                        encourage excursions to tech hubs and companies within and outside their location.
                </div>
            </div>
            <div class="edu2">
                <div class="edu2_grid1">
                    <p>
                        The <b>Edu-Tech Tour Initiative</b> aims to expose students in Lagos State to the latest developments in technology 
                        by organizing educational tours to <b>renowned technology hubs</b>, <b>innovation centers</b>, <b>and tech-based companies.</b><br> 
                        This initiative is designed to complement the academic curriculum and enhance students' understanding 
                        of real-world applications of technology.
                    </p>
                </div>
                <div class="edu2_grid2">
                <img src="{{ URL('images/V527586388_g.jpeg')}}" alt="">
                </div>
            </div>
                <div class="form">
                    <div class="input-box">
                        <header>Register Here</header>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                                <input id="name" placeholder="Name of School" type="text" class="input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="email" placeholder="Email Address" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email"><br>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                                <input id="number" placeholder="Mobile Number" type="number" class="input" name="number" value="{{ old('number') }}" required autocomplete="number"><br>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

                                <select name="students" id="students" class="input" ><br>
                                    <option value="unselected">Select Number Of Students</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                                @error('students')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <select name="lga" id="lga" class="input" ><br>
                                    <option value="unselected">Local Goverment Area</option>
                                    <option value="Agege">Agege</option>
                                    <option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
                                    <option value="Alimosho">Alimosho</option>
                                    <option value="Amuwo-Odofin">Amuwo-Odofin</option>
                                    <option value="Apapa">Apapa</option>
                                    <option value="Badagry">Badagry</option>
                                    <option value="Epe">Epe</option>
                                    <option value="Eti-Osa">Eti-Osa</option>
                                    <option value="Ibeju/Lekki">Ibeju / Lekki</option>
                                    <option value="Ifako Ijaiye">Ifako Ijaiye</option>
                                    <option value="Ikeja">Ikeja</option>
                                    <option value="Ikorodu">Ikorodu</option>
                                    <option value="Kosofe">Kosofe</option>
                                    <option value="Lagos Island">Lagos Island</option>
                                    <option value="Lagos Mainland">Lagos Mainland</option>
                                    <option value="Mushin">Mushin</option>
                                    <option value="Ojo">Ojo</option>
                                    <option value="Oshodi-Isolo">Oshodi-Isolo</option>
                                    <option value="Shomolu">Shomolu</option>
                                    <option value="Surulere">Surulere</option>
                                </select>
                                @error('providus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <input id="password" type="password" placeholder="Password" class="input" name="password" required autocomplete="new-password"><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                    
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="input" name="password_confirmation" required autocomplete="new-password"><br>

                        <div class="providus_bank">
                            <select name="providus" id="providus" class="input" ><br>
                                <option value="unselected">Do you have an account with Providus Bank?</option>
                                <option value="YES">Yes</option>
                                <option value="NO">No</option>
                            </select>
                            @error('providus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- <input type="submit" value="Register"> -->
                        
                                <button type="submit">
                                    {{ __('Register') }}
                                </button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <div class="grid-container">
    <div class="row1">
    <img src="{{ URL('images/background.jpeg')}}" alt="">
    <span>
        <h1>Edu-Tech Tour</h1>
        <p id="slide-1">
        In accordance with directives issued by the Federal Government, 
        the Ministry of Education underscores the significance and mandatory implementation of technology 
        courses within educational institutions. 
        It is imperative that schools adhere to this directive and 
        incorporate technological courses into their curricula and 
        encourage excursions to tech hubs and companies within and outside their location.
        </p>
        <br>
        <hr>
     <br>-->
        <!-- <p id="slide-2">
        The Edu-Tech Tour Initiative aims to expose students in Lagos State to the latest developments in technology 
        by organizing educational tours to renowned technology hubs, innovation centers, and tech-based companies. 
        This initiative is designed to complement the academic curriculum and enhance students' understanding 
        of real-world applications of technology.
        </p> -->
        <!-- <br>
        
        <div class="slider-nav">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
        </div>
    </span>
    </div>
    <div class="row">
        <div class="column">
            <div class="card">
            <a href="https://ng.linkedin.com/company/daytrit"><img src="{{ URL('images/DayTrit.png')}}" alt=""></a><br><br>
                <h2>Register Here</h2><br> <br>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>  -->

</body>
</html>