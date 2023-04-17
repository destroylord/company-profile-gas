<div class="row no-gutters">
    <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
      <div class="content d-flex flex-column justify-content-center">
        <div class="row">
            @foreach ($features as $feature)
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="{{ $feature->id * 100 }}">
                <i class="bx bx-receipt"></i>
                <h4>{{ $feature->name }}</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
      <img src="assets/img/features.svg" class="img-fluid" alt="">
    </div>
</div> 