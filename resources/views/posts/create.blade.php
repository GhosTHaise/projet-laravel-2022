


@extends('blank')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Basic Form Input</h6>
      <p class="br-section-text">A basic form control with disabled and readonly mode.</p>

      
      <form method="POST" action="{{ route('posts.save') }}">
        @csrf
        
      <div class="row mg-t-20">
        <div class="col-lg">
            
          <textarea rows="3" class="form-control" placeholder="Textarea" name="content"></textarea>
        </div><!-- col -->
      </div><!-- row -->
      <div class="row mg-t-20">
        <div class="col-lg">
            
          <button type="submit" class="btn btn-danger">Publier</button>
        </div><!-- col -->
      </div><!--
      <form>

    </div>
</div>

@endsection