@php
    // variabel total
    $cost = 0; 
    $amount = 0;
@endphp

@extends('layouts.main')

@section('main')

@if(session()->has('deleted'))
<!-- Modal Register -->
<div class="modal fade" id="deleteItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
      </div>
      <div class="modal-body">
        {{ session('deleted') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
      </div>
    </div>
  </div>
</div>
{{-- Akhir Modal Register --}}
@endif
    
@include('partials.header')

    <main id="main">

    @include('partials.breadcrumbs')

    <!-- ======= Cart Section ======= -->
    <section id="cart" class="container" style="min-height: 35rem;">
      <div class="container">
    
    @if (count($products) < 1)
        <div class="row" style="border: 1px solid black; border-radius: 15px; padding: 10px; color: black; background-color: ghostwhite; ">
          <div class="col-md-12 text-center" style="padding-top: 10px; padding-bottom: 10px;">
            <span style="color: red;">There is no item in your cart right now. Go to <a href="/catalog">Catalog Page</a></span>
          </div>
        </div>
        <br><br>
    @else
      @php
          $i = 1;
      @endphp
      @foreach ($products as $product)
      
        <div class="row" style="border: 1px solid black; border-radius: 15px; padding: 10px; color: black; background-color: lightgrey; ">
          
          <div class="col-md-1">
            <br><br>
            <span style="font-family: 'Times New Roman'; border: 1px solid black; border-radius: 30%; font-size: 25px; font-weight: bold; margin-left: 15px; padding: 10px;">
              {{ $i }}.
            </span>
          </div>

          <div class="col-md-3">
            <img src="assets/img/products/{{ $product['roti'] }}.jpg">
          </div>

          <div class="col-md-3">
            <br>
            <span style="font-family: 'Times New Roman'; font-size: 35px;">{{ ucwords($product['roti']) }}</span><br><br>
            <span>Amount : {{ $product['jumlah'] }}</span><br>
            <span>Total Cost : {{ number_format(($product['harga']*$product['jumlah']),0,',','.') }} IDR</span>

            @php
                $cost += ($product['harga']*$product['jumlah']);
                $amount += $product['jumlah'];
            @endphp
          </div>

          <div class="col-med-2 offset-1">
            <br><br><br>
            
            <form action="/deleteItem" method="post">
            {{-- @method('delete') --}}
            @csrf
                {{-- <input type="hidden" name="email" value="{{ auth()->user()->email }}"> --}}
                <input type="hidden" name="id" value="{{ $product['id'] }}">
                <button type="submit" name="deleteitem" class="btn btn-danger" onclick="return confirm('this item will be deleted?');">Delete Item</button>
            </form>

          </div>
        </div>
        <br><br>
        @php
            $i++;
        @endphp 
        @endforeach
      @endif

        <div class="row" style="border: 1px solid black; border-radius: 15px; padding: 30px; color: black;">
          <div class="col-md-12">

            <div class="row" style="font-family: 'Times New Roman'; font-size: 25px;">
              <div class="col-md-3 offset-3">
                <span>Cost All in Cart : </span><br>

                @if (count($products) >= 1)
                    <span>Postage Fee : </span>
                @endif

              </div>
              <div class="col-md-3">
                <span> {{ number_format($cost,0,',','.') }} IDR</span><br>
                
                @if (count($products) >= 1)
                    <span> 15.000 IDR</span>
                @endif
              
            </div>
            </div>
            <hr>
            <div class="row" style="font-family: 'Times New Roman'; font-size: 25px;">
              <div class="col-md-3 offset-3">
                
                @if (count($products) >= 1)
                    <span>Total Cost : </span>  
                @endif
              
            </div>
              <div class="col-md-3">

                @if (count($products) >= 1)
                    <span> {{ number_format(($cost+15000),0,',','.') }} IDR</span> 
                @endif

              </div>
            </div>
            <br>

            <form action="/checkout" method="post" class="form">
            @csrf
                <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                <input type="hidden" name="jumlah" value="{{ $amount }}">
                <input type="hidden" name="amount" value="{{ count($products) }}">
                <input type="hidden" name="harga" value="{{ ($cost+15000) }}">

                <div class="row" >
                    <div class="col-md-2">
                    <label for="alamat" class="form-label">Shipping Address : </label>
                    </div>

                    <div class="col-md-6">
                    <textarea name="alamat" @if(count($products) < 1) disabled @endif class="form-control" id="alamat" style="width: 44rem; height: 10rem;" placeholder="Input your shipping address here (max 255 character)" required></textarea>
                    </div>
                </div>
                <br><br>

                <div class="row">
                <div class="col-md-12 text-center">
                    <button id="checkout" @if(count($products) < 1) disabled @endif name="checkout" onclick="return confirm('your cart will be processed?');" class="btn btn-info">Checkout</button>
                </div>
                </div>
            </form>

          </div>
        </div>

      </div>
    </section><!-- End Cart -->

  </main><!-- End #main -->

@endsection