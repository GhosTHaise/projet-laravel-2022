@extends('blank')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Basic Form Input</h6>
      <p class="br-section-text">A basic form control with disabled and readonly mode.</p>

      <div class="row">
        <div class="col-lg">
          <input class="form-control" placeholder="Input box" type="text">
        </div><!-- col -->
        <div class="col-lg mg-t-10 mg-lg-t-0">
          <input class="form-control" placeholder="Input box (readonly)" readonly="" type="text">
        </div><!-- col -->
        <div class="col-lg mg-t-10 mg-lg-t-0">
          <input class="form-control" placeholder="Input box (disabled)" disabled="" type="text">
        </div><!-- col -->
      </div><!-- row -->

      <div class="row mg-t-20">
        <div class="col-lg">
          <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
        </div><!-- col -->
        <div class="col-lg mg-t-10 mg-lg-t-0">
          <textarea rows="3" class="form-control" placeholder="Textarea (readonly)" readonly></textarea>
        </div><!-- col -->
        <div class="col-lg mg-t-10 mg-lg-t-0">
          <textarea rows="3" class="form-control" placeholder="Texarea (disabled)" disabled></textarea>
        </div><!-- col -->
      </div><!-- row -->
    </div>
</div>

@endsection