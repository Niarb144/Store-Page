document.addEventListener("DOMContentLoaded", function () {
    const statusText = document.getElementById("status-text");
    const openTime = 9; // 9:00 AM
    const closeTime = 17; // 6:00 PM

    function updateStatus() {
        const now = new Date();
        const currentHour = now.getHours();

        if (currentHour >= openTime && currentHour < closeTime) {
            statusText.textContent = "Open till 11PM";
            statusText.style.color = "green";
        } else {
            statusText.textContent = "We are Closed";
            statusText.style.color = "red";
        }
    }

    updateStatus(); // Initial check
    setInterval(updateStatus, 1000 * 60); // Update status every minute
});