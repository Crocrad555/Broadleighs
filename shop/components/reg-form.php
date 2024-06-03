<?php
  
  require_once './inc/functions.php';

  $error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
  $form = ['fname' => '', 'sname' => '', 'email' => '', 'password' => '', 'password-v' => ''];
  $errors = ['fname' => '', 'sname' => '', 'email' => '', 'password' => '', 'password-v' => ''];

  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    //Validate Data
    $validation_filters['fname']['filter'] = FILTER_VALIDATE_REGEXP;
    $validation_filters['fname']['options']['regexp'] = '/^[a-zA-Z]+([_ -]?[a-zA-Z])*$/';

    $validation_filters['sname']['filter'] = FILTER_VALIDATE_REGEXP;
    $validation_filters['sname']['options']['regexp'] = '/^[a-zA-Z]+([_ -]?[a-zA-Z])*$/';
    $validation_filters['email']['filter'] = FILTER_VALIDATE_EMAIL;
    $validation_filters['password']['filter'] = FILTER_VALIDATE_REGEXP;
    $validation_filters['password']['options']['regexp'] = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    $validation_filters['password-v']['filter'] = FILTER_VALIDATE_REGEXP;
    $validation_filters['password-v']['options']['regexp'] = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

    $form = filter_input_array(INPUT_POST, $validation_filters);

    $errors['fname'] = $form['fname'] ? '' : 'Firstname must contain A - z letters only.';
    $errors['sname'] = $form['sname'] ? '' : 'Surname must contain A - z letters only.';
    $errors['email'] = $form['email'] ? '' : 'Email is invalid. Must contain @ and domain.';
    $errors['password'] = $form['password'] ? '' : 'Password must have a minimum of 8 characters which includes 1 uppercase, 1 lowercase, 1 number and 1 special character.';
    $errors['password-v'] = $form['password'] == $form['password-v'] ? '' : 'Passwords do not match.';

    $invalid = implode($errors);
    $error = !$invalid ? "Valid" : "Please fix the following:";

    if (!$invalid)
    {

      $args = ['firstname' => $form['fname'],
               'lastname' => $form['sname'],
               'email' => $form['email'],
               'password' => password_hash($form['password'], PASSWORD_DEFAULT)];

      $member = $controllers->members()->register_member($args);
      echo $member;
      if ($member) {
        //redirect("login", ["error" => "Please login with your new account"]);
      } else {
        $error = "Email already registered.";
      }
      
    }

  }
?>
<form method="post" action=" <?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <section class="vh-100">
    <div class="container py-5 h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-2">Register</h3>
              <div class="form-outline mb-4">
                <input required type="text" id="fname" name="fname" class="form-control form-control-lg" placeholder="Firstname" value="<?= htmlspecialchars($form['fname']) ?>"/>
                <small class="text-danger"><?= htmlspecialchars($errors['fname']) ?></small>
              </div>

              <div class="form-outline mb-4">
                <input required type="text" id="sname" name="sname" class="form-control form-control-lg" placeholder="Surname" value="<?= htmlspecialchars($form['sname']) ?>"/>
                <small class="text-danger"><?= htmlspecialchars($errors['sname']) ?></small>
              </div>


              <div class="form-outline mb-4">
                <input required type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" value="<?= htmlspecialchars($form['email']) ?>" />
                <small class="text-danger"><?= htmlspecialchars($errors['email']) ?></small>
              </div>

              <div class="form-outline mb-4">
                <input required type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" value="<?= htmlspecialchars($form['password']) ?>"/>
                <small class="text-danger"><?= htmlspecialchars($errors['password']) ?></small>
              </div>
              
              <div class="form-outline mb-4">
                <input required type="password" id="password-v" name="password-v" class="form-control form-control-lg" placeholder="Password again" value="<?= htmlspecialchars($form['password-v']) ?>"/>
                <small class="text-danger"><?= htmlspecialchars($errors['password-v']) ?></small>
              </div>

              <button class="btn btn-primary btn-lg w-100 mb-4" type="submit">Register</button>
              <a class="btn btn-secondary btn-lg w-100" type="submit" href="./login.php" >Already got an account?</a>

              <?php if ($error): ?>
                <div class="alert alert-danger mt-4">
                  <?= $error ?? '' ?>
                </div>
              <?php endif ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>