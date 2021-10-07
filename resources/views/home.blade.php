<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6">
                @foreach ($products as $product)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                        <a href="{{ route('products.show', $product) }}" class="font-semibold">
                            {{ $product->title }}
                        </a>

                        <div class="mb-2">
                            {{ $product->description }}
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
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
