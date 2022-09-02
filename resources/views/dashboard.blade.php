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
{{-- Titre page --}}
{{-- Logo page --}}
@section('page-logo')
    <i class="icon ion-ios-home-outline"></i>
@endsection
{{-- Contenues principales --}}
@section('main-content')

    
  {{--Headlines --}}
  <script src="{{ asset('js/jquery.peity.min.js') }}" defer></script>
  <script src="{{ asset('js/dashboard.js') }}" defer></script>
  <div class="br-pagebody">
    <div class="row row-sm">
      <div class="col-sm-6 col-xl-3">
        <div class="bg-info rounded overflow-hidden">
          <div class="pd-x-20 pd-t-20 d-flex align-items-center">
            <i class="ion ion-briefcase tx-60 lh-0 tx-white op-7"></i>
            <div class="mg-l-20">
              <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Clients</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$nombre_client ?? 0}}</p>
              <span class="tx-11 tx-roboto tx-white-8">Nombres de clients</span>
            </div>
          </div>
          <div id="ch1" class="ht-50 tr-y-1"></div>
        </div>
      </div><!-- col-3 -->
      <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
        <div class="bg-purple rounded overflow-hidden">
          <div class="pd-x-20 pd-t-20 d-flex align-items-center">
            <i class="ion ion-person tx-60 lh-0 tx-white op-7"></i>
            <div class="mg-l-20">
              <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Personnels</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$nombre_personnel ?? 0}}</p>
              <span class="tx-11 tx-roboto tx-white-8">Nombres de personnels</span>
            </div>
          </div>
          <div id="ch3" class="ht-50 tr-y-1"></div>
        </div>
      </div><!-- col-3 -->
      <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class="bg-teal rounded overflow-hidden">
          <div class="pd-x-20 pd-t-20 d-flex align-items-center">
            <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
            <div class="mg-l-20">
              <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Postes</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$nombre_poste ?? 0}}</p>
              <span class="tx-11 tx-roboto tx-white-8">Nombres de postes</span>
            </div>
          </div>
          <div id="ch2" class="ht-50 tr-y-1"></div>
        </div>
      </div><!-- col-3 -->
      <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class="bg-primary rounded overflow-hidden">
          <div class="pd-x-20 pd-t-20 d-flex align-items-center">
            <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
            <div class="mg-l-20">
              <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">32.16%</p>
              <span class="tx-11 tx-roboto tx-white-8">65.45% on average</span>
            </div>
          </div>
          <div id="ch4" class="ht-50 tr-y-1"></div>
        </div>
      </div><!-- col-3 -->
    </div><!-- row -->

    <div class="row row-sm mg-t-20">
      <div class="col-lg-8">
        <div class="card bd-0 shadow-base">
          <div class="d-md-flex justify-content-between pd-25">
            <div>
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Stats</h6>
              <p>30 derniers jours — dernier update 2 Sep, 2022</p>
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

        <div class="card bd-0 shadow-base pd-25 mg-t-20">
          <div class="d-md-flex justify-content-between">
            <div>
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Comment nos utilisateurs sont-ils engagés au quotidien ?</h6>
              <p>30 derniers jours — dernier update  2 Sep, 2022</p>
            </div>
            <div class="wd-200">
              <select class="form-control select2" data-placeholder="Choose location">
                <option label="Choose one"></option>
                <option value="1" selected>New York</option>
                <option value="2">San Francisco</option>
                <option value="3">Los Angeles</option>
                <option value="4">Chicago</option>
                <option value="5">Seattle</option>
              </select>
            </div><!-- wd-200 -->
          </div><!-- d-flex -->
          <div class="row mg-t-20">
            <div class="col-sm-9">
              <div id="ch12" class="ht-250 ht-sm-300"></div>
            </div><!-- col-9 -->
            <div class="col-sm-3 mg-t-40 mg-sm-t-0">
              <div>
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Bounce Rate</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">23.32%</h4>
                <span class="tx-12 tx-success tx-roboto">2.7% increased</span>
              </div>
              <div class="mg-t-20 pd-t-20 bd-t">
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Page Views</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">38.20%</h4>
                <span class="tx-12 tx-danger tx-roboto">4.65% decreased</span>
              </div>
              <div class="mg-t-20 pd-t-20 bd-t">
                <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Time On Site</p>
                <h4 class="tx-lato tx-inverse tx-bold mg-b-0">12:30</h4>
                <span class="tx-12 tx-success tx-roboto">1.22% increased</span>
              </div>
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->


      </div><!-- col-8 -->
      <div class="col-lg-4 mg-t-20 mg-lg-t-0">

        <div class="card shadow-base bd-0 overflow-hidden">
          <div class="pd-x-25 pd-t-25">
            <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1 mg-b-20">Stockage</h6>
            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-0">Aujourd'hui</p>
            <h1 class="tx-56 tx-light tx-inverse mg-b-0">7<span class="tx-teal tx-24">gb</span></h1>
            <p><span class="tx-primary">75%</span> d'espace libre</p>
          </div><!-- pd-x-25 -->
          <div id="ch6" class="ht-115 mg-r--1"></div>
          <div class="bg-teal pd-x-25 pd-b-25 d-flex justify-content-between">
            <div class="tx-center">
              <h3 class="tx-lato tx-white mg-b-5">98<span class="tx-light op-8 tx-20">gb</span></h3>
              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-0 tx-white-8">Espace totale</p>
            </div>
            <div class="tx-center">
              <h3 class="tx-lato tx-white mg-b-5">23<span class="tx-light op-8 tx-20">gb</span></h3>
              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-0 tx-white-8">Espace Utilise</p>
            </div>
            <div class="tx-center">
              <h3 class="tx-lato tx-white mg-b-5">75<span class="tx-light op-8 tx-20">%</span></h3>
              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-0 tx-white-8">Espace libre</p>
            </div>
          </div>
        </div><!-- card -->

        <div class="card shadow-base bd-0 mg-t-20">
          <div id="carousel3" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel3" data-slide-to="0" class="active"></li>
              <li data-target="#carousel3" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="bg-white ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                  <div class="pos-absolute t-15 r-25">
                    <a href="#" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                  </div>
                  <div class="pd-x-30 pd-t-30 mg-b-auto">
                    <p class="tx-info tx-uppercase tx-11 tx-semibold tx-mont mg-b-5">Nos produits</p>
                    <h5 class="tx-inverse mg-b-20">Acer Nitro</h5>
                    <p class="tx-uppercase tx-11 tx-semibold tx-mont mg-b-0">Ventes</p>
                    <h2 class="tx-inverse tx-lato tx-bold mg-b-0">668</h2>
                    <span>20 ventes/mois</span>
                  </div>
                  <div id="ch10" class="ht-100 tr-y-1"></div>
                </div><!-- d-flex -->
              </div>
              <div class="carousel-item">
                <div class="bg-white ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                  <div class="pos-absolute t-15 r-25">
                    <a href="#" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                  </div>
                  <div class="pd-x-30 pd-t-30 mg-b-auto">
                    <p class="tx-info tx-uppercase tx-11 tx-semibold tx-mont mg-b-5">Nos produits</p>
                    <h5 class="tx-inverse mg-b-20">Asus Zenbook 2</h5>
                    <p class="tx-uppercase tx-11 tx-semibold tx-mont mg-b-0">Ventes</p>
                    <h2 class="tx-inverse tx-lato tx-bold mg-b-0">321</h2>
                    <span>11 ventes/mois</span>
                  </div>
                  <div id="ch11" class="ht-100 tr-y-1"></div>
                </div><!-- d-flex -->
              </div><!-- cardousel-item -->
            </div><!-- carousel-inner -->
          </div><!-- carousel -->
        </div><!-- card -->

        <div class="card card-body bd-0 pd-25 bg-primary mg-t-20">
          <div class="d-xs-flex justify-content-between align-items-center tx-white mg-b-20">
            <h6 class="tx-13 tx-uppercase tx-semibold tx-spacing-1 mg-b-0">Server Status</h6>
            <span class="tx-12 tx-uppercase">Sep 2022</span>
          </div>
          <p class="tx-sm tx-white tx-medium mg-b-0">Hardware Monitoring</p>
          <p class="tx-12 tx-white-7">Intel Dothraki G125H 2.5GHz</p>
          <div class="progress bg-white-3 rounded-0 mg-b-0">
            <div class="progress-bar bg-success wd-50p lh-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div><!-- progress -->
          <p class="tx-11 mg-b-0 mg-t-15 tx-white-7">Notice: Lorem ipsum dolor sit amet.</p>
        </div><!-- card -->

        <div class="card bd-0 mg-t-20">
          <div id="carousel12" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel12" data-slide-to="0" class="active"></li>
              <li data-target="#carousel12" data-slide-to="1"></li>
              <li data-target="#carousel12" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <div class="bg-info pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                  <div class="pos-absolute t-20 r-20">
                    <a href="#" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                    <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                    <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                    <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                  </div>
                  <div class="tx-white">
                    <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                    <h5 class="lh-5 mg-b-20">How I Flew Around the World in Business Class for $1,340</h5>
                    <nav class="nav flex-row tx-13">
                      <a href="#" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                      <a href="#" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                      <a href="#" class="tx-white-8 hover-white pd-x-5">Delete</a>
                    </nav>
                  </div>
                </div><!-- d-flex -->
              </div>
              <div class="carousel-item">
                <div class="bg-purple pd-30 ht-300 d-flex pos-relative align-items-center rounded">
                  <div class="pos-absolute t-20 r-20">
                    <a href="#" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                    <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                    <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                    <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                  </div>
                  <div class="tx-white">
                    <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                    <h5 class="lh-5 mg-b-20">10 Reasons Why Travel Makes You a Happier Person</h5>
                    <nav class="nav flex-row tx-13">
                      <a href="#" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                      <a href="#" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                      <a href="#" class="tx-white-8 hover-white pd-x-5">Delete</a>
                    </nav>
                  </div>
                </div><!-- d-flex -->
              </div>
            </div><!-- carousel-inner -->
          </div><!-- carousel -->
        </div><!-- card -->

        <div class="card bg-danger bd-0 mg-t-20">
          
        </div><!-- card -->

      </div><!-- col-4 -->
    </div><!-- row -->

  </div><!-- br-pagebody -->
  {{--End Headlines --}}
  {{--Body--}}
  <script>
    $(function(){
      'use strict'

      // FOR DEMO ONLY
      // menu collapsed by default during first page load or refresh with screen
      // having a size between 992px and 1299px. This is intended on this page only
      // for better viewing of widgets demo.
      $(window).resize(function(){
        minimizeMenu();
      });

      minimizeMenu();

      function minimizeMenu() {
        if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
          // show only the icons and hide left menu label by default
          $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
          $('body').addClass('collapsed-menu');
          $('.show-sub + .br-menu-sub').slideUp();
        } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
          $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
          $('body').removeClass('collapsed-menu');
          $('.show-sub + .br-menu-sub').slideDown();
        }
      }
    });
  </script>
  
@endSection