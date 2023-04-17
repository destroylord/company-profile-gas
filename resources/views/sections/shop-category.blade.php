<div id="kategori-toko" class="kategori-toko">
  <div class="row no-gutters">
    <div class="col-xl-12">
      <div class="content justify-content-center">
        <div class="row">
            @foreach ($shopCategories as $shopCategory)
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="card-img-top" height="300" style="object-fit: cover;" src="  {{ ($shopCategory->image == null) ? asset('assets/img/details-1.png') : url('storage/'.$shopCategory->image) }}" alt="Card image cap">
                        <div class="card-title">{{ $shopCategory->title }}</div>
                        <p>{{ Str::limit($shopCategory->short_description, 30, '...') }}</p>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div> 
</div>