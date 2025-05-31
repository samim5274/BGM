    // Sidebar toggle

    const sideButton = document.getElementById('sideButton');
    const popupOverlay = document.getElementById('popupOverlay');
    const closePopup = document.getElementById('closePopup');

    sideButton.addEventListener('click', () => {
        popupOverlay.style.display = 'block';
    });

    closePopup.addEventListener('click', () => {
        popupOverlay.style.display = 'none';
    });

    // Also close popup if clicking outside the popupContent box
    popupOverlay.addEventListener('click', (e) => {
        if (e.target === popupOverlay) {
        popupOverlay.style.display = 'none';
        }
    });