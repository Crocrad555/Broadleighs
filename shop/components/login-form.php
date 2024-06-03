<?php
session_start();
session_unset(); 

require_once './inc/functions.php';

$message = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
$form = ['email' => '', 'password' => ''];
$errors = ['email' => '', 'password' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Validate POST data

    $validation_filters['email']['filter'] = FILTER_VALIDATE_EMAIL;
    $validation_filters['password']['filter'] = FILTER_VALIDATE_REGEXP;
    $validation_filters['password']['options']['regexp'] = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

    $form = filter_input_array(INPUT_POST, $validation_filters);

    //Error messages
    $errors['email'] = $form['email'] ? '' : 'Email is not valid must contain @.';
    $errors['password'] = $form['password'] ? '' : 'Password must have a minimum of 8 characters, at least 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character';

    $invalid = implode($errors);

    if (!$invalid) {
  
      $member = $controllers->members()->login_member($form['email'], $form['password']);

      if (!$member) {
        $message = "User details are incorrect.";
     } else {
         $_SESSION['user'] = $member; 
         redirect('member');
      }

    }
    else {
       $message =  "Please fix the above errors ";
   }

} 
?>

<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <section class="vh-100">
    <div class="container py-5 h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-2">Sign in</h3>
              <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" required <?= htmlspecialchars($form['email']) ?>"/>
                  <span class="text-danger"><?= $errors['email'] ?></span>
                </div>
  
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required value="<?= htmlspecialchars($form['password']) ?>"/>
                  <span class="text-danger"><?= $errors['password'] ?></span>
                </div>
  
              <button class="btn btn-primary btn-lg w-100 mb-4" type="submit">Login</button>
              <a class="btn btn-secondary btn-lg w-100" type="submit" href="./register.php" >Not got an account?</a>
              
              <?php if ($message): ?>
                <div class="alert alert-danger mt-4" role="alert">
                  <?= $message ?? '' ?>
                </div>
              <?php endif ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>