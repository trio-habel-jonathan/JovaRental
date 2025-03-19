document.addEventListener("DOMContentLoaded", function () {
    const settingsButton = document.getElementById("settings-button");
    const backButton = document.getElementById("back-button");
    const contentArea = document.getElementById("content-area");
    const pageTitle = document.getElementById("page-title");

    settingsButton.addEventListener("click", function () {
        // Ganti konten dengan halaman Settings
        contentArea.innerHTML = `@include('partials.user_profile_setting')`;
        pageTitle.textContent = "Settings";

        // Tampilkan tombol "Back", sembunyikan tombol "Settings"
        backButton.classList.remove("hidden");
        settingsButton.classList.add("hidden");
    });

    backButton.addEventListener("click", function () {
        // Kembalikan ke halaman Profile
        contentArea.innerHTML = `@include('partials.user_profile')`;
        pageTitle.textContent = "User Profile";

        // Tampilkan tombol "Settings", sembunyikan tombol "Back"
        settingsButton.classList.remove("hidden");
        backButton.classList.add("hidden");
    });
});
