<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
               @if(isset($menus))
                   @forelse($menus as $menu)
                        <div class="item">
                            <div class='card card1'>
                                <div class="price">
                                    <h6>{{ $menu->price ? '$'.$menu->price : '' }}</h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'>{{ $menu ? $menu->dish_name : '' }}</h1>
                                    <p class='description'> {{ $menu ? $menu->dish_quality :'' }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                    class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                @endif
            </div>
        </div>
    </div>
</section>
