<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Page</title>
    <style>
        .layout{
            width: 50%;
        }

    </style>
    </head>



            @if (Auth::user()->posisi==1)
            {{-- @extends('layout.homePageA')
    @section('header') --}}
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary text-white ">
            <a class="navbar-brand" href="/adminPage" style="color: aqua; size: 40pt">Just Du It !</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav mr-auto" style="padding: 10pt">
                <li class="dropdown">
                  <a class="btn btn-light dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    Menu
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('/adminPage')}}">View All Shoe</a>
                    <a class="dropdown-item" href="{{url('/addShoes')}}">Add Shoes</a>
                  <a class="dropdown-item" href="{{url('/viewTransactionAdmin')}}">View Transaction</a>
                  </ul>
                </li>

              {{-- <ul class="nav navbar-nav mr-auto" style="padding: 10pt"> --}}
                <form class="form-inline my-2 my-lg-0"  action="/searchA" method="GET">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                {{-- </ul> --}}
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                  <a class="nav-link" style="color: white" href="{{url('/loginPage')}}">Login</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{url('/welcome')}}">Register</a>
              </li>
              </ul>

            </div>
          </nav>
         </header>
            <body style="background-color: rgb(210, 210, 245)">
                <div class="card mb-3" style="max-width: 1500px; margin-left: 20pt">
                    <h2 style = "text-transform:capitalize; margin-left:25pt;color: black;font-style: unset" >Shoe Detail</h2>
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{asset('/storage/gambar/'.$Sepatu->image)}}" class="card-img" alt="" style="width: 500px;height : 500px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="card-title">{{$Sepatu->name}}</h2>
                          <p class="card-text">Description : {{$Sepatu->description}}</p>
                          <p class="card-text">Harga : {{$Sepatu->price}}</p>


                          {{-- ini buat member --}}

                        {{-- ini buat admin --}}
                          <a href="{{url('/updatePage/'.$Sepatu->id)}}" class="btn btn-secondary">
                              Update Item
                        </a>
                        </div>
                      </div>
                    </div>
                </div>
            </body>
            {{-- @endsection --}}
            @else
            {{-- @extends('layout.homePageM')
@section('header') --}}
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary text-white ">
        <a class="navbar-brand" href="/homePage" style="color: aqua; size: 40pt">Just Du It !</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav mr-auto" style="padding: 10pt">
            <li class="dropdown">
              <a class="btn btn-light dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                Menu
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
              <a class="dropdown-item" href="{{url('/homePage')}}">View All Shoe</a>
              <a class="dropdown-item" href="{{url('/addCart')}}">View Cart</a>
              <a class="dropdown-item" href="{{url('/viewTransaction')}}">View Transaction</a>
              </ul>
            </li>

          {{-- <ul class="nav navbar-nav mr-auto" style="padding: 10pt"> --}}
            <form class="form-inline my-2 my-lg-0" action="/search" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
              </form>
            {{-- </ul> --}}
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" style="color: white" href="{{url('/loginPage')}}">Login</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="{{url('/welcome')}}">Register</a>
          </li>
          </ul>

        </div>
      </nav>
     </header>
            <body style="background-color: rgb(210, 210, 245)">
                <div class="card mb-3" style="max-width: 1500px; margin-left: 20pt">
                    <h2 style = "text-transform:capitalize; margin-left:25pt;color: black;font-style: unset" >Shoe Detail</h2>
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{asset('/storage/gambar/'.$Sepatu->image)}}" class="card-img" alt="" style="width: 500px;height : 500px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="card-title">{{$Sepatu->name}}</h2>
                          <p class="card-text">Description : {{$Sepatu->description}}</p>
                          <p class="card-text">Harga : {{$Sepatu->price}}</p>
                        <form action="/addCartID/{{$Sepatu->id}}" method="POST">Quantity :<input type="number" name="quantity" >
                            @csrf

                          {{-- ini buat member --}}

                            <button class="btn btn-secondary" type="submit" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                  <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                               Add To Cart
                                </button>

                        </form>

                        {{-- ini buat admin --}}

                        </div>
                      </div>
                    </div>
                </div>
            </body>
            {{-- @endsection --}}
            @endif

    </html>

