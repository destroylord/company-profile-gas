<section id="details" class="details">
    <div class="container">

    @foreach ($sectionContent as $item)

      <div class="row content">
        <div class="col-md-4 {{ ($item->id > 1) ? 'order-1 order-md-2' : '' }}" data-aos="fade-{{ ($item->id > 1) ? 'left' : 'right' }}">
          <img src="{{ ($item->hero == null) ? asset('assets/img/details-1.png') : url('storage/'.$item->hero) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-{{ ($item->id > 1) ? '5 order-2 order-md-1' : '4' }}" data-aos="fade-up">
          <h3>{{ $item->title }}.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          
          <p>
            <a href="{{ $item->link_download }}" class="btn btn-primary"><i class="bx bxl-play-store"></i> Google Play</a>
          </p>
        </div>
      </div>


      @endforeach

      

    </div>
  </section>