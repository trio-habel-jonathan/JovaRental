// Get the elements
const eyeOpen = document.getElementById("eye-open");
const eyeClosed = document.getElementById("eye-closed");
const balance = document.getElementById("balance");

// Store the actual balance
const actualBalance = balance.innerHTML;
const hiddenBalance = '<span class="text-lg">Rp</span> ****';

// Function to update balance visibility based on localStorage
function updateBalanceVisibility() {
    const isHidden = localStorage.getItem("balanceHidden") === "true";
    if (isHidden) {
        balance.innerHTML = hiddenBalance;
        eyeOpen.classList.add("hidden-icon");
        eyeClosed.classList.remove("hidden-icon");
    } else {
        balance.innerHTML = actualBalance;
        eyeClosed.classList.add("hidden-icon");
        eyeOpen.classList.remove("hidden-icon");
    }
}

// Add click event to toggle visibility
eyeOpen.addEventListener("click", function () {
    // Animate balance fading out
    balance.classList.add("fade-out");

    // Animate icons
    eyeOpen.style.transform = "rotate(180deg)";
    eyeOpen.style.opacity = "0";

    setTimeout(() => {
        // Hide the balance
        balance.innerHTML = hiddenBalance;

        // Switch the icons
        eyeOpen.classList.add("hidden-icon");
        eyeClosed.classList.remove("hidden-icon");

        // Reset rotation for closed icon and fade in
        eyeClosed.style.transform = "rotate(0deg)";
        eyeClosed.style.opacity = "1";

        // Animate balance fading in
        balance.classList.remove("fade-out");
        balance.classList.add("fade-in");

        // Save state to localStorage
        localStorage.setItem("balanceHidden", "true");

        setTimeout(() => {
            balance.classList.remove("fade-in");
        }, 500);
    }, 300);
});

eyeClosed.addEventListener("click", function () {
    // Animate balance fading out
    balance.classList.add("fade-out");

    // Animate icons
    eyeClosed.style.transform = "rotate(-180deg)";
    eyeClosed.style.opacity = "0";

    setTimeout(() => {
        // Show the balance
        balance.innerHTML = actualBalance;

        // Switch the icons
        eyeClosed.classList.add("hidden-icon");
        eyeOpen.classList.remove("hidden-icon");

        // Reset rotation for open icon and fade in
        eyeOpen.style.transform = "rotate(0deg)";
        eyeOpen.style.opacity = "1";

        // Animate balance fading in
        balance.classList.remove("fade-out");
        balance.classList.add("fade-in");

        // Save state to localStorage
        localStorage.setItem("balanceHidden", "false");

        setTimeout(() => {
            balance.classList.remove("fade-in");
        }, 500);
    }, 300);
});

// Initialize balance visibility on page load
updateBalanceVisibility();
