<div id="product" class="bg-black text-white px-4 py-16 font-sans">
    <h2 class="text-center text-xl uppercase tracking-widest">Our Product</h2>
    <h1 class="text-center text-4xl font-bold mt-2 mb-10">STYLING PRODUCTS WE TRUST</h1>

    <!-- Produk -->
    <div class="flex flex-wrap justify-center gap-6">
        <!-- Product Card -->
        <div class="w-60 text-center" data-nama="WaterBased Pomade" data-harga="30000" data-img="/images/produk1.png">
            <div class="w-full h-52 rounded-xl overflow-hidden shadow-md border border-gray-700 bg-white mb-2">
                <img src="/images/produk1.png" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold">WaterBased Pomade</h3>
            <p class="mb-2">IDR 30.000</p>
            <button class="add-cart text-sm underline">add cart +</button>
        </div>

        <div class="w-60 text-center" data-nama="Hair Powder" data-harga="85000" data-img="/images/produk2.png">
            <div class="w-full h-52 rounded-xl overflow-hidden shadow-md border border-gray-700 bg-white mb-2">
                <img src="/images/produk2.png" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold">Hair Powder</h3>
            <p class="mb-2">IDR 85.000</p>
            <button class="add-cart text-sm underline">add cart +</button>
        </div>

        <div class="w-60 text-center" data-nama="Matte Clay Pomade" data-harga="40000" data-img="/images/produk3.png">
            <div class="w-full h-52 rounded-xl overflow-hidden shadow-md border border-gray-700 bg-white mb-2">
                <img src="/images/produk3.png" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold">Matte Clay Pomade</h3>
            <p class="mb-2">IDR 40.000</p>
            <button class="add-cart text-sm underline">add cart +</button>
        </div>
    </div>

    <!-- Keranjang -->
    <div class="max-w-3xl mx-auto mt-16">
        <h2 class="text-2xl mb-4">Shopping Cart (<span id="cart-count">0</span> product)</h2>
        <div class="border-t border-gray-600 pt-4">
            <div class="flex justify-between font-semibold mb-2 text-sm text-gray-300 px-2">
                <span class="w-2/3">Product</span>
                <span class="w-1/6 text-center">Price</span>
                <span class="w-1/6 text-center">Quantity</span>
            </div>
            <ul id="cart-list"></ul>
            <div class="flex justify-end mt-4 px-2">
                <div class="text-right">
                    <p class="text-sm text-gray-400">subtotal</p>
                    <p class="text-lg font-bold">IDR <span id="cart-total">0</span></p>
                </div>
            </div>
            <button onclick="checkout()" class="w-full border border-white py-2 mt-6 hover:bg-white hover:text-black transition">Check out</button>
        </div>
    </div>
</div>

<script>
    let cart = [];

    function updateCartUI() {
        const cartList = document.getElementById('cart-list');
        const cartCount = document.getElementById('cart-count');
        const cartTotal = document.getElementById('cart-total');
        cartList.innerHTML = '';

        let total = 0;
        cart.forEach((item, index) => {
            total += item.harga * item.qty;
            cartList.innerHTML += `
                <li class="flex items-center justify-between border-t border-gray-700 py-4 px-2">
                    <div class="flex items-center gap-4 w-2/3">
                        <div class="w-14 h-14 rounded-xl overflow-hidden shadow-md border border-gray-700 bg-white">
                            <img src="${item.img}" alt="${item.nama}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-semibold">${item.nama}</p>
                            <p class="text-sm text-gray-400">description</p>
                        </div>
                    </div>
                    <div class="w-1/6 text-center">IDR ${item.harga.toLocaleString()}</div>
                    <div class="w-1/6 flex items-center justify-center gap-2">
                        <button onclick="changeQty(${index}, -1)">-</button>
                        <span>${item.qty}</span>
                        <button onclick="changeQty(${index}, 1)">+</button>
                        <button onclick="removeItem(${index})" class="ml-2 text-red-400">🗑</button>
                    </div>
                </li>
            `;
        });

        cartCount.innerText = cart.length;
        cartTotal.innerText = total.toLocaleString();
    }

    function changeQty(index, delta) {
        if (cart[index].qty + delta <= 0) return;
        cart[index].qty += delta;
        updateCartUI();
    }

    function removeItem(index) {
        cart.splice(index, 1);
        updateCartUI();
    }

    document.querySelectorAll('.add-cart').forEach(button => {
        button.addEventListener('click', function () {
            const product = this.parentElement;
            const nama = product.dataset.nama;
            const harga = parseInt(product.dataset.harga);
            const img = product.dataset.img;

            const existing = cart.find(p => p.nama === nama);
            if (existing) {
                existing.qty += 1;
            } else {
                cart.push({
                    nama,
                    harga,
                    qty: 1,
                    img
                });
            }
            updateCartUI();
        });
    });

    function checkout() {
        if (cart.length === 0) return alert('Keranjang kosong!');

        let message = '*Halo Admin, saya ingin pesan produk berikut:*\n\n';
        let total = 0;
        cart.forEach(item => {
            message += `• ${item.nama} x ${item.qty} - Rp${item.harga.toLocaleString()}\n`;
            total += item.harga * item.qty;
        });
        message += `\n*Total: Rp${total.toLocaleString()}*`;

        const encoded = encodeURIComponent(message);
        const waNumber = '6285865826621'; // Nomor WhatsApp Admin
        const link = `https://wa.me/${waNumber}?text=${encoded}`;
        window.open(link, '_blank');
    }
</script>
