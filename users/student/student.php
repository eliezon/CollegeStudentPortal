<?php include '../../template/header.php'; ?>
        
    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            
            <div class="sidebar-button">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>


                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <button onclick="activateButton(this);showOnlineEnrollment()"><i class='bx bxs-file'></i>Online Enrollment</button>
                <button onclick="activateButton(this)"><i class='bx bxs-file'></i>Enrollment Status</button>
                    </ul>
                </div>
                
              
                <button onclick="activateButton(this);showGrade()"><i class='bx bxs-medal'></i>My Grades</button>
                <button onclick="activateButton(this);showSchedule()"><i class='bx bx-calendar-week'></i>Class Schedule</button>
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
        <div class="center" id="center">

        <!-- start of content1 -->
            <div class="content1">
           
            <!-- start of dashboard-con -->
            <div class="dashboard-con" id="dashboard-con">

        <!-- start of con1 -->
        <?php include '../../template/dashboard_cover.php' ?>
        <!-- end of con1    -->

        
            <!-- start of con3 -->
            <div class="center-con con3" id="con3">
                <p>Enrollment is now Open!</p>
                <div style="text-align:center">
                <img src="../../assets/images/enrollmentposter.png" alt="">
                </div>
                <button type="button" onclick="showEnrollment()">Enroll Now!</button>
            </div>
            <!-- end of con3 -->


        <!-- start of con2 -->
            <div class="center-con con2" id="con2">
                <br>
              
                <p>ANNOUNCEMENT</p>
               
                
                 <!-- start of announcement -->
                <div class="announcement">
                  
                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 1</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 2</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 3</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 4</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 5</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 6</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>                  
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 7</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 8</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 9</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 10</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>
                        
                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 11</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                        <div class="a-card">
                            <div>
                                <img src="../../assets/images/mark.jpg" alt="" class="card-img">
                                <div class="zxc">
                                <p class="name">Mark Eliezon Aniñon <br> <span>07:10 am</span></p>
                                <p class="date">April 11, 2024</p>
                                </div>
                            </div>
                        <h4>Lorem Ipsum 12</h4>
                        <p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
                        </div>

                </div>
                <!-- end of announcement -->
                
            </div>
            <!-- end of con2 -->

            </div>
            <!-- end of dashboard-con -->



             <!-- start of con4 -->
             <div class="con4 enrollment" id="con4">
            <form action="" id="enrollment">
                <div>
                <div class="asd">
                <h1>ENROLLMENT FORM</h1>
                <button type="button" onclick="hideEnrollment()">🗙</button>
                </div>

                <p>Data Privacy Agreement
                    By filling up this form, you agree that we can collect and process your personal information for purposes related to enrollment and education. You acknowledge that this information will be handled by selected faculty of the College, as well as other authorized staff and advisors from the School. Your record may be retained for legal purposes only. Any information we received through the means will be protected against loss, misuse, or unauthorized alteration through technical and organizational measures. 
                    Rest assured that your information will be handled properly and securely.
                </p>

                <div class="agreement">
                    <input type="checkbox" style="accent-color:red">
                    <p> I have read and agree with the <a href="">Data Privacy Agreement</a></p>
                </div>

                <div class="radiobtn"> 
                    <div>
                        <br>
                        <label for=""><b>COLLEGE</b></label> <br> <br>
                        <input type="radio" checked>
                        <label for="">College of Technology</label><br><br>
                    </div>
                </div>

                <label for=""><b>PROGRAM</b></label>
                <div>
                    <input type="radio" checked>
                    <label>Bachelor of Science in Information Technology</label>
                </div>

                <label for=""><b>YEAR LEVEL</b></label>
                <div>
                    <input type="radio" checked>
                    <label>3rd Year</label>
                </div>

                <select name="" id="">
                    <option value="">BSIT-3B (3rd Year - Second Semester)</option>
                </select>

                <table>
                    <thead>
                        <tr>
                            <th>COURSE CODE NO.</th>
                            <th>COURSE DESCRIPTION</th>
                            <th colspan="2"><p>UNITS</p>
                                _________
                                LEC|LAB
                            </th>
                            <th>DAYS</th>
                            <th>TIME</th>
                            <th>ROOM</th>
                            <th>INSTRUCTOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SampleCourseCode</td>
                            <td>Sample Course Description</td>
                            <td>Lec</td>
                            <td>Lab</td>
                            <td>Sample Days</td>
                            <td>Sample Time</td>
                            <td>Sample Room</td>
                            <td>Sample Instructor</td>
                        </tr>
                        <tr>
                            <td>SampleCourseCode</td>
                            <td>Sample Course Description</td>
                            <td>Lec</td>
                            <td>Lab</td>
                            <td>Sample Days</td>
                            <td>Sample Time</td>
                            <td>Sample Room</td>
                            <td>Sample Instructor</td>
                        </tr>
                        <tr>
                            <td>SampleCourseCode</td>
                            <td>Sample Course Description</td>
                            <td>Lec</td>
                            <td>Lab</td>
                            <td>Sample Days</td>
                            <td>Sample Time</td>
                            <td>Sample Room</td>
                            <td>Sample Instructor</td>
                        </tr>
                        <tr>
                            <td>SampleCourseCode</td>
                            <td>Sample Course Description</td>
                            <td>Lec</td>
                            <td>Lab</td>
                            <td>Sample Days</td>
                            <td>Sample Time</td>
                            <td>Sample Room</td>
                            <td>Sample Instructor</td>
                        </tr>
                        <!-- Add more rows for additional courses -->
                    </tbody>
                </table>
                <div class="agreement">
                    <input type="checkbox" style="accent-color:red">
                    <p> I have read and agree with the <a href="">Condition of Payment</a></p>
                </div>

                    <div>
                    <p>Confirmation
                    I certify that the information submitted in this pre-enrollment/ registration is true and correct to the best of my knowledge.
                    I further understand that any false statements may result in any possible legal actions that be taken against me according to the existing policies and regulations of the School.
                    </p>

                    </div>
                <div class="agreement">
                    <input type="checkbox" style="accent-color:red">
                    <p> I agree and confirm my submission</p>
                </div>
                <div style ="text-align:center">
                <button style="background-color:#750705;border: none;color: white;padding:10px 30px; border-radius: 5px; cursor:pointer">Submit</button>
                </div>
        </div>
</form>
            </div>
            <!-- end of con4 -->


               <!-- start of con5 -->
               <div class="con5" id="con5">
                <div class="profile">

                            <!-- start of con1 -->
                               <div class="center-con con1" id="con1"></div>
                            <!-- end of con1    -->

                    <div class="profile-header">

                        <div>
                            <img src="../../assets/images/mark.jpg" alt="">
                        </div>

                        <div class="qwe">
                            <h1>MARK ELIEZON UGSIMAR ANIÑON</h1>
                            <p><b>SCC-18-0006287</b></p>
                            <br>
                            <p>College: <span> &nbsp College of Information Technology</span></p>
                            <p>Program: <span> &nbsp Bachelor of Science in Information Technology</span></p>
                            <p>Major Study: <span> &nbsp </span></p>
                            <p>Year Level: <span> &nbsp 3rd Year</span></p>
                        </div>

                        <div class="qwe1">
                            <p>[Male, 23]</p>
                            <button>Update Profile<i class='bx bx-edit'></i></button>
                        </div>

                    </div>

                    <div class="personal-info">

                        <p class="info">I. Personal Information</p>
                        <h2>I. PERSONAL INFORMATION</h2><br>
                        <p class="hr"></p>

                                <div class="information">

                                    <div>
                                    <p>Date of Birth: <span> &nbsp December 12, 2000</span></p>
                                    <p>Place of Birth: <span> &nbsp Barili, Cebu</span></p>
                                    <p>Home Address: <span> &nbsp Tungkop, Minglanilla, Cebu</span></p>
                                    <p>Civil Status: <span> &nbsp Single</span></p>
                                    <p>Religion: <span> &nbsp Roman Catholic</span></p>
                                    <p>Email: <span> &nbsp markeliezon12@gmail.com</span></p>
                                    <p>Mobile Phone: <span> &nbsp 09506832654</span></p>
                                    </div>

                                <div>

                     </div>
                     

                        </div>
                    </div>

                </div>
               </div>
               <!-- end of con5  -->


            <!-- start of con6 -->
               <div class="con6" id="con6">
                    <div>
                        <h1>Enrollment is not Available!</h1>
                    </div>
               </div>
            <!-- end of con6 -->

              <!-- start of con7 -->
              <div class="con7" id="con7">
                    <div>
                        <h1>Class Schedule</h1>
                    <table>
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                        </tr>
                        <tr>
                            <td>07:30-08:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td id="sia312"></td>
                        </tr>
                        <tr>
                            <td>08:00-08:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td id="sia312">SIA312</td>
                        </tr>
                        <tr>
                            <td>08:30-09:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td id="sia312">3B</td>
                        </tr>
                        <tr>
                            <td>09:00-09:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td id="sia312" style="color:red">ONLINE</td>
                        </tr>
                        <tr>
                            <td>09:30-10:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td  id="sia312"></td>
                        </tr>
                        <tr>
                            <td>10:00-10:30</td>
                            <td></td>
                            <td id="ias"></td>
                            <td></td>
                            <td></td>
                            <td id="sia"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>10:30-11:00</td>
                            <td></td>
                            <td id="ias">IAS311</td>
                            <td></td>
                            <td></td>
                            <td id="sia">SIA</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>11:00-11:30</td>
                            <td></td>
                            <td id="ias">3B</td>
                            <td></td>
                            <td></td>
                            <td id="sia">3B-F2F</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>11:30-12:00</td>
                            <td></td>
                            <td id="ias"style="color:red">ONLINE</td>
                            <td></td>
                            <td></td>
                            <td id="sia">FIL</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12:00-12:30</td>
                            <td></td>
                            <td id="ias" style=" border-bottom: 1px solid gray"></td>
                            <td></td>
                            <td></td>
                            <td id="sia" style=" border-bottom: 1px solid gray"></td>
                            <td></td>
                        </tr>
                         
                        <tr>
                            <td id="break"><b>LUNCH BREAK</b></td>
                            <td id="break"></td>
                            <td id="break"></td>
                            <td id="break"></td>
                            <td id="break"></td>
                            <td id="break"></td>
                        </tr>
                        
                        <tr>
                            <td>01:00-01:30</td>
                            <td></td>
                            <td id="ms209" style="border-top: 1px solid gray"></td>
                            <td></td>
                            <td id="ms209a" style="border-top: 1px solid gray"></td>
                            <td></td>
                            <td id="pt206" style="border-top: 1px solid gray"></td>
                        </tr>
                        <tr>
                            <td>01:30-02:00</td>
                            <td></td>
                            <td id="ms209">MS209</td>
                            <td></td>
                            <td id="ms209a">MS209</td>
                            <td></td>
                            <td id="pt206">PT206</td>
                        </tr>
                        <tr>
                            <td>02:00-02:30</td>
                            <td></td>
                            <td id="ms209">3B</td>
                            <td></td>
                            <td id="ms209a">3B-F2F</td>
                            <td></td>
                            <td id="pt206">3B <span style="color:red">ONLINE</span></td>
                        </tr>
                        <tr>
                            <td>02:30-03:00</td>
                            <td id="ge9"></td>
                            <td id="ms209" style="color:red">ONLINE</td>
                            <td id="ge9"></td>
                            <td id="ms209a">INDIGO LAB</td>
                            <td></td>
                            <td id="pt206"></td>
                        </tr>
                        <tr>
                            <td>03:00-03:30</td>
                            <td id="ge9" style="color:red">GE9</td>
                            <td id="ms209"></td>
                            <td id="ge9" style="color:red">GE9</td>
                            <td id="ms209a"></td>
                            <td></td>
                            <td id="it308"></td>
                        </tr>
                        <tr>
                            <td>03:30-04:00</td>
                            <td id="ge9"></td>
                            <td id="ias311" style="border-top: 1px solid gray"></td>
                            <td id="ge9"></td>
                            <td></td>
                            <td></td>
                            <td id="it308"></td>
                        </tr>
                        <tr>
                            <td>04:00-04:30</td>
                            <td></td>
                            <td id="ias311">IAS311</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td id="it308"></td>
                        </tr>
                        <tr>
                            <td>04:30-05:00</td>
                            <td></td>
                            <td id="ias311">3B</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td id="it308">IT308</td>
                        </tr>
                        <tr>
                            <td>05:00-05:30</td>
                            <td></td>
                            <td id="ias311">F2F</td>
                            <td id="ws310"></td>
                            <td id="ws310a"></td>
                            <td id="pt206a" style="border-left: 1px solid gray"></td>
                            <td id="it308">3B-F2F</td>
                        </tr>
                        <tr>
                            <td>05:30-06:00</td>
                            <td id="natsci"></td>
                            <td id="ias311"></td>
                            <td id="ws310">WS310</td>
                            <td id="ws310a">WS310</td>
                            <td id="pt206a" style="border-left: 1px solid gray">PT206</td>
                            <td id="it308">BRIGILDO</td>
                        </tr>
                        <tr>
                            <td>06:30-06:30</td>
                            <td id="natsci"></td>
                            <td></td>
                            <td id="ws310">3B <span style="color:red">ONLINE</span></td>
                            <td id="ws310a">3B-F2F</td>
                            <td id="pt206a" style="border-left: 1px solid gray">3B-F2F</td>
                            <td id="it308"></td>
                        </tr>
                        <tr>
                            <td>06:30-07:00</td>
                            <td id="natsci" style="color:red">NATSCI</td>
                            <td></td>
                            <td id="ws310"></td>
                            <td id="ws310a">REX</td>
                            <td id="pt206a" style="border-left: 1px solid gray">DUMANJUG</td>
                            <td id="it308"></td>
                        </tr>
                        <tr>
                            <td>07:00-07:30</td>
                            <td id="natsci"></td>
                            <td></td>
                            <td></td>
                            <td id="ws310a"></td>
                            <td id="pt206a" style="border-left: 1px solid gray"></td>
                            <td id="it308"></td>
                        </tr>
                        <tr>
                            <td>07:30-08:00</td>
                            <td id="natsci"></td>
                            <td></td>
                            <td></td>
                            <td id="ws310a"></td>
                            <td id="pt206a" style="border-left: 1px solid gray"></td>
                            <td id="it308"></td>
                        </tr>
                        <tr>
                            <td>08:00-08:30</td>
                            <td id="natsci" style="border-bottom: 1px solid gray"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    </div>
               </div>
            <!-- end of con7 -->

            <!-- start of con8 -->
            <div class="con8" id="con8">
                <div class="grades">

                <div style="display:flex;align-items:center;gap:20px"> 
                   <select name="" id="">
                        <option value="">1st Year</option>
                        <option value="">2nd Year</option>
                        <option value="">3rd Year</option>
                        <option value="">4th Year</option>
                    </select>

                    <select name="" id="">
                        <option value="">1st Semester</option>
                        <option value="">2st Semester</option>
                    </select>
                    <button style="position:absolute;right:25px;padding:10px 30px">Print</button>
                </div>

                <table>
                        <tr>
                            <th id="course">COURSE</th>
                            <th>PRELIM</th>
                            <th>MIDTERM</th>
                            <th>PREFINAL</th>
                            <th>FINAL</th>
                        </tr>
                        <tr>
                            <td id="course-desc">life and works of rizal & others heroes</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td id="course-desc">college physics</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td id="course-desc">software engineering</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td id="course-desc">quantitative methods</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td id="course-desc">elective 2</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td id="course-desc">information assurance and sec</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td id="course-desc">free elective</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td id="course-desc">project management</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- end of con8 -->

            </div>
            <!-- end of content1 -->

        </div>
    <!-- END OF CENTER -->

   
    <!-- START OF RIGHTBAR -->
   
        <?php include '../../template/right-bar.php' ?>
        
    <!-- END OF RIGHTBAR -->
            
        </div> 
    <!-- END OF CONTAINER -->
   


    <script src="../../script/dashboard.js"></script>
    <script src="../../script/student.js"></script>

</body>
</html>
