<?php $this->load->view('layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/auth/login.css'); ?>">

<div class="box">
    <div class="box1">
        <div class="box11">
            <h1>Facebook</h1>
            <p>Facebook helps you connect and share with the people in your life</p>
        </div>
    </div>

<div class="box2">
    <div class="container-fluid">

        <form action="<?= site_url('auth/login') ?>" method="post">
            <div class="top1">
                <h1>Log in to Facebook</h1>
            </div>

            <div class="row">
                <div class="col-100">
                    <input  type="email" id="email" name="email"   placeholder="Email">
                </div>

            </div>

            <div class="row">
                <div class="col-100">
                    <input  type="text" id="rollno" name="rollno"   placeholder="RollNo">
                </div>
            </div>


            <div class="row">
                <div class="col-100">
                    <button class="button" type="submit"  >Login</button>
                </div>

            </div>

        </form>


        <div class="row">
            <div class="col-100">
                <button class="button" type="button" onclick="window.location='http://local.test.com/index.php/auth/signup'" >Sign Up</button>
            </div>

        </div>
    </div>
</div>

</div>


<?php $this->load->view('layouts/footer.php'); ?>
