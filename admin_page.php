<?php
@include 'config.php';
session_start();

// Check if the user is logged in as admin
if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit();
}

$admin_name = $_SESSION['admin_name']; // Admin specific content
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #8e5d3d; /* Dark wood color */
            color: white;
            padding-top: 30px; /* Padding at the top */
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center; /* Center the items */
        }

        .sidebar h3 {
            color: #fff;
            text-align: center;
            margin-bottom: 40px;
            font-size: 24px;
        }

        .sidebar a {
            display: block;
            padding: 15px 20px; /* Consistent padding */
            color: #ddd;
            text-decoration: none;
            margin-bottom: 10px;
            border-radius: 5px;
            width: 100%; /* Full width for better alignment */
            text-align: center; /* Center the text */
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #6c3f27; /* Darker brown on hover */
        }

        .sidebar .btn {
            background-color: #d06a34; /* Logout button color */
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            color: #fff;
            width: 100%; /* Full width for the logout button */
            text-align: center;
            margin-top: 30px;
        }

        .sidebar .btn:hover {
            background-color: #a64e1f;
        }

        /* Content Area */
        .content-area {
            margin-left: 250px;
            padding: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .content-area {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar for Admin -->
    <div class="sidebar">
        <h3>Admin Panel</h3>
        <a href="admin_page.php"><i class="fas fa-home"></i> Home</a>
        <a href=""><i class="fas fa-users"></i> Manage Users</a>
        <a href=""><i class="fas fa-calendar-check"></i> Files Storage</a>
        <a href=""><i class="fas fa-gavel"></i> Manage Cases</a>
        <a href="logout.php" class="btn btn-danger w-100 mt-3"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content Area for Admin Dashboard -->
    <div class="content-area">
        <div class="container">
            <h1>Welcome, <?php echo htmlspecialchars($admin_name); ?>!</h1>
            <p>This is your admin dashboard. You can manage users, files, and cases from here.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
