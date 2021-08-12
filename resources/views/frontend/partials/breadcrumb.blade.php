
<section class="page-title divider breadcrumb">
    <div class="container pt-0 pb-0">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            {{-- <h2 class="title text-white">{{$title1}}</h2> --}}
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="{{route('index')}}"><span class="text-white">Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end text-white" >{{$title1 ?? ''}}</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
</section>
