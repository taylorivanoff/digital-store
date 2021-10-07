<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products - {{ $product->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                    <h1 class="text-lg font-semibold mb-2">
                        {{ $product->title }}
                    </h1>

                    <div class="mb-2">
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie placerat porttitor. Sed sollicitudin dui nec euismod condimentum. Aliquam id dolor lacus. Vestibulum eget cursus metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque tincidunt a elit quis dignissim. Praesent non mauris imperdiet, sagittis quam vitae, dapibus mi. Maecenas massa sapien, mattis eget lectus dignissim, maximus ornare dolor. Fusce arcu elit, suscipit et semper a, rutrum non tellus. Curabitur odio odio, cursus et scelerisque eu, vehicula ornare dui. Praesent commodo velit nec quam dictum pulvinar. Curabitur porttitor orci non leo pulvinar pharetra.
                        </p>

                        <p class="mb-4">
                            Cras consequat lacus non sem consequat efficitur. Mauris nec lectus eget libero posuere mattis ut eget dui. Nullam sit amet convallis odio. Donec sed fringilla nisl, in imperdiet ex. Sed at purus consequat, vestibulum purus nec, porta ante. Integer rhoncus vestibulum tincidunt. Donec semper justo nisl, quis dignissim leo commodo et. Phasellus varius, ex eget elementum euismod, leo sapien pretium velit, at ultricies libero arcu vitae risus. Morbi ullamcorper, arcu quis semper egestas, nisl lorem pulvinar ante, id tempus justo tellus eu lorem. Cras eget libero nisl. Nullam non metus a mi lacinia condimentum. Quisque finibus velit et eros laoreet porta.
                        </p>
                    </div>

                    <div class="mb-2">
                        @money($product->price)
                    </div>

                    <form action="{{ route('cart.products.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <x-button>
                            Add to Cart
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
