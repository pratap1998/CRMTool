<?php 

include ('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="customers.css">
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

        <div class="box1">
        <h3 class="i-name">
            Customers
        </h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
        </div>
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Company ID</td>
                        <td>Company Name</td>
                        <td>MRR($)</td>
                        <td>AM</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * from customer";
                $result=$conn->query($query);
                if(!$result){
                    die("query failed".mysqli_error());
                }
                else{
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                        <td class="companyid"><?php echo $row['company_id'];?>
                        </td>
                        <td class="actname"><?php echo $row['company_name'];?>
                        </td>
                        <td class="mrr"><?php echo $row['mRR'];?>
                        </td>
                        <td class="actman">
                            <h5>Pratap Purakayastha</h5>
                            <p>Senior-Associate Customer Success</p>
                        </td>
                        <td class="status"><?php echo $row['status_id'];?>
                        </td>
                        <td class="edit">
                            <a href="#">Edit</a>
                        </td>
                    </tr>
                        <?php
                    }
                }
                ?>
                    <tr>
                        <td class="companyid">
                                <h5>102</h5>
                        </td>
                        <td class="actname">
                            <h5>A Better Service Company LLC</h5>
                        </td>
                        <td class="mrr">
                            <h5>$560</h5>
                        </td>
                        <td class="actman">
                            <h5>Pratap Purakayastha</h5>
                            <p>Senior-Associate Customer Success</p>
                        </td>
                        <td class="status">
                            <p>Active</p>
                        </td>
                        <td class="edit">
                            <a href="#">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="companyid">
                                <h5>102</h5>
                        </td>
                        <td class="actname">
                            <h5>A Better Service Company LLC</h5>
                        </td>
                        <td class="mrr">
                            <h5>$560</h5>
                        </td>
                        <td class="actman">
                            <h5>Pratap Purakayastha</h5>
                            <p>Senior-Associate Customer Success</p>
                        </td>
                        <td class="status">
                            <p>Active</p>
                        </td>
                        <td class="edit">
                            <a href="#">Edit</a>
                        </td>
                    </tr>
                   
                    
                </tbody>
            </table>
        
                <?php

                    if(isset($_GET['message'])){
                        echo "<h6>".$_GET['message']."</h6>";
                    }

                ?>

                <?php

                    if(isset($_GET['insert_msg'])){
                        echo "<h6>".$_GET['insert_msg']."</h6>";
                    }

                ?>
    
        </div>
        <!-- Modal -->
        <form action="custadd.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="cust_name">Company Name</label>
                                <input type="varchar" name="cust_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cust_id">Company ID</label>
                                <input type="int" name="cust_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mRR">MRR</label>
                                <input type="decimal" name="mRR" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" name="add_cust" value="Save">
                        </div>
                    </div>
                </div>
            </div>
        </form>


        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

<script src="customers.js"></script>

</html>