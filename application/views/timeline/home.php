
<?php $this->load->view('layouts/header.php'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/timeline/homepage.css'); ?>">






<form  action="timeline/addpost" method="post">

                <div class="row">
                  <div class="col-50a">
                    <h1>Hello, <?php echo $this->session->userdata('lastname') ; ?></h1>
                  </div>
                  <div class="col-50b">
                    <button type="button" onclick="window.location='http://local.test.com/index.php/myprofile/showprofile'">MyProfile</button>
                  </div>
              </div>

                <h2>Write new post:</h2>

                <input   name="text" ></input>

                <div class="row">
                    <div class="col-100">
                        <button class="button" type="submit" name="submit"  value="submit" >Submit</button>
                    </div>
                </div>
            </form>
            <h1>Previous posts</h1>
            <?php foreach ($posts as $row) {
                $id = $row['id'];
                $text = $row['text'];
                ?>
                    <div >
                        <input   name="text" value="<?php echo $row['text']?>"></input>
                    </div>
                <?php }?>

                <button type="button" onclick="window.location='http://local.test.com/index.php/auth/logout'"> Logout</button>

                <?php $this->load->view('layouts/footer.php'); ?>
