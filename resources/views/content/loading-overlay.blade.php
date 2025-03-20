<div id="load-container">
    <div class="fixed z-30 w-full h-full bg-black bg-opacity-[0.7] top-0 flex justify-center items-center">
        <div class='flex space-x-2 justify-center items-center'>
            <div class='h-8 w-8 bg-white rounded-full animate-bounce [animation-delay:-0.3s]'></div>
            <div class='h-8 w-8 bg-white rounded-full animate-bounce [animation-delay:-0.15s] '></div>
            <div class='h-8 w-8 bg-white rounded-full animate-bounce'></div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    document.getElementsByTagName("body")[0].style.overflow = "hidden";
});

window.addEventListener("load", function () {
    document.getElementById("load-container").remove();
    document.getElementsByTagName("body")[0].style.overflow = "auto";
});
    </script>
</div>