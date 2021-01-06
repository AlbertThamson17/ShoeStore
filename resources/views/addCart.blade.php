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
    <title>addCart</title>
    <style>
        .layout{
            width: 50%;
        }

    </style>
    </head>


@extends('layout.homePageM')
    @section('header')

            <body style="background-color: rgb(210, 210, 245)">
              <h2 style = "text-transform:capitalize; margin-left:25pt;color: black;font-style: unset" >Shoe Detail</h2>
              @foreach ($cart as $item)
              <form action="/editCart/{{$item->id}}" method="post">
              @csrf
              <div class="container">
                <table id="cart" class="table table-hover table-condensed">
                        <thead>
                          <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-th="Product">
                              <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="{{asset('/storage/gambar/'.$item->image)}}" alt="..." class="img-responsive"/></div>
                                <div class="col-sm-10">
                                  <h4 class="nomargin" style="padding-left: 10pt">{{$item->name}}</h4>
                                  <p style="padding-left: 10pt">{{$item->description}}</p>
                                </div>
                              </div>
                            </td>
                            <td data-th="Price">{{$item->price}}</td>
                            <td data-th="Quantity" class="text-center">
                              {{$item->qty}}
                            </td>
                            <td data-th="Subtotal "class="text-center">
                                {{$item->qty * $item->price}}
                              </td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o">Edit Item</button>
                            </div>
                            </td>
                          </tr>
                        </tbody>
                        
              </form>
                        <tfoot>
                            <tr>
                            @endforeach
                          @if(count($cart) > 0)
                            <form action="/checkout" method="POST">
                              @csrf
                              <td colspan="2" class="hidden-xs"></td>
                              <td class="hidden-xs align-text-left"><strong>Total:{{$item->qty * $item->price}}</strong></td>
                              <td><button  class="btn btn-success btn-block" type="submit" >
                                    Checkout
                                  <i class="fa fa-angle-right"></i></button></td>
                             </form>
                      
                        @else

                        @endif
                        
                    </tr>
                        </tfoot>
                </table>
      
            </body>

    </html>
@endsection
