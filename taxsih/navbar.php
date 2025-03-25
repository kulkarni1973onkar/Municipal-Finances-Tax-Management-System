<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/icon.png" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome 
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>     
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Local Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="add_localadmin.php">Add Local Admin</a></li>
                <li class="nav-item"> <a class="nav-link" href="view_localadmin.php">View Local Admin</a></li>
                
              </ul>
            </div>
          </li>
       
        </ul>
      </nav> 