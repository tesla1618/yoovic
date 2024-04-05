@extends('layouts.back-end.app-seller')

@section('title', translate('Payment'))

@section('content')

<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
          <div class="card">
            <div class="card-body p-md-5">
              <div>
                <h4>Upgrade your plan</h4>
                <p class="text-muted pb-2">
                  Please make the payment to start enjoying all the features of our premium
                  plan as soon as possible
                </p>
              </div>
  
              <div class="px-3 py-4 border border-primary border-2 rounded mt-4 d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <img src="/storage/bus.png" class="rounded" width="60" />
                  <div class="d-flex flex-column ms-4">
                    <span class="h5 mb-1">Small Business</span>
                    <a href="/vendor/ysub" class="small text-muted">CHANGE PLAN</a>
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <sup class="dollar font-weight-bold text-muted">$</sup>
                  <span class="h2 mx-1 mb-0">14</span>
                  <span class="text-muted font-weight-bold mt-2">/ year</span>
                </div>
              </div>
  
              <h4 class="mt-5">Payment details</h4>
  
              <div class="mt-2 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center">
                  <img src="/storage/card.png" class="rounded mr-1" width="70" />
                  <div class="d-flex flex-column ms-3">
                    {{-- <span class="h5 mb-1">Credit Card</span> --}}
                    <input type="text" class="form-control small text-muted" placeholder="1234 XXXX XXXX 2570"/>
                  </div>
                </div>
                <div>
                  <input type="text" class="form-control" placeholder="CVC" style="width: 70px;" />
                </div>
              </div>
  
              {{-- <h6 class="mt-4 mb-3 text-primary text-uppercase">ADD PAYMENT METHOD</h6> --}}
  
              {{-- <div class="form-outline">
                <input type="text" id="formControlLg" class="form-control form-control-lg" />
                <label class="form-label" for="formControlLg">Email address</label>
              </div> --}}
              <div class="mt-3">
                <button class="btn btn-primary btn-block btn-lg">
                  Proceed to payment <i class="fas fa-long-arrow-alt-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection('content')