// Check for a regNo parameter in the URL and pre-fill the input field
var urlParams = new URLSearchParams(window.location.search);
var regNo = urlParams.get("regNo");
if (regNo) {
    document.getElementById("regNo").value = regNo;
    fetchData(regNo); // Automatically fetch data when the URL is pasted
}

document.getElementById("validateButton").addEventListener("click", function () {
    var input = document.getElementById("regNo").value;
    fetchData(input); // Fetch data when the "Validate" button is clicked
});

function fetchData(input) {
    // Send a request to the PHP server to validate and fetch user status
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "validate.php?input=" + input, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.status === "Active") {
                Swal.fire({
                    title: "<b>Active<b>",
                    html: `<strong>${response.name}</strong> <br> ${response.team}`,
                    icon: "success"
                });
            } else if (response.status === "Expired") {
                Swal.fire({
                    title: "Expired",
                    html: `<strong>${response.name}</strong> <br> ${response.team}`,
                    icon: "info"
                });
            } else {
                Swal.fire({
                    title: "Error",
                    text: "User not found or invalid input.",
                    icon: "error"
                });
            }
        }
    };
    xhr.send();
}


    // Check local storage for user's preference
    const isDarkMode = localStorage.getItem('darkMode') === 'true';

    // Apply dark mode if user has set it
    if (isDarkMode) {
        document.body.classList.add('dark-mode');
        document.getElementById('darkModeToggle').innerHTML = '<i class="fas fa-sun"></i>';
    }

    // Function to toggle dark mode
    function toggleDarkMode() {
        const body = document.body;
        const button = document.getElementById('darkModeToggle');

        body.classList.toggle('dark-mode');
        const isDarkModeNow = body.classList.contains('dark-mode');

        // Toggle moon and sun icons based on dark mode status
        button.innerHTML = isDarkModeNow ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';

        // Save user's preference in local storage
        localStorage.setItem('darkMode', isDarkModeNow);
    }
