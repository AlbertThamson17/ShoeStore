<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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
        @extends('layout.homePageA')
    @section('header')

    <body style="background-color: rgb(210, 210, 245)" class="justify-content-centre">
   
        <form class="well form-horizontal"action="/addShoes" method="post" enctype="multipart/form-data" >
            <legend><left><h2><b>Add Shoes Form</b></h2></left></legend><br>
            @csrf
            <div class="form-group">
                <label class="col-md-4 control-label">Nama Sepatu</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="name" placeholder="Input Nama Sepatu" class="form-control"  type="text">
                @if($errors->has('name'))
            
                            <p style="color: red">​ @php
                               echo $errors->first('name')
                            @endphp ​​​​</p>
            
                         @endif</label>  
                  </div>
                </div>
              </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Deskripsi Sepatu</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="description" placeholder="Input Deskripsi Sepatu" class="form-control"  type="text">
                @if($errors->has('description'))
      
                <p style="color: red">​ @php
                   echo $errors->first('description')
                @endphp ​​​​</p>
      
                    @endif
                  </div>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Harga Sepatu</label>
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="price" placeholder="Input Harga Sepatu (Numerical Only)" class="form-control"  type="number">
              @if($errors->has('price'))
      
                    <p style="color: red">​ @php
                       echo $errors->first('price')
                    @endphp ​​​​</p>
      
                 @endif 
                </div>
              </div>
            </div>
        <div class="form-group">
                 {{-- desc :<input type="text" name="description"> --}}
                 <label class="col-md-4 control-label">Gambar Sepatu</label>
                 <input type="file" placeholder = "Input Picture Here" id="myFile" class="form-control-file" style = "margin-left:12pt" name="image">
                    @if($errors->has('image'))
      
                    <p style="color: red">​ @php
                       echo $errors->first('image')
                    @endphp ​​​​</p>
                 @endif
        </div>
      <br>
      
      <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
      <button type="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
      </div>
      </div>
      
        </form>
      
      
      
      
      </body>
      </html>
      @endsection



{{-- <body>
    <form action="/addShoes" method="post" enctype="multipart/form-data" >
        @csrf
        name : <input type="text" name="name">
        @if($errors->has('name'))

                <p style="color: red">​ @php
                   echo $errors->first('name')
                @endphp ​​​​</p>

             @endif
         desc :<input type="text" name="description">
         @if($errors->has('description'))

                <p style="color: red">​ @php
                   echo $errors->first('description')
                @endphp ​​​​</p>

             @endif
         price :<input type="number" name="price">
         @if($errors->has('price'))

                <p style="color: red">​ @php
                   echo $errors->first('price')
                @endphp ​​​​</p>

             @endif
             {{-- desc :<input type="text" name="description"> --}}
         {{-- image : <input type="file" id="myFile" name="image">
         @if($errors->has('image'))

                <p style="color: red">​ @php
                   echo $errors->first('image')
                @endphp ​​​​</p>

             @endif



        <button>Tambah</button>

    </form>




</body>
</html>
@endsection --}} 
