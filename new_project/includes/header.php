<div>
    <header>
    <a href="index.php" class="logo" style="font-size: 26px;"><i class="fa-solid fa-person-walking-luggage fa-beat-fade"></i>  Voyage</a>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul class="nav-links">
            <?php 
            if(isset($_SESSION['email'])){ 
            ?>
                <li><a class="active nav-item" href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a class="btn btn-lg nav-item" href="./includes/logout.php">Logout <i class="fa-solid fa-circle-right"></i></a></li>
            <?php
            } else { ?>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a class="btn btn-lg btn-warning nav-item" href="./forms/login.php">Login <i class="fa-solid fa-circle-right"></i></a></li>
                <?php
            }
            ?>
            </ul>
        </nav>
    </header>
</div>