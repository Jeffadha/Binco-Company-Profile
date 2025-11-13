<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Ambil elemen-elemen modal
        const modal = document.getElementById('productModal');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const modalLoader = document.getElementById('modalLoader');

        // Ambil elemen-elemen konten modal
        const modalMainImage = document.getElementById('modalMainImage');
        const modalThumbnails = document.getElementById('modalThumbnails');
        const modalProductName = document.getElementById('modalProductName');
        const modalProductPrice = document.getElementById('modalProductPrice');
        const modalProductDescription = document.getElementById('modalProductDescription');

        // Fungsi untuk MEMBUKA modal dan mengambil data
        const openModal = async (productId) => {
            // Tampilkan modal dan loader
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            modalLoader.classList.remove('hidden');
            modalLoader.classList.add('flex');

            try {
                // Panggil API Laravel Anda
                const response = await fetch(`/products/${productId}`); // Menggunakan rute yang kita buat
                if (!response.ok) {
                    throw new Error('Produk tidak ditemukan');
                }
                const product = await response.json();

                // 1. Isi konten teks
                modalProductName.textContent = product.name;
                modalProductPrice.textContent = product.price;
                modalProductDescription.innerHTML = product.description.replace(/\n/g, '<br>');


                // 2. Isi gambar utama
                modalMainImage.src = product.images[0] || ''; // Gambar pertama sebagai gambar utama

                // 3. Buat dan isi thumbnails
                modalThumbnails.innerHTML = ''; // Kosongkan thumbnail lama
                product.images.forEach((imgSrc, index) => {
                    const thumb = document.createElement('img');
                    thumb.src = imgSrc;
                    thumb.alt = `${product.name} thumbnail ${index + 1}`;
                    thumb.className = 'w-16 h-16 object-cover rounded-md cursor-pointer border-2 border-transparent hover:border-emerald-500 transition-all';

                    // Beri border pada thumbnail pertama
                    if (index === 0) {
                        thumb.classList.add('border-emerald-500');
                    }

                    // Tambahkan event listener ke thumbnail
                    thumb.addEventListener('click', () => {
                        modalMainImage.src = imgSrc; // Ganti gambar utama

                        // Update border aktif
                        document.querySelectorAll('#modalThumbnails img').forEach(t => t.classList.remove('border-emerald-500'));
                        thumb.classList.add('border-emerald-500');
                    });

                    modalThumbnails.appendChild(thumb);
                });

            } catch (error) {
                console.error('Gagal mengambil detail produk:', error);
                modalProductName.textContent = 'Error';
                modalProductDescription.textContent = 'Tidak dapat memuat detail produk. Silakan coba lagi nanti.';
            } finally {
                // Sembunyikan loader setelah selesai (baik sukses maupun gagal)
                modalLoader.classList.add('hidden');
                modalLoader.classList.remove('flex');
            }
        };

        // Fungsi untuk MENUTUP modal
        const closeModal = () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');

            // Bersihkan konten agar tidak "flash" data lama saat dibuka lagi
            modalMainImage.src = '';
            modalThumbnails.innerHTML = '';
            modalProductName.textContent = 'Memuat...';
            modalProductPrice.textContent = '...';
            modalProductDescription.textContent = '...';
        };

        // --- Tambahkan Event Listeners ---

        // 1. Pemicu untuk MEMBUKA modal
        document.querySelectorAll('.js-product-modal-trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const productCard = trigger.closest('.product-card');
                const productId = productCard.dataset.id;
                if (productId) {
                    openModal(productId);
                }
            });
        });

        // 2. Pemicu untuk MENUTUP modal (tombol 'X')
        closeModalBtn.addEventListener('click', closeModal);

        // 3. Pemicu untuk MENUTUP modal (klik di luar area modal)
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });
    });
</script>