<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="index.html">
          <span class="align-middle">CRUD PROJECT</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="dashboard.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle"> Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="profile.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <?php 
                if($_SESSION['role'] == 'admin'){ ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="user.php">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">All Users</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="add_user.php">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add User</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="post.php">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">All Post</span>
                        </a>
                    </li>
             <?php   }
            ?>


            <?php 
                if($_SESSION['role'] == 'editor'){ ?>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="post.php">
                        <i class="align-middle" data-feather="book"></i> <span class="align-middle">All Post</span>
                    </a>
                </li>
             <?php   }
            ?>
           

         



        </ul>
    </div>
</nav>