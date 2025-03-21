// Get DOM elements
const toggleButton = document.getElementById('toggleBalance');
const hideIcon = document.getElementById('hideIcon');
const showIcon = document.getElementById('showIcon');
const visibleBalance = document.getElementById('visibleBalance');
const hiddenBalance = document.getElementById('hiddenBalance');

// Get the balance amount element
const balanceAmountElement = visibleBalance.querySelector('.font-bold.text-3xl');
const originalText = balanceAmountElement.textContent; // "120.000.000"
const hiddenText = "********";

// Immediately clear the content (do this first thing)
balanceAmountElement.textContent = "";

// Initial state
let isBalanceVisible = false;

// Function to animate the balance with sliding characters
function animateBalance(showBalance) {
  // Clear the current balance display
  balanceAmountElement.innerHTML = '';
  
  // Select which text to display based on state
  const targetText = showBalance ? originalText : hiddenText;
  
  // Create and append each character with a sliding animation
  for (let i = 0; i < targetText.length; i++) {
    const charSpan = document.createElement('span');
    charSpan.textContent = targetText[i];
    charSpan.style.display = 'inline-block';
    charSpan.style.transform = 'translateY(100%)';
    charSpan.style.opacity = '0';
    charSpan.style.transition = 'transform 0.3s ease, opacity 0.3s ease';
    charSpan.style.transitionDelay = `${i * 0.05}s`;
    balanceAmountElement.appendChild(charSpan);
    
    // Trigger the animation after a small delay
    setTimeout(() => {
      charSpan.style.transform = 'translateY(0)';
      charSpan.style.opacity = '1';
    }, 10);
  }
}

// Function to set balance display without animation
function setBalanceWithoutAnimation(showBalance) {
  // Select which text to display based on state
  const targetText = showBalance ? originalText : hiddenText;
  
  // Simply set the text content
  balanceAmountElement.textContent = targetText;
}

// Store the original text safely and clear immediately
document.addEventListener('DOMContentLoaded', () => {
  // Ensure the content is empty during the initial load
  balanceAmountElement.textContent = "";
  
  // Add a small delay to simulate loading time
  setTimeout(() => {
    // Check if there's a saved state in localStorage
    const savedState = localStorage.getItem('balanceVisible');
    if (savedState !== null) {
      isBalanceVisible = savedState === 'true';
    }
    
    // Set the initial icon state
    if (!isBalanceVisible) {
      hideIcon.classList.add('hidden');
      showIcon.classList.remove('hidden');
    } else {
      hideIcon.classList.remove('hidden');
      showIcon.classList.add('hidden');
    }
    
    // Now show the appropriate balance state
    setBalanceWithoutAnimation(isBalanceVisible);
  }, 300); // Short delay to simulate loading
});

// Toggle balance visibility when the button is clicked
toggleButton.addEventListener('click', () => {
  // Toggle the state
  isBalanceVisible = !isBalanceVisible;
  
  // Save state to localStorage to persist across page refreshes
  localStorage.setItem('balanceVisible', isBalanceVisible);
  
  // Toggle the eye icons
  if (isBalanceVisible) {
    hideIcon.classList.remove('hidden');
    showIcon.classList.add('hidden');
  } else {
    hideIcon.classList.add('hidden');
    showIcon.classList.remove('hidden');
  }
  
  // Animate to the new state (with animation)
  animateBalance(isBalanceVisible);
});