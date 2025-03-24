document.addEventListener("DOMContentLoaded", function () {
    const selectBtn = document.getElementById("custom-select-btn");
    const dropdown = document.getElementById("custom-select-dropdown");
    const selectedYearText = document.getElementById("selected-year");
    const originalSelect = document.getElementById("year-select");

    // Populate the dropdown with years
    const currentYear = new Date().getFullYear();
    for (let year = currentYear; year >= 2000; year--) {
        const option = document.createElement("div");
        option.className =
            "cursor-pointer select-none relative py-2 pl-3 pr-9 hover:bg-gray-100";
        option.textContent = year;
        option.setAttribute("data-value", year);

        option.addEventListener("click", function () {
            const selectedYear = this.getAttribute("data-value");
            selectedYearText.textContent = selectedYear;

            // Update the original select value for form submission
            originalSelect.value = selectedYear;

            // Hide dropdown after selection
            dropdown.classList.add("hidden");

            // Trigger change event on original select
            const event = new Event("change", { bubbles: true });
            originalSelect.dispatchEvent(event);
        });

        dropdown.appendChild(option);
    }

    // Set initial value from select
    selectedYearText.textContent = originalSelect.value;

    // Toggle dropdown visibility
    selectBtn.addEventListener("click", function () {
        dropdown.classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (
            !selectBtn.contains(event.target) &&
            !dropdown.contains(event.target)
        ) {
            dropdown.classList.add("hidden");
        }
    });

    // Add keyboard navigation
    selectBtn.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
            dropdown.classList.toggle("hidden");
            e.preventDefault();
        }
    });

    // CHART JS
    const ctx = document.getElementById("lineChart").getContext("2d");

    // Buat chart dengan opsi responsif yang tepat
    const lineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            datasets: [
                {
                    label: "Transactions",
                    data: [0, 0, 0, 0, 0, 300, 400, 250, 320, 450, 380, 600],
                    borderColor: "rgba(186, 104, 200, 1)",
                    backgroundColor: "rgba(225, 190, 231, 0.5)",
                    borderWidth: 3,
                    tension: 0.4,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: "top",
                },
            },
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
    // Fungsi untuk mengatasi resize
    function handleResize() {
        // Dapatkan ukuran chart-container
        const chartContainer = document.querySelector(".chart-container");
        // Dapatkan ukuran container parent
        const parentWidth = chartContainer.parentElement.clientWidth;

        // Terapkan lebar maksimum yang konsisten
        // Jika parent lebih kecil dari batas tertentu, gunakan ukuran parent
        // Jika tidak, gunakan ukuran maksimum yang tetap
        const maxWidth = 800; // Atur nilai ini sesuai kebutuhan desain Anda

        if (parentWidth < maxWidth) {
            chartContainer.style.width = "100%";
        } else {
            chartContainer.style.width = maxWidth + "px";
        }

        // Update chart untuk merespons perubahan ukuran
        lineChart.resize();
    }

    // Panggil fungsi saat load dan resize
    handleResize();
    window.addEventListener("resize", handleResize);

    // Tambahkan handler untuk zoom browser juga
    window.addEventListener("zoom", handleResize);
    // Chrome dan browser berbasis Webkit tidak memiliki event zoom
    // Jadi kita gunakan polling untuk memeriksa perubahan ukuran
    let previousWidth = window.innerWidth;
    setInterval(function () {
        if (previousWidth !== window.innerWidth) {
            previousWidth = window.innerWidth;
            handleResize();
        }
    }, 300);
});
