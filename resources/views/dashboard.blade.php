{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}

@extends('layouts.wrapper')

@section('main-content')


  {{-- affichge --}}
  <div class="br-pagebody">
    <div class="row row-sm">
      <div class="col-sm-6 col-xl-3">
@@ -58,5 +58,36 @@
        </div>
      </div><!-- col-3 -->
    </div><!-- row -->
    {{-- End affichage --}}
    <div class="row row-sm mg-t-20">
      <div class="col-lg-8">
        <div class="card bd-0 shadow-base">
          <div class="d-md-flex justify-content-between pd-25">
            <div>
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">How Engaged Our Users Daily</h6>
              <p>Past 30 Days — Last Updated Oct 14, 2017</p>
            </div>
            <div class="d-sm-flex">
              <div>
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Bounce Rate</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">23.32%</h4>
                <span class="tx-12 tx-success tx-roboto">2.7% increased</span>
              </div>
              <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Page Views</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">38.20%</h4>
                <span class="tx-12 tx-danger tx-roboto">4.65% decreased</span>
              </div>
              <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Time On Site</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">12:30</h4>
                <span class="tx-12 tx-success tx-roboto">1.22% increased</span>
              </div>
            </div><!-- d-flex -->
          </div><!-- d-flex -->

          <div class="pd-l-25 pd-r-15 pd-b-25">
            <div id="ch5" class="ht-250 ht-sm-300"></div>
          </div>
        </div><!-- card -->
@stop 