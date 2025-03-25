function setActive(index) {
    // Get all timeline dots and cards
    const dots = document.querySelectorAll('.timeline-dot');
    const cards = document.querySelectorAll('.card');

    // Mark all previous steps as completed and disabled (non-clickable)
    for (let i = 0; i < index; i++) {
        dots[i].classList.remove('active', 'bg-primary', 'border-2', 'border-blue-100', 'bg-white');
        dots[i].classList.add('completed');

        // Update previous cards to show completed state
        cards[i].classList.remove('bg-primary', 'text-white', 'shadow-md', 'bg-gray-50');
        cards[i].classList.add('bg-green-50', 'border-l-4', 'border-green-500', 'disabled');

        // Update text colors for completed cards
        const heading = cards[i].querySelector('h3');
        const paragraph = cards[i].querySelector('p');
        if (heading) {
            heading.classList.remove('text-white', 'text-gray-800');
            heading.classList.add('text-green-800');
        }
        if (paragraph) {
            paragraph.classList.remove('opacity-90', 'text-gray-500');
            paragraph.classList.add('text-green-600');
        }
    }

    // Reset styling for current and future steps
    for (let i = index; i < dots.length; i++) {
        // Skip the current step as we'll style it separately
        if (i !== index) {
            dots[i].classList.remove('active', 'bg-primary', 'completed');
            dots[i].classList.add('border-2', 'border-blue-100', 'bg-white');

            cards[i].classList.remove('bg-primary', 'text-white', 'shadow-md', 'bg-green-50', 'border-l-4',
                'border-green-500', 'cursor-pointer');
            cards[i].classList.add('bg-gray-50', 'disabled');
            cards[i].onclick = null; // Disable all future steps

            const heading = cards[i].querySelector('h3');
            const paragraph = cards[i].querySelector('p');
            if (heading) {
                heading.classList.remove('text-white', 'text-green-800');
                heading.classList.add('text-gray-800');
            }
            if (paragraph) {
                paragraph.classList.remove('opacity-90', 'text-green-600');
                paragraph.classList.add('text-gray-500');
            }
        }
    }

    // Style the current active step
    dots[index].classList.remove('border-2', 'border-blue-100', 'bg-white', 'completed');
    dots[index].classList.add('active', 'bg-primary');

    cards[index].classList.remove('bg-gray-50', 'bg-green-50', 'border-l-4', 'border-green-500', 'disabled');
    cards[index].classList.add('bg-primary', 'text-white', 'shadow-md');
    cards[index].onclick = null; // Current step is not clickable

    // Update text color for heading and paragraph in active card
    const activeHeading = cards[index].querySelector('h3');
    const activeParagraph = cards[index].querySelector('p');
    const activeTime = cards[index].querySelector('span');
    if (activeHeading) {
        activeHeading.classList.remove('text-gray-800', 'text-green-800');
    }
    if (activeParagraph) {
        activeParagraph.classList.remove('text-gray-500', 'text-green-600');
        activeParagraph.classList.add('opacity-90');
    }
    if (activeTime) {
        activeTime.classList.remove('text-gray-500');
    }
}