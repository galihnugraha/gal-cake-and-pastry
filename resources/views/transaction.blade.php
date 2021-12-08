@extends('layouts.main')

@section('main')

@if(session()->has('success'))
<!-- Modal Register -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
      </div>
      <div class="modal-body">
        {{ session('success') }}
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

      @if (count($items) < 1)
        <div class="row" style="border: 1px solid black; border-radius: 15px; padding: 10px; color: black; background-color: ghostwhite; ">
          <div class="col-md-12 text-center" style="padding-top: 10px; padding-bottom: 10px;">
            <span style="color: red;">There is no item in your history transaction right now. Go to <a href="katalog.php">Katalog Page</a></span>
          </div>
        </div>
        <br><br>
      @else
        @php
            $i=1;
        @endphp
        @foreach ($items as $item)
            <div class="row" style="border: 1px solid black; border-radius: 15px; padding: 10px; color: black; background-color: lightgrey; font-family: 'Times New Roman'; ">
                <div class="col-md-1">
                    <br><br>
                    <span style=" border: 1px solid black; border-radius: 30%; font-size: 25px; font-weight: bold; margin-left: 15px; padding: 10px;">
                    {{ $i }}.
                    </span>
                </div>

                <div class="col-md-3" style="font-weight: bold; font-size: 19px;">
                    <br>
                    <span>Order Code : </span><br>
                    <span>Amount : </span><br>
                    <span>Cost : </span><br>
                    <span>Shipping Address : </span><br><br>
                </div>

                <div class="col-md-6" style="font-size: 19px;">
                    <br>
                    <span>{{ $item['file'] }}</span><br>
                    <span><b>{{ $item['jumlah'] }}</b> piece(s)</span><br>
                    <span>{{ number_format($item['harga'],0,',','.') }} IDR</span><br>
                    <span>{{ $item['alamat'] }}</span><br><br>
                </div>

                <div class="col-med-2">
                    <br><br>
                    <a href="/invoice/{{ $item['file'] }}" target="_blank" style="border: 1px solid black;" class="btn btn-warning">Download Invoice</a>
                </div>
            </div>
            <br><br>
            @php
                $i++;
            @endphp 
        @endforeach
      @endif

      </div>
    </section><!-- End Cart -->

  </main><!-- End #main -->

@endsection