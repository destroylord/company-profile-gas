<div class="row no-gutters">
    <div class="col-xl-12 d-flex align-items-stretch order-2 order-lg-1">
      <div class="content d-flex flex-column justify-content-center">
        <div class="row">
            @foreach ($careers as $career)
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="{{ $career->id * 100 }}">
                <img src="" alt="Images" width="50px">
                <h4>{{ $career->title }}</h4>
                <p>{{ Str::limit($career->description, 150, "...") }}
                  <button class="submit" class="btn btn-primary">Baca selengkapnya</button>
                </p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
</div> 