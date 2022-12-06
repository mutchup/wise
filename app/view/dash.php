<?php use Wise\Core\Application; ?>
<h1><?php echo Application::$app->language->dictionary['Lang_Dash']; ?></h1>

<div class="col-lg-3 col-md-6 col-12">
    <div class="card text-white bg-warning mb-4 shadow">
        <div class="card-body">
            <div class="icon float-end">
                <i class="fas fa-4x fa-balance-scale text-white-50"></i>
            </div>
            <h3 class="card-title fw-bold">
                4
            </h3>
            <p class="card-text fw-bold position-absolute">Majors</p>
        </div>
        <a href="#" class="text-decoration-none card-footer text-center text-white stretched-link">More details</i></a>
    </div>
</div>



<div class="col-lg-3 col-md-6 col-12">
    <div class="card text-white bg-success mb-4 shadow">
        <div class="card-body">
            <div class="icon float-end">
                <i class="fas fa-4x fa-calendar-check text-white-50"></i>
            </div>
            <h3 class="card-title fw-bold">
                4
            </h3>
            <p class="card-text fw-bold position-absolute">Doctors</p>
        </div>
        <a href="#" class="text-decoration-none card-footer text-center text-white">More details</a>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-12">
    <div class="card text-white bg-danger mb-4 shadow">
        <div class="card-body">
            <div class="icon float-end">
                <i class="fas fa-4x fa-hourglass-end text-white-50"></i>
            </div>
            <h3 class="card-title fw-bold">
                50
            </h3>
            <p class="card-text fw-bold position-absolute">Students</p>
        </div>
        <a href="#" class="text-decoration-none card-footer text-center text-white">More details</a>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-12">
    <div class="card text-white bg-info mb-4 shadow">
        <div class="card-body">
            <div class="icon float-end">
                <i class="fas fa-4x fa-users text-white-50"></i>
            </div>
            <h3 class="card-title fw-bold">
                10
            </h3>
            <p class="card-text fw-bold position-absolute">Block</p>
        </div>
        <a href="#" class="text-decoration-none card-footer text-center text-white">More details</a>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            Last 5 Marks added
        </div>
        <div class="card-body p-0">
            <table class="table my-0">
                <thead>
                <tr>
                    <th scope="col">Doctor</th>
                    <th scope="col">Class</th>
                    <th scope="col">Div</th>
                    <th scope="col">Student</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">
                        <img src="<?php echo IMG; ?>Dr-Waleed.jpg" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Waleed Amin
                    </th>
                    <td>Project</td>
                    <td>2</td>
                    <td>
                        <img src="<?php echo IMG; ?>Student.png" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Mohammad AbuDayeh
                    </td>
                    <td>88</td>
                    <td>2022/11/11</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="<?php echo IMG; ?>Dr-Waleed.jpg" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Waleed Amin
                    </th>
                    <td>Project</td>
                    <td>2</td>
                    <td>
                        <img src="<?php echo IMG; ?>Student.png" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Rashid Safadi
                    </td>
                    <td>88</td>
                    <td>2022/11/11</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="<?php echo IMG; ?>Dr-Waleed.jpg" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Waleed Amin
                    </th>
                    <td>Project</td>
                    <td>2</td>
                    <td>
                        <img src="<?php echo IMG; ?>Student.png" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Alaa Shalaby
                    </td>
                    <td>88</td>
                    <td>2022/11/11</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="<?php echo IMG; ?>Dr-Waleed.jpg" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Waleed Amin
                    </th>
                    <td>Project</td>
                    <td>2</td>
                    <td>
                        <img src="<?php echo IMG; ?>Student.png" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Suhaib Al-Ktut
                    </td>
                    <td>88</td>
                    <td>2022/11/11</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="http://localhost:8080/style/image/Dr-Waleed.jpg" class="rounded-circle me-2" alt="..." width="23" height="23">
                        Waleed Amin
                    </th>
                    <td>Project</td>
                    <td>2</td>
                    <td>
                        <img src="http://localhost:8080/style/image/Student.png" class="rounded-circle me-2" alt="..." width="23" height="23">
                        .....
                    </td>
                    <td>88</td>
                    <td>2022/11/11</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>