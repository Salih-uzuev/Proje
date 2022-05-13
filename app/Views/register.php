<div class="container">
  <div class="row">
    <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Kayıt Ol</h3>
        <hr>
        <form class="" action="/register" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
              <label for="firstname">Adı</label>
              <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
              </div>

            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
              <label for="lastname">Soyadı</label>
              <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
              </div>

            </div>

            <div class="form-group">
                        <label>Gender</label>
                        <br>
                      <input type="radio" name="gender" value="Male"> Male
                      <br>
                      <input type="radio" name="gender" value="Famale"> Famale
                    </div>
                    </div>

                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                      <label for="lastname">Doğum Tarihi</label>
                      <input type="date" class="form-control" name="date" >
                      </div>



            <div class="col-12">

          <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
          </div>
          </div>

          <div class="col-12 col-sm-6">

          <div class="form-group">
          <label for="password">Şifre</label>
          <input style = "width:295px;" type="password" class="form-control" name="password" id="password" value="">
        </div>
      </div>

    </div>

    <div class="form-group">
    <label for="password_confirm">Şifre Tekrar</label>
    <input type="password" style = "width:295px;" class="form-control" name="password_confirm" id="password_confirm" value="">
  </div>
  <?php if (isset($validation)): ?>
    <div class="col-12">
      <div class="alert alert-danger" role="alert">
        <?= $validation->listErrors() ?>

      </div>

    </div>
  <?php endif; ?>
</div>


        <div class="row">

          <div class="col-12 col-sm-4">
            <br>
            <button type="submit" class="btn btn-primary" style="position:relative; left:25px; top:2px;" >Kayıt Ol </button>

          </div>
          <div class="col-12 col-sm-8 text-left">
            <a href="/">Hesabınız Var mı ?</a>

          </div>

        </div>
        </form>

      </div>

    </div>

  </div>

</div>
