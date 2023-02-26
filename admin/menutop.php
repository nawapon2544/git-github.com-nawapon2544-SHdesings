<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>LTE</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>เมนู
    </b></span>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        
         <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../m_img/<?php echo $row['m_img'];?>" width="25" height="25" class="img-circle user-image" alt="User Image">
                <span class="hidden-xs">ยินดีต้อนเจ้าหน้าที่</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../m_img/<?php echo $row['m_img'];?>"class="img-circle" alt="User Image user-image">
                  
                  <p>
                    Admin<br>
                    
                    <small>Name : <?php echo $m_name;?>
                    </small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat" disabled>Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../logout.php" class="btn btn-default btn-flat" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
      </ul>
    </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
             <li><a href="index.php"> ระบบสหกิจศึกษาสำหรับเจ้าหน้าที่
             </a></li>

           
              </ul>
            </li>
            
          </ul>
        </div>
  </nav>
</header>