<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/bg-about.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
            <h2 class="text-transform-capitalize breadcrumbs-custom-title">{{$title1 ?? ''}}</h2>
            <h5 class="breadcrumbs-custom-text">The original and best Indian Biryani House in sydney</h5>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active">{{$title1 ?? ''}}</li>
            </ul>
        </div>
    </div>
</section>