<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="bx bx-store-alt"></i>
            <span>CS Tool</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="user">
            <img src="photo-me.jpeg" alt="imge" class="image-me">
            <div>
                <p class="bold">Pratap P.</p>
                <p>Admin</p>
            </div>
        </div>
        <ul>
            <li>
                <a href="#">
                    <i class="bx bxs-grid-alt"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-body"></i>
                    <span class="nav-item">Customers</span>
                </a>
                <span class="tooltip">Customers</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-comment-detail"></i>
                    <span class="nav-item">Communications</span>
                </a>
                <span class="tooltip">Communications</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-book-open"></i>
                    <span class="nav-item">Adoption</span>
                </a>
                <span class="tooltip">Adoption</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-shopping-bag"></i>
                    <span class="nav-item">Products</span>
                </a>
                <span class="tooltip">Products</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-location-plus"></i>
                    <span class="nav-item">Shipping</span>
                </a>
                <span class="tooltip">Shipping</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="nav-item">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-log-out"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>  
    </div>

    <div class="main-content">
        <div class="top-nav-dashboards">
            <div class="search-container">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text", placeholder="Search">
                </div>
            </div>

            <div class="profile">
                <i class="far fa-bell"></i>
                <img src="photo-me.jpeg" onclick="toggleMenu()">
            </div>

            <!--Profile hover on dashboard page-->
            <div class="dashpro" id="subMenu">
                <div class="sub-menu">
                    <div class="profname">
                        <i class="fa-solid fa-user-tie"></i>
                        <p>Pratap P.</p>
                    </div>
                    <hr>

                    <a href="#" class="sub-link">
                        <i class="fa-solid fa-id-card"></i>
                        <p class="dashpro-item">Profile</p>
                        <span>></span>
                    </a>
    
                    <a href="#" class="sub-link">
                        <i class="fa-solid fa-gears"></i>
                        <p class="dashpro-item">Settings</p>
                        <span>></span>
                    </a>
    
    
                    <a href="#" class="sub-link">
                        <i class="fa-solid fa-circle-info"></i>
                        <p class="dashpro-item">Help</p>
                        <span>></span>
                    </a>
    
                    <a href="#" class="sub-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p class="dashpro-item">Logout</p>
                        <span>></span>
                    </a>
                </div>
                    
            </div>
                
        </div>
            <!-- end Profile hover on dashboard page-->
        



        <h3 class="i-name">
            Dashboard
        </h3>

        <div class="box">
            <div class="box-values">
                <i class="fa fa-house-user"></i>
                <div class="tolcust">
                    <h3>110</h3>
                    <span>Customers</span>
                </div>
            </div>
            <div class="box-values">
                <i class="fa fa-money-check-dollar"></i>
                <div class="tolmrr">
                    <h3>$46,236.88</h3>
                    <span>MRR</span>
                </div>
            </div>
            <div class="box-values">
                <i class="fa fa-user-tie"></i>
                <div class="tolam">
                    <h3>6</h3>
                    <span>Account Managers</span>
                </div>
             </div>
             <div class="box-values">
                <i class="fa fa-users"></i>
                <div class="toluser">
                    <h3>700</h3>
                    <span>Users</span>
                </div>
            </div>
        </div>

    </div>
    

</body>

<script src="customers.js"></script>
</html>