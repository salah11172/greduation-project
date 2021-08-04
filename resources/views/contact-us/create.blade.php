




@extends('layout.layout')
@section('content')

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
<main id="main" class="main-site left-sidebar">

<div class="container">

  <div class="wrap-breadcrumb">
    <ul>
      <li class="item-link"><a href="#" class="link">home</a></li>
      <li class="item-link"><span>Contact us</span></li>
    </ul>
  </div>
  <div class="row">
    <div class=" main-content-area">
      <div class="wrap-contacts ">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="contact-box contact-form">
            <h2 class="box-title">Leave a Message</h2>
            <form action="{{route('comment.store')}}" method="POST" name="frm-contact">


            @csrf
              <label for="name">Name<span>*</span></label>
              <input type="text" value="" id="name" name="name" >

              <label for="email">Email<span>*</span></label>
              <input type="text" value="" id="email" name="email" >

              <label for="phone">Number Phone</label>
              <input type="text" value="" id="phone" name="phone" >

              <label for="comment">Comment</label>
              <textarea name="comment" id="comment"></textarea>

              <input type="submit" name="ok" value="Submit" >
              
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="contact-box contact-info">
            <div class="wrap-map">
              <div class="mercado-google-maps"
                 id="az-google-maps57341d9e51968"
                 data-hue=""
                 data-lightness="1"
                 data-map-style="2"
                 data-saturation="-100"
                 data-longitude="31.3537"
                 data-latitude="31.0449"
                 data-zoom="16"
                 data-map-height="263">
              </div>
            </div>
            <h2 class="box-title">Contact Detail</h2>
            <div class="wrap-icon-box">

              <div class="icon-box-item">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <div class="right-info">
                  <b>Email</b>
                  <p>Support@gmail.com</p>
                </div>
              </div>

              <div class="icon-box-item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="right-info">
                  <b>Phone</b>
                  <p>0123-465-789-111</p>
                </div>
              </div>

              <div class="icon-box-item">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <div class="right-info">
                  <b>Mail Office</b>
                  <p>Mansoura<br /> mansora unversity </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div><!--end main products area-->

  </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->

@endsection