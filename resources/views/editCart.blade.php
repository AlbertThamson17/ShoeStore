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
    <title>editCart</title>
    <style>
        .layout{
            width: 50%;
        }

    </style>
    </head>

    @extends('layout.homePageM')
    @section('header')

            <body style="background-color:rgb(210, 210, 245)">
                <div class="card mb-3" style="max-width: 1500px; margin-left: 20pt" >
                    <h2 style = "text-transform:capitalize; margin-left:25pt;color: black;font-style: unset" >Edit Cart</h2>
                    <div class="row no-gutters">
                      <div class="col-md-4" >
                        <img src="{{asset('/storage/gambar/'.$cart->image)}}" class="card-img" alt="" style="width: 500px;height : 500px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="card-title">{{$cart->name}}</h2>
                          <p class="card-text">{{$cart->price}}</p>
                          <p class="card-text">{{$cart->description}}</p>
                          {{-- ini buat member --}}
                        <form action="/edit/{{$cart->id}}" method="POST" >
                            @csrf
                          Quantity : <input type="number" name="quantity" value="{{$cart->qty}}">
                            <button>Add To Cart</button>

                        </form>
                    <form action="/delete/{{$cart->id}}" method="post">
                        @csrf
                            <button type="submit">Delete</button>
                        </form>
                        </div>
                      </div>
                    </div>
                </div>
            </body>

    </html>
@endsection
