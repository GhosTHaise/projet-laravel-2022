@extends("layouts.wrapper")

@section('main-content')


<div class="br-mailbox-list" style="transform : translateX(-30px)" >
  <div class="br-mailbox-list-header">
    <a href="#" id="showMailBoxLeft" class="show-mailbox-left hidden-sm-up">
      <i class="fa fa-arrow-right"></i>
    </a>
    <h6 class="tx-inverse mg-b-0 tx-13 tx-uppercase">
      <a href="#" class="btn py-2 px-4 btn-teal bd-0 btn-compose" data-toggle="modal" data-target="#modalCompose"><i class="icon ion-ios-compose-outline  mr-2"></i>Creer</a>
      <span class="ml-2 tx-roboto">(2)</span></h6>
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-light disabled pd-x-25"><i class="icon ion-chevron-left"></i></button>
      <button type="button" class="btn btn-light pd-x-25"><i class="icon ion-chevron-right"></i></button>
    </div>
  </div>
  <div class="br-mailbox-list-body" >
    {{-- Eto no bouclena --}}
    @foreach($messages_dispo as $message)
    <div class="br-mailbox-list-item active">
      <div class="d-flex justify-content-between mg-b-5">
        <div>
          <i class="icon ion-ios-star tx-warning"></i>
          <i class="icon ion-android-attach"></i>
        </div>
        <span class="tx-12">10 hours ago</span>
      </div>
      <h6 class="tx-14 mg-b-10 tx-gray-800">{{ strlen($message->users->email) > 30 ? (substr($message->users->email,0,30)."...") : ($message->users->email)}}, me (4)</h6>
      <p class="tx-12 tx-gray-600 mg-b-5">
          {{strlen($message->content) > 40 ? (substr($message->content,0,40)."...") : ($message->content)}} </p>
    </div>
    @endforeach
    {{-- en boucle --}}
  </div>
</div>

<div class="br-mailbox-body">
  <div class="br-msg-header d-flex justify-content-between">
    <div class="media align-items-center">
      <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
      <div class="media-body mg-l-10">
        <p class="tx-inverse tx-medium mg-b-0">Louise Kate Lumaad</p>
        <p class="tx-12 mg-b-0">
          <span>Sep 20, 2017 8:45am</span>
          <a href="#" class="mg-l-5 tx-gray-500"><i class="icon ion-star"></i></a>
          <a href="#" class="mg-l-5 tx-gray-500"><i class="icon ion-android-attach"></i></a>
        </p>
      </div>
    </div>
    <nav class="nav nav-inline tx-size-24 mg-b-0 lh-0">
      <a href="#" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-reply"></i></a>
      <a href="#" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-reply-all"></i></a>
      <a href="#" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-printer"></i></a>
      <a href="#" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-android-more-horizontal"></i></a>
      <a id="closeMail" href="#" class="nav-link pd-x-5 mg-l-15 hidden-xl-up">
        <i class="icon ion-close"></i>
      </a>
    </nav>
  </div>
  <div class="br-msg-body">
    <h6 class="tx-inverse mg-b-25 lh-4">Message sent via your Envato Market profile from themepixels</h6>

    <p>Hi Isidore,</p>

    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>

    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>

    <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>

    <p>Regards,<br>ThemePixels</p>
  </div>

  <div class="pd-x-30 pd-b-30">
    <div class="row flex-row-reverse">
      <div class="col-md-9">
        <textarea class="form-control ht-150" placeholder="Click to write message"></textarea>
        <button class="btn float-right text-12 h5 mt-4 py-3 px-4 btn-teal bd-0 btn-compose" type="submit">Envoyer</button>
      </div>
      <div class="col-md-3 mg-t-30 mg-md-t-0">
        <div class="ht-150 bd bd-dashed d-flex align-items-center justify-content-center rounded bg-gray-300">
          <div class="tx-center wd-60p">
            <i class="icon ion-android-attach tx-32"></i>
            <p class="tx-12">Drag or click to attach a file</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="modalCompose" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <form action={{Route("mailbox.store")}} method="POST" class="modal-content tx-size-sm">
        @csrf
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Nouveau Message</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div  class="modal-body pd-20">
         
          <div class="form-group">
            <div class="input-group wd-sm-400 wd-lg-600">
              <span class="input-group-addon wd-80 bg-gray-100">A :</span>
              <input type="text" name="email_dest" class="form-control" placeholder="Add recepient">
            </div><!-- input-group -->
          </div><!-- form-group -->
          <div class="form-group">
            <div class="input-group wd-sm-400 wd-lg-600">
              <span class="input-group-addon wd-80 bg-gray-100">Objet :</span>
              <input type="text" name="objet" class="form-control" placeholder="Type subject">
            </div><!-- input-group -->
          </div><!-- form-group -->
          <div class="form-group mg-b-0">
            <textarea class="form-control" name="content" rows="6" placeholder="Type your message"></textarea>
          </div><!-- form-group -->
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-info">Envoyer Message</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div><!-- modal-dialog -->
  </div><!-- modal -->


@endSection