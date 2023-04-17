<div class="row no-gutters">
    <div class="col-xl-12">
      <div class="content justify-content-center">
        <div class="row">
            @foreach ($shopCategories as $shopCategory)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="height: 20vh">
                        <img class="card-img-top" src="{{ \Storage::url($shopCategory->image) }}" alt="Card image cap">
                        <div class="card-title">{{ $shopCategory->title }}</div>
                        <p>{{ $shopCategory->short_description }}</p>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div> 