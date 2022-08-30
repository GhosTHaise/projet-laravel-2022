<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/demo/bracketplus1.4/app/template/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 12:46:55 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>CRM ENTREPRISE</title>

    <!-- vendor css -->
    <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}" ></script>
    <script src="{{ asset('js/moment.min.js') }}" ></script>
    <script src="{{ asset('js/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{ asset('js/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{ asset('js/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{ asset('js/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('js/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('js/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('js/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('js/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('js/select2/js/select2.full.min.js')}}"></script>
    
    <script src="{{ asset('js/datepicker.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    
    
    <script src="{{ asset('js/ResizeSensor.js') }}" defer></script>
    <script src="{{ asset('js/bracket.js') }}" defer></script>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>ERP <i>ENTREPRISE</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href={{Route("dashboard")}} class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">TABLEAU DE BORD</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-person-outline tx-20"></i>
            <span class="menu-item-label">PERSONNEL</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('personnels.create') }}" class="sub-link">Nouveau personnel</a></li>
            <li class="sub-item"><a href="{{ route('personnels.index') }}" class="sub-link">Liste personnel</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-20"></i>
            <span class="menu-item-label">CLIENTS</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('clients.create') }}" class="sub-link">Nouveau client</a></li>
            <li class="sub-item"><a href="{{ route('clients.index') }}" class="sub-link">Liste client</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">POSTES</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            @can("access-admin")
                <li class="sub-item"><a href={{Route("posts.create")}} class="sub-link">Nouveau poste</a></li>
            @endcan
            <li class="sub-item"><a href="card-social.html" class="sub-link">Liste poste</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-calendar-outline tx-20"></i>
            <span class="menu-item-label">CONGES</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{url('conges')}}" class="sub-link">Demander congé</a></li>
            
            <!-- can('access-admin')-->
                 <li class="sub-item"><a href="{{url('liste')}}" class="sub-link">Liste congé</a></li>
                 <li class="sub-item"><a href="{{url('responsable')}}" class="sub-link">Valider congé</a></li>
            <!-- endcan-->
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="{{Route("mailbox")}}" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">MESSAGES</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        
      </ul><!-- br-sideleft-menu -->

     

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="ion-search tx-30"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Messages</label>
                <a href="#">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link">
                  <div class="media">
                    <img src="../img/img3.jpg" alt="">
                    <div class="media-body">
                      <div>
                        <p>Donna Seay</p>
                        <span>2 minutes ago</span>
                      </div><!-- d-flex -->
                      <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img4.jpg" alt="">
                    <div class="media-body">
                      <div>
                        <p>Samantha Francis</p>
                        <span>3 hours ago</span>
                      </div><!-- d-flex -->
                      <p>My entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img7.jpg" alt="">
                    <div class="media-body">
                      <div>
                        <p>Robert Walker</p>
                        <span>5 hours ago</span>
                      </div><!-- d-flex -->
                      <p>I should be incapable of drawing a single stroke at the present moment...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img5.jpg" alt="">
                    <div class="media-body">
                      <div>
                        <p>Larry Smith</p>
                        <span>Yesterday</span>
                      </div><!-- d-flex -->
                      <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-footer">
                  <a href="#"><i class="fa fa-angle-down"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Notifications</label>
                <a href="#">Mark All as Read</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img8.jpg" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img9.jpg" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img10.jpg" alt="">
                    <div class="media-body">
                      <p class="noti-text">20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img5.jpg" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-footer">
                  <a href="#"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down mt-2">{{Auth::user()->name}}</span>
              <img src={{asset("storage/account.png")}} class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href="#"><img src={{asset("storage/account.png")}} class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname">{{Auth::user()->name}}</h6>
                <p>{{Auth::user()->email}}</p>
              </div>
              <hr>
              
              <ul class="list-unstyled user-profile-nav">
                <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
                 <form action="{{route('logout')}}" method="post">
                  @csrf
                <li style="cursor: pointer">
                  <a :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();"><i class="icon ion-power"></i>{{ __('Log Out') }}</a></li></form>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/">ERP ENTREPRISE</a>
          <span class="breadcrumb-item active">{{ $page_title ?? ""}}</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        @yield('page-logo')
        <div>
          <h4>@yield('page-title')</h4>
          <p class="mg-b-0">@yield('page-description')</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">

        @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
            Insertion OK
          </div>
        @endif
        
          @yield('main-content')    
        
      </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    

  </body>

</html>
