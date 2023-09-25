document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search-input');
    const searchButton = document.getElementById('search-button');
    const searchResults = document.getElementById('search-results');

    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase();
        const elements = searchResults.getElementsByTagName('div');

        for (let i = 0; i < elements.length; i++) {
            const elementText = elements[i].textContent.toLowerCase();
            if (elementText.includes(searchTerm)) {
                elements[i].style.display = 'block';
            } else {
                elements[i].style.display = 'none';
            }
        }
    }

    function resetSearchResults() {
        const elements = searchResults.getElementsByTagName('div');

        for (let i = 0; i < elements.length; i++) {
            elements[i].style.display = 'block';
        }
    }

    // Search when Enter key is pressed
    searchInput.addEventListener('keyup', function (event) {
        if (event.key === 'Enter') {
            performSearch();
        }
    });

    // Search when the button is clicked
    searchButton.addEventListener('click', function () {
        performSearch();
    });

    // Reset search results when the input is cleared
    searchInput.addEventListener('input', function () {
        if (searchInput.value.trim() === '') {
            resetSearchResults();
        }
    });
});
