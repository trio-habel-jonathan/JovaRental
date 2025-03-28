document.addEventListener("DOMContentLoaded", function() {
document.querySelectorAll("form").forEach(function(form) {
    form.addEventListener("submit", function() {
        let submitButton = form.querySelector("button[type=submit]");
        console.log(submitButton);
        
        if (submitButton) {
            submitButton.disabled = true; // Disable tombol
            submitButton.innerText = "Processing..."; // Opsional: Ubah teks
        }
    });
});
});
