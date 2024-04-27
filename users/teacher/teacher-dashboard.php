<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/student-dashboard.css">
    <link rel="stylesheet" href="../../styles/teacher-dashboard.css">
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
                <p>teacher@csp.edu.ph</p>
                <img src="../../assets/images/user.png" alt="" style="width:50px; border-radius:50px">
            </div>
        </nav>
        

        <div class="sidebar">
            <div class="sidebar-button">
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


        <div class="center">
    
            <div class="center-con con1">
                <h1>Welcome,</h1>
                <h3>Teacher !</h3>
                <br>
            </div>


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

            <div class="center-con con2">
                <br>
                <div style="display:flex; justify-content: space-between;align-items: center;padding: 0 10px">
                <p>ANNOUNCEMENT</p>
                <a href="#">See All</a>
                </div>
                
                <div class="announcement">
                    <button class="prev" onclick="slide(-1)">&#10094;</button>
                   
                    <div class="a-cards" style="display: flex;overflow-x:scroll">
                        <div class="a-card">
                        <h4>Lorem Ipsum 1</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 2</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 3</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 4</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 5</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 6</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 7</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 8</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 9</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 10</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>
                        
                        <div class="a-card">
                        <h4>Lorem Ipsum 11</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <div class="a-card">
                        <h4>Lorem Ipsum 12</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...</p>
                        <a href="#">More ➢</a>
                        </div>

                        <!-- Repeat these cards as needed -->
                    </div>
                    <button class="next" onclick="slide(1)">&#10095;</button>
                </div>
                
            </div>

            <div>
                
            </div>
      
        </div>

        <div class="right">
            <h3>Class Schedule</h3>
            <div class="schedule">
                <div class="schedule-con">
                    <div>
                    <p class="time">03:00 PM - 08:00 PM</p>
                    <p>Software Engineering</p>
                    <p class="instructor"></p>
                </div>
                </div>

                <div class="schedule-con">
                <div class="sched" style=" border-left: 3px solid red;">
                    <p class="time">10:00 AM - 12:30 PM</p>
                    <p>Free Elective</p>
                    <p class="instructor"></p>
                </div>
                </div>

                <div class="schedule-con">
                <div class="sched" style=" border-left: 3px solid red;">
                    <p class="time">01:00 PM - 3:00 PM</p>
                    <p>Project Management</p>
                    <p class="instructor"></p>
                </div>
                </div>
                <a href="#">See All</a>

                <div class="bottom">
                        <img src="../../assets/images/scclogo.png" alt="">
                        <img src="../../assets/images/csplogo.png" alt="">
                </div>

            </div>

            
        </div> 
    </div>
    <script src="../../script/dashboard.js"></script>
</body>
</html>
