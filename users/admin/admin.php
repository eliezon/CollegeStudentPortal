<?php include '../../template/header.php'; ?>
<link rel="stylesheet" href="../../styles/admin.css">

    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-button btn">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>
                <button onclick="activateButton(this)"><i class='bx bx-user'></i>Manage Users</button>
                <button onclick="activateButton(this)"><i class='bx bx-support'></i>Help & Support</button>
                <button onclick="activateButton(this)"><i class='bx bx-cog'></i>Setting</button>
                <button onclick="activateButton(this)"><i class='bx bx-log-out'></i>Logout</button>
            </div>
        
        </div>
    <!-- END OF SIDEBAR -->


    <!-- START OF CENTER -->
        <div class="center">
         
            <!-- start of content1 -->
            <div class="content1">


            <!-- start of con1 -->
            <!-- <div class="center-con con1">
                <h1>Welcome,</h1>
                <h3>Super Admin !</h3>
                <br>
            </div> -->
            <!-- end of con1 -->


            <!-- start of con2 -->
            <div class="center-con con2">
                
            <!-- start of report-card -->
            <div class="report-card">
                    <p>All Users</p>
                    <img src="../../assets/images/group.png" alt="">
                    <code>2861</code>
                </div>

                <div class="report-card">
                <p>Program Head</p>
                    <img src="../../assets/images/leader.png" alt="">
                    <code>6</code>
                </div>

                <div class="report-card">
                <p>Teacher</p>
                <img src="../../assets/images/experience.png" alt="" style="width:80px">
                    <code>34</code>
                </div>

                <div class="report-card">
                <p>Student</p>
                    <img src="../../assets/images/graduating-student.png" alt="">
                    <code>2160</code>
                </div>

            </div>
            <!-- end of con2 -->


            <!-- start of con3 -->
            <div class="center-con con3">
                
            </div>
            <!-- end of con3 -->

            </div>
            <!-- end of content1 -->

        </div>
    <!-- END OF CENTER -->

    </div>
  <!-- END OF CONTAINER -->

    <script src="../../script/dashboard.js"></script>
</body>
</html>
