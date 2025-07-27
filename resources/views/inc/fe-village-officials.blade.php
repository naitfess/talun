<section class="our-team pb-30">
    <div class="container">
        <div class="row mb-minus-30">
            @foreach ($villageOfficials as $official)    
            <div class="col-lg-3 px-0">
                <div class="our-team__item">
                    <div class="our-team__item-media wow clip-a-z">
                        <img src="{{ asset('uploads') }}/{{ $official->image }}" alt="image not found">
                    </div>
                    <div class="our-team__item__text">
                        <h6>{{ $official->name }}</h6>
                        <span>{{ $official->position->name }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>