<!DOCTYPE html>
<html>
<head>
    <title>CAM - Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Coaches Association Michika">
    <meta property="og:image" content="../assets/img/logo.png"/>
    <link rel="icon" href="../assets/img/logo.png" sizes="192x192" />
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Include SweetAlert library -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            <!-- Add the "d-block mx-auto" classes to make the image responsive and center it -->
            <img class="d-block mx-auto mb-4" src="../assets/img/logo.png" alt="Logo" width="150">
            <form id="userForm" class="text-center p-3">
                <h2 class="mb-4">Coaches Association Michika</h2>
                <div class="form-group">
                    <label for="regNo">Registration Number or Phone Number:</label>
                    <input type="text" id="regNo" name="regNo" class="form-control" required>
                </div>
                <button type="button" id="validateButton" class="btn btn-primary mt-3">Validate</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer section -->
<footer class="text-center">
    <p>Developed by Daniel Jr | Contact: <a href="tel:+2348135628188">08135628188</a></p>
    <p><strong>CAMichika © <?php echo date('Y'); ?></strong></p>

    <!-- Dark Mode / Light Mode Button -->
    <button class="btn btn-outline-primary" id="darkModeToggle" onclick="toggleDarkMode()">
        <i class="fas fa-moon"></i> <!-- Moon icon for dark mode -->
        <i class="fas fa-sun" style="display:none;"></i> <!-- Sun icon for light mode -->
    </button>
</footer>

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
<script src="../assets/js/script.js"></script>
</body>
</html>
