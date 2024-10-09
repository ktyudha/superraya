<div class="sidebar">
    <div class="breadcrumb text-base lg:mb-12 lg:block hidden">
        <ul class="flex gap-2">
            <li class="hover:underline"><a href="{{ route('landing.index') }}">Home</a></li>
            <span>/</span>
            <li class="hover:underline"><a href="{{ route('product.index') }}">Product</a></li>
        </ul>
    </div>

    <div class="title md:mb-9">
        <h1 class="font-primary lg:text-5xl text-4xl italic">{{ @$category['name'] ?? 'All Products' }}</h1>
    </div>

    <div class="filter lg:block hidden">
        <div class="sort mb-9">
            <h2 class="uppercase text-sm font-bold mb-2.5">Sort By</h2>
            <ul>
                <li class="my-2.5 hover:underline"><a href="?sort=latest">Latest Arrival</a></li>
                <li class="my-2.5 hover:underline"><a href="">Popular</a></li>
            </ul>
        </div>
        <div class="categories mb-9">
            <h2 class="uppercase text-sm font-bold mb-2.5">Categories</h2>
            <ul>
                @foreach ($categories as $key => $category)
                    <li class="my-2.5 hover:underline"><a
                            href="{{ route('product.category', $category['slug']) }}">{{ $category['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="best-seller mb-9">
            <h2 class="uppercase text-sm font-bold mb-2.5">Best Seller</h2>
            <ul>
                @foreach ($products_best as $key => $best)
                    <li class="my-2.5 hover:underline"><a
                            href="{{ route('product.show', $best->slug) }}">{{ $best['title'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
