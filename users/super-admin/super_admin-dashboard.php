<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/student-dashboard.css">
    <link rel="stylesheet" href="../../styles/super_admin-dashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        
        <nav class="topbar">
            <div class="topleft">
                <a href="index.php" style="text-decoration:none; color:white;cursor:default">
                <h1>CSP<span>.</span></h1></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" ></path></svg>
            </div>

            <div class="topright">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                <p>super_admin@csp.edu.ph</p>
                <img src="../../assets/images/user.png" alt="" style="width:50px; border-radius:50px">
            </div>
        </nav>
        

        <div class="sidebar">
            <div class="sidebar-button btn">
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>
                <button onclick="activateButton(this)"><i class='bx bx-user'></i>Manage Users</button>
                <button onclick="activateButton(this)"><i class='bx bx-support'></i>Help & Support</button>
                <button onclick="activateButton(this)"><i class='bx bx-cog'></i>Setting</button>
                <button onclick="activateButton(this)"><i class='bx bx-log-out'></i>Logout</button>
            </div>
            <div class="bottom">
                     <img src="../../assets/images/csplogo.png" alt="">

                </div>
        </div>


        <div class="center">
         
            <div class="center-con con1">
                <h1>Welcome,</h1>
                <h3>Super Admin !</h3>
                <br>
            </div>

            <div class="center-con con2">
                
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


            <div class="center-con con3">
              
            </div>
            
            <div>
                
            </div>
      
        </div>

 

            
        </div> 
    </div>
    <script src="../../script/dashboard.js"></script>
</body>
</html>
