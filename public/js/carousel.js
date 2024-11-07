document.addEventListener("DOMContentLoaded", function() {
    // Mendapatkan semua slide
    const slides = document.querySelectorAll('.carousel-slide');
    if (slides.length === 0) {
        console.error("Tidak ada slide ditemukan!");
        return;
    }

    let currentSlide = 0;
    const totalSlides = slides.length;

    // Fungsi untuk menampilkan slide berdasarkan index
    function showSlide(index) {
        currentSlide = (index + totalSlides) % totalSlides;
        const offset = -currentSlide * 100; // Mengatur offset
        document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
    }

    // Fungsi untuk memindahkan slide (sebelumnya atau selanjutnya)
    window.moveSlide = function(direction) {
        showSlide(currentSlide + direction);
    }

    // Menampilkan slide pertama pada inisialisasi
    showSlide(currentSlide);

    // Auto slide setiap 3 detik
    setInterval(() => {
        moveSlide(1);
    }, 3000);
});
