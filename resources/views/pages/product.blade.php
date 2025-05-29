<!-- OUR PRODUCT SECTION -->
<section id="product" class="bg-black text-white py-16 px-4">
    <div class="text-center mb-12">
        <p class="text-2xl tracking-wide mt-11">OUR PRODUCT</p>
        <h2 class="text-3xl md:text-4xl font-extrabold tracking-wider mt-4 text-white">
            STYLING PRODUCTS WE TRUST
        </h2>
    </div>

    <!-- Product Carousel -->
    <div class="flex items-center justify-between relative max-w-5xl mx-auto mb-16">
        <button class="text-3xl text-white px-4">&#8249;</button>

        <div class="flex gap-8 overflow-hidden">
            <!-- Product 1 -->
            @foreach ($produk as $item)
            <div class="bg-white bg-opacity-10 p-4 rounded-xl w-60 flex flex-col items-center">
                <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->nama }}" class="w-40 h-40 object-cover rounded-lg mb-4" />
                <p class="font-semibold text-white text-center">{{ $item->nama }}</p>
                <p class="text-white text-sm mb-2">IDR {{ number_format($item->harga, 0, ',', '.') }}</p>
                <a href="#" class="text-white text-xs font-semibold underline">add cart +</a>
            </div>
            @endforeach

        </div>

        <button class="text-3xl text-white px-4">&#8250;</button>
    </div>

    <!-- Shopping Cart -->
    <div class="max-w-3xl mx-auto">
        <h2 class="text-xl mb-2 font-semibold">Shopping Cart <span class="text-sm font-light">( 2 product )</span></h2>
        <table class="w-full text-sm border-t border-white/20">
            <thead>
                <tr class="text-left">
                    <th class="pt-3 pb-2">Product</th>
                    <th class="pt-3 pb-2">Price</th>
                    <th class="pt-3 pb-2">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <!-- Product Row 1 -->
                <tr class="border-t border-white/20">
                    <td class="py-4 flex items-center space-x-4">
                        <div class="bg-white text-black font-bold w-14 h-14 flex items-center justify-center rounded-md text-xs">IMG</div>
                        <div>
                            <div class="font-semibold">Product Name</div>
                            <div class="text-white/60 text-xs">description</div>
                        </div>
                    </td>
                    <td class="py-4">100.000</td>
                    <td class="py-4">
                        <div class="flex items-center space-x-2">
                            <button class="w-6 h-6 border border-white/60 rounded-sm">-</button>
                            <span class="w-4 text-center">2</span>
                            <button class="w-6 h-6 border border-white/60 rounded-sm">+</button>
                            <button class="ml-2 text-white/60">🗑️</button>
                        </div>
                    </td>
                </tr>
                <!-- Product Row 2 -->
                <tr class="border-t border-white/20">
                    <td class="py-4 flex items-center space-x-4">
                        <div class="bg-white text-black font-bold w-14 h-14 flex items-center justify-center rounded-md text-xs">IMG</div>
                        <div>
                            <div class="font-semibold">Product Name</div>
                            <div class="text-white/60 text-xs">description</div>
                        </div>
                    </td>
                    <td class="py-4">100.000</td>
                    <td class="py-4">
                        <div class="flex items-center space-x-2">
                            <button class="w-6 h-6 border border-white/60 rounded-sm">-</button>
                            <span class="w-4 text-center">2</span>
                            <button class="w-6 h-6 border border-white/60 rounded-sm">+</button>
                            <button class="ml-2 text-white/60">🗑️</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Subtotal + Button -->
        <div class="flex justify-between items-center mt-6">
            <span class="text-sm text-white/80">subtotal <span class="font-bold">200.000</span></span>
            <button class="border border-white px-8 py-2 text-sm">Check out</button>
        </div>
    </div>
</section>