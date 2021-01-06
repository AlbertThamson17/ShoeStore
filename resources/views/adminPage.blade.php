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
    <title>home</title>

<style>
    .layout{
        width: 50%;
    }

</style>

</head>
@extends('layout.homePageA')
    @section('header')
        <body style="background-color: rgb(210, 210, 245)">
            <div class="layout" >
                <h2 style = "text-transform:capitalize; margin-left:25pt;color: aqua;font-style: unset" >View All Shoe</h2>
                <div class="d-flex flex-row ">
                          @foreach ($barang as $Sepatu)
                          <div class="col-lg-4">
                              <a href="{{url('/detailPage/'.$Sepatu->id)}}">
                              <div class="card" style="width: 18rem" >
                                  <img src="{{asset('/storage/gambar/'.$Sepatu->image)}}" class="card-img-top" alt="..."style="width: 18rem;height : 18rem;">
                                  <div class="card-body">
                                    <h5 class="card-title">{{$Sepatu->name}}</h5>
                                    <p class="card-text">Rp. {{$Sepatu->price}}</p>
                                  </div>
                                </div>
                              </a>
                          </div>
                          @endforeach
                        </div>
              </div>
              {{$barang->links()}}
              </div>
        </body>

</html>
@endsection



