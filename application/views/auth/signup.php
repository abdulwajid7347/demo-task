<?php $this->load->view('layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/auth/signup.css'); ?>">

<form  action="<?= site_url('auth/savedata') ?>" method="post">
    <div class="box">

      <div class="box1">
        <div class="box11">

          <h1>Facebook</h1>
          <p>Facebook helps you connect and share with the people in your life</p>

        </div>
      </div>
      <div class="box2">



        <div class="container-fluid">

          <div class="top1">
            <h2 >Sign Up</h2>
            <h4>It's quick and easy.</h4>
          </div>

          <div class="row">
            <div class="col-50a">
              <input  type="text" id="firstname" name="firstname"   placeholder="First Name" required>
            </div>
            <div class="col-50b">
              <input  type="text" id="lastname" name="lastname"   placeholder="Last name" required>
            </div>
          </div>


          <div class="row">
            <div class="col-30">
              <label for="gender">Gender</label>
            </div>
            <div class="col-35">


              <div class="form-check-inline">
                <label class="form-check-label" for="check1">
                  <input  type="radio" class="form-check-input" id="male" name="gender" value="m" required >male
                </label>
              </div>
            </div>

            <div class="col-35">
              <div class="form-check-inline">
                <label class="form-check-label" for="check2">
                  <input type="radio"  class="form-check-input" id="female" name="gender" value ="f" required >female
                </label>
              </div>
            </div>



          </div>




          <div class="row">
            <div class="col-100">
              <input  type="email" id="email" name="email"   placeholder="Email" required>
            </div>

          </div>

          <div class="row">
            <div class="col-100">
              <input  type="text" id="rollno" name="rollno"   placeholder="Roll Number" required>
            </div>




            <div class="row">
              <div class="col-100">
                <input  type="text" id="Address" name="Address"   placeholder="Address" required>
              </div>
            </div>


            <div class="row">
              <div class="col-100">
                <input  type="text" id="City" name="City"   placeholder="City" required>
              </div>

            </div>

            <div class="row">
              <div class="col-100">
                <input  type="text" id="Country" name="Country"   placeholder="Country" required>
              </div>

            </div>

            <div class="row">
              <div class="col-100">
                <input  type="number" id="Telephonenumber" name="Telephonenumber"   placeholder="Phone number" required>
              </div>

            </div>

            <div class="row">
              <div class="col-100">
                <input  type="date" id="birthday" name="birthday"   placeholder="Date of Birth" required>
              </div>

            </div>


            <div class="row">
              <div class="col-50a">
                <button type="submit" name="submit">Submit </button>
              </div>

            </div>






          </div>



        </div>
      </div>
    </div>

  </form>
<?php $this->load->view('layouts/footer.php'); ?>
