@extends("layouts.wrapper")

@section('main-content')
@php
  if(isset($actual_message)){
    $time_now = Carbon\Carbon::parse($actual_message->updated_at);
    $dernier_message_time = $mouth[(int)($time_now->format("m"))-1].$time_now->format(" d, Y h:i")."am";
  }else{
    $time_now = Carbon\Carbon::parse($messages_dispo[0]->updated_at);
    $dernier_message_time = $mouth[(int)($time_now->format("m"))-1].$time_now->format(" d, Y h:i")."am";
  }
@endphp

<div class="br-mailbox-list" style="transform : translateX(-30px);overflow-y:scroll;" >
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
    
    <a style="text-decoration: none" href="{{Route('mailbox.edit',$message->id)}}">
      
    <div class="br-mailbox-list-item {{($message->id == $messages_dispo[0]->id) ? "active" : "" }}">
      <div class="d-flex justify-content-between mg-b-5">
        <div>
          <i class="icon ion-ios-star tx-warning"></i>
          <i class="icon ion-android-attach"></i>
          <span class="tx-12 tx-gray-600 mg-b-5">
            @php 
                $start = \Carbon\Carbon::parse($message->updated_at);
                $diff = $start->diff(now());
                if((int)($diff->format("%d")) > 0){
                  $text_date = "Il y a ".$diff->format("%d")." jours";
                }else if((int)($diff->format("%h")) > 0){
                  $text_date = "Il y a ".$diff->format("%hh et %imn");
                }else if((int)($diff->format("%i")) > 0){
                  $text_date = "Il y a ".$diff->format("%i")." minutes";
                }else if((int)($diff->format("%s") > 0 and (int)($diff->format("%i")) <= 0) ){
                  $text_date = "maintenant";
                }else{
                  $text_date = "Il y a plusieurs mois";
                }
            @endphp
              {{( $message->id_sender == Auth::user()->id) ? "Envoyer" : "Recu" }}
          </span>
        </div>
        <span class="tx-12">{{$text_date}}</span>
      </div>
      <h6 class="tx-14 mg-b-10 tx-gray-800">{{ $message->id_sender == Auth::user()->id ? 
          ("moi , " . (strlen($message->email_destinataire ) > 30 ? (substr($message->email_destinataire ,0,30)."...") : ($message->email_destinataire))." (4)")
           : ((strlen($message->users->email) > 30 ? (substr($message->users->email,0,30)."...") : ($message->users->email)).", moi (4)")}}</h6>
      <p class="tx-12 tx-gray-600 mg-b-5">
          {{strlen($message->content) > 45 ? (substr($message->content,0,45)." ...") : ($message->content)}} </p>
    </div>
    </a>
    @endforeach
    {{-- en boucle --}}
  </div>
</div>

<div class="br-mailbox-body">
  <div class="br-msg-header d-flex justify-content-between">
    <div class="media align-items-center">
      <img src={{asset("storage/account.png")}} class="wd-40 rounded-circle" alt="">
      <div class="media-body mg-l-10">
        <p class="tx-inverse tx-medium mg-b-0">{{ isset($actual_message) ? ($actual_message->users->email) : ($messages_dispo[0]->users->email)}}</p>
        <p class="tx-12 mg-b-0">
          <span>{{$dernier_message_time}}</span>
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
    <h6 class="tx-inverse mg-b-25 lh-4">Objet : {{ isset($actual_message) ? ($actual_message->objet) : ($messages_dispo[0]->objet)}}</h6>

    <p>Bonjour , {{ isset($destinataire) ? ($destinataire) : ""}}</p>

    <p style="overflow-wrap: anywhere">{{ isset($actual_message) ? ($actual_message->content) : ($messages_dispo[0]->content)}}</p>
   
    <p>Cordialement,<br>{{ isset($actual_message) ? ($actual_message->users->name) : ($messages_dispo[0]->users->name)}}</p>
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