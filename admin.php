<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="./admin.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
   <input type="checkbox" name="" id="sidebar-toggle">
   <div class="sidebar">
      <div class="sidebar-header">
         <h3 class="brand">
            <!-- <i class="fa-brands fa-squarespace"></i> -->
            <span>Hey Admin</span>
         </h3>
         <label for="sidebar-toggle" class=""><i class="fa fa-list"></i></label>
      </div>

      <div class="sidebar-menu">
         <ul>
            <li><a href="./main.php"><i class="fa-solid fa-house"></i> <span>Home</span></a></li>
            <li><a href=""><i class="fa-solid fa-people-group"></i> <span>Team</span></a></li>
            <li><a href=""><i class="fa fa-list-alt"></i> <span>Tasks</span></a></li>
            <li><a href=""><i class="fa fa-list"></i> <span>Projects</span></a></li>
            <li><a href=""><i class="fa-regular fa-address-book"></i> <span>Contacts</span></a></li>
            <li><a href=""><i class="fa fa-user"></i> <span>Accounts</span></a></li>
         </ul>
      </div>
   </div>

   <div class="main-content">
      <header>
         <div class="search-wrapper">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Search">
         </div>

         <div class="social-icons">
            <div class="add-items">
               <a href="./admin_page.php">Add Items</a>
            </div>
            <i class="fa-solid fa-bell"></i>
            <i class="fa-regular fa-comment"></i>
            <div class="admin-profile"></div>
         </div>
      </header>

      <main>
         <h2 class="dash-title">Overview</h2>
         <div class="dash-cards">
            <div class="card-single">
               <div class="card-body">
                  <i class="fa-solid fa-briefcase"></i>
                  <div>
                     <h5>Account Balance</h5>
                     <h4>$30,659.45</h4>
                  </div>
               </div>
               <div class="card-footer">
                  <a href="">View all</a>
               </div>
            </div>

            <div class="card-single">
               <div class="card-body">
                  <i class="fa-solid fa-repeat"></i>
                  <div>
                     <h5>Pending</h5>
                     <h4>$19,500.45</h4>
                  </div>
               </div>
               <div class="card-footer">
                  <a href="">View all</a>
               </div>
            </div>

            <div class="card-single">
               <div class="card-body">
                  <i class="fa-solid fa-check-to-slot"></i>
                  <div>
                     <h5>Processed</h5>
                     <h4>$20,500.00</h4>
                  </div>
               </div>
               <div class="card-footer">
                  <a href="">View all</a>
               </div>
            </div>
         </div>

         <section class="recent">
            <div class="activity-grid">
               <div class="activity-card">
                  <h3>Recent activity</h3>
                  
                  <div class="table-responsive">
                     <table>
                        <thead>
                           <tr>
                              <th>Project</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Team</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>App Development</td>
                              <td>15 Aug, 2023</td>
                              <td>22 Aug, 2023</td>
                              <td class="td-team">
                                 <div class="img-1"></div>
                                 <div class="img-2"></div>
                                 <div class="img-3"></div>
                              </td>
                              <td>
                                 <span class="badge success">Success</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Front-end Design</td>
                              <td>15 Aug, 2023</td>
                              <td>22 Aug, 2023</td>
                              <td class="td-team">
                                 <div class="img-1"></div>
                                 <div class="img-2"></div>
                                 <div class="img-3"></div>
                              </td>
                              <td>
                                 <span class="badge warning">Processing</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Logo Design</td>
                              <td>15 Aug, 2023</td>
                              <td>22 Aug, 2023</td>
                              <td class="td-team">
                                 <div class="img-1"></div>
                                 <div class="img-2"></div>
                                 <div class="img-3"></div>
                              </td>
                              <td>
                                 <span class="badge success">Success</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Server Setup</td>
                              <td>15 Aug, 2023</td>
                              <td>22 Aug, 2023</td>
                              <td class="td-team">
                                 <div class="img-1"></div>
                                 <div class="img-2"></div>
                                 <div class="img-3"></div>
                              </td>
                              <td>
                                 <span class="badge warning">Processing</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Web Design</td>
                              <td>15 Aug, 2023</td>
                              <td>22 Aug, 2023</td>
                              <td class="td-team">
                                 <div class="img-1"></div>
                                 <div class="img-2"></div>
                                 <div class="img-3"></div>
                              </td>
                              <td>
                                 <span class="badge success">Success</span>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="summary">
                  <div class="summary-card">
                     <div class="summary-single">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <div>
                           <h5>196</h5>
                           <small>Number of staff</small>
                        </div>
                     </div>
                     <div class="summary-single">
                        <i class="fa-regular fa-calendar"></i>
                        <div>
                           <h5>16</h5>
                           <small>Number of Leaves</small>
                        </div>
                     </div>
                     <div class="summary-single">
                        <i class="fa-regular fa-face-smile"></i>
                        <div>
                           <h5>12</h5>
                           <small>Profile update request</small>
                        </div>
                     </div>
                  </div>

                  <div class="bday-card">
                     <div class="bday-flex">
                        <div class="bday-img"></div>
                        <div class="bday-info">
                           <h5>Ramindu Nimesh</h5>
                           <small>Birthday Today</small>
                        </div>
                     </div>
                     <div class="text-center">
                        <button><i class="fa-solid fa-gift"></i> Wish Him</button>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
   </div>
</body>
</html>