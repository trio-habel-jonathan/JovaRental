document.addEventListener("DOMContentLoaded", function () {
    const sliderContainer = document.getElementById("slider-container");
    const prevButton = document.getElementById("prev-button");
    const nextButton = document.getElementById("next-button");
    const teamItems = document.querySelectorAll(".team-item");

    let currentPosition = 0;
    let itemsPerView = 1;

    // Fungsi untuk menghitung jumlah item yang terlihat
    function calculateItemsPerView() {
        if (window.innerWidth >= 1024) {
            return 4; // lg: 4 items
        } else if (window.innerWidth >= 640) {
            return 2; // sm: 2 items
        } else {
            return 1; // mobile: 1 item
        }
    }

    // Fungsi untuk mengupdate posisi slider
    function updateSliderPosition() {
        // Menghitung lebar viewport slider
        const sliderWidth = document.getElementById("team-slider").offsetWidth;

        // Menghitung lebar per item berdasarkan jumlah item per view
        const itemWidth = sliderWidth / itemsPerView;

        // Memberikan lebar eksplisit pada setiap item
        teamItems.forEach((item) => {
            item.style.width = `${itemWidth}px`;
        });

        // Mengupdate posisi slider
        sliderContainer.style.transform = `translateX(${
            -currentPosition * itemWidth
        }px)`;
    }

    // Event listener untuk tombol next
    nextButton.addEventListener("click", function () {
        itemsPerView = calculateItemsPerView();

        // Batasi pergantian slide
        if (currentPosition < teamItems.length - itemsPerView) {
            currentPosition++;
            updateSliderPosition();
        }
    });

    // Event listener untuk tombol prev
    prevButton.addEventListener("click", function () {
        if (currentPosition > 0) {
            currentPosition--;
            updateSliderPosition();
        }
    });

    // Inisialisasi slider
    function initSlider() {
        itemsPerView = calculateItemsPerView();
        currentPosition = 0; // Reset posisi saat resize
        updateSliderPosition();
    }

    // Responsive handling
    window.addEventListener("resize", initSlider);

    // Inisialisasi slider saat halaman dimuat
    initSlider();
});

// ========== Count ==========
document.addEventListener("DOMContentLoaded", function () {
    function animateCountUp(element, target, duration) {
        let start = 0;
        const increment = target / (duration / 20); // Angka akan bertambah setiap 20ms
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                start = target;
                clearInterval(timer);
            }
            element.innerText = Math.floor(start).toLocaleString();
        }, 20);
    }

    const targets = [
        { id: "happyClients", value: 92 },
        { id: "experienceYears", value: 24 },
        { id: "completedProjects", value: 14200 },
        { id: "awardsWon", value: 12 },
    ];

    // ========== IntersectionObserver ==========
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const targetData = targets.find((t) => t.id === element.id);

                    if (targetData && !element.dataset.animated) {
                        animateCountUp(element, targetData.value, 2000);
                        element.dataset.animated = true; // Mencegah animasi terulang setiap kali muncul di viewport
                    }
                }
            });
        },
        { threshold: 0.5 }
    ); // 0.5 artinya animasi mulai ketika 50% elemen terlihat

    targets.forEach((target) => {
        const element = document.getElementById(target.id);
        if (element) {
            observer.observe(element);
        }
    });
});
