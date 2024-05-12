<?php include '../../template/header.php'; ?>
<link rel="stylesheet" href="../../styles/teacher.css">

    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-button">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>
                <button onclick="activateButton(this)"><i class='bx bx-user'></i>Manage Students</button>
                <button onclick="activateButton(this)"><i class='bx bx-calendar-week'></i>Class Schedule</button>
                <button onclick="activateButton(this)"><i class='bx bxs-volume-low'></i>Announcement</button>
                <button onclick="activateButton(this)"><i class='bx bx-bell'></i>Notification</button>
                <button onclick="activateButton(this)"><i class='bx bx-support'></i>Help & Support</button>
                <button onclick="activateButton(this)"><i class='bx bx-cog'></i>Settings</button>
                <button onclick="activateButton(this)"><i class='bx bx-log-out'></i>Logout</button>
                <br>
                <hr>
                <div>
                <br>
                <label for="">Academic Year</label>
                <select name="" id="">
                    <option value="">2nd Sem 2023-2024</option>
                    <option value="">1nd Sem 2023-2024</option>
                </select>
                </div>
            </div>
        </div>
    <!-- END OF SIDEBAR -->


    <!-- START OF CENTER -->
        <div class="center">
    

        <!-- start of content1 -->
        <div class="content1">


        <!-- start of con1 -->
                 <?php include '../../template/dashboard_cover.php' ?>
        <!-- end of con1    -->

        <!-- start of con3 -->
            <div class="center-con con3">
            <div class="report-card">
                    <p>Subject</p>
                    <img src="../../assets/images/book-stack.png" alt="">
                    <code>1</code>
                </div>

                <div class="report-card">
                <p>Classes</p>
                <img src="../../assets/images/training.png" alt="" style="width:50px">
                    <code>3</code>
                </div>

                <div class="report-card">
                <p>Student</p>
                    <img src="../../assets/images/graduating-student.png" alt="" style="width:50px">
                    <code>96</code>
                </div>

            </div>
        <!-- end of con3 -->


            <!-- start of con2 -->
                <div class="center-con con2">
                    <div class="con2-con">
                        <div class="post-input">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="">
                            </div>
                            <div>
                                <textarea name="" id=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end of con2 -->


                </div>
                <!-- end of content1 -->

            </div>
        <!-- END OF CENTER -->
      

        <?php include '../../template/right-bar.php' ?>

    </div>
    <!-- END OF CONTAINER -->
    <script src="../../script/dashboard.js"></script>
</body>
</html>
