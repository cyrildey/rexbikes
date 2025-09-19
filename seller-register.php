<?php
ob_start();
session_start();
require_once('admin/inc/config.php');
require_once('admin/inc/CSRF_Protect.php');
$csrf = new CSRF_Protect();

$error_message = '';
$success_message = '';

if (isset($_POST['form_register'])) {
    // Mirror customer registration fields
    $full_name   = trim($_POST['cust_name'] ?? '');
    $company     = trim($_POST['cust_cname'] ?? '');
    $email       = trim($_POST['cust_email'] ?? '');
    $phone       = trim($_POST['cust_phone'] ?? '');
    $country_id  = trim($_POST['cust_country'] ?? '');
    $address     = trim($_POST['cust_address'] ?? '');
    $city        = trim($_POST['cust_city'] ?? '');
    $state       = trim($_POST['cust_state'] ?? '');
    $zip         = trim($_POST['cust_zip'] ?? '');
    $password    = $_POST['cust_password'] ?? '';
    $repassword  = $_POST['cust_re_password'] ?? '';

    // Validation similar to registration.php
    if ($full_name === '') {
        $error_message .= 'Full Name can not be empty.<br>';
    }
    if ($email === '') {
        $error_message .= 'Email Address can not be empty.<br>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message .= 'Email address must be valid.<br>';
    } else {
        $st = $pdo->prepare("SELECT 1 FROM tbl_user WHERE email=? LIMIT 1");
        $st->execute([$email]);
        if ($st->rowCount()) {
            $error_message .= 'Email Address Already Exists.<br>';
        }
    }
    if ($phone === '') {
        $error_message .= 'Phone Number can not be empty.<br>';
    }
    if ($address === '') {
        $error_message .= 'Address can not be empty.<br>';
    }
    if ($country_id === '') {
        $error_message .= 'You must have to select a country.<br>';
    }
    if ($city === '') {
        $error_message .= 'City can not be empty.<br>';
    }
    if ($state === '') {
        $error_message .= 'State can not be empty.<br>';
    }
    if ($zip === '') {
        $error_message .= 'Zip Code can not be empty.<br>';
    }
    if ($password === '' || $repassword === '') {
        $error_message .= 'Password can not be empty.<br>';
    } elseif ($password !== $repassword) {
        $error_message .= 'Passwords do not match.<br>';
    }

    if ($error_message === '') {
        // Create seller user (role: Seller)
        $hashed = md5($password); // consistent with admin login
        $photo = 'user-1.png'; // default placeholder
        $st = $pdo->prepare("INSERT INTO tbl_user (full_name,email,phone,password,photo,role,status) VALUES (?,?,?,?,?,?,?)");
        $st->execute([
            strip_tags($full_name),
            strip_tags($email),
            strip_tags($phone),
            $hashed,
            $photo,
            'Seller',
            'Active'
        ]);
        $user_id = $pdo->lastInsertId();

        // Save seller profile details
        $st2 = $pdo->prepare("INSERT INTO tbl_seller_profile (user_id, company_name, country_id, address, city, state, zip) VALUES (?,?,?,?,?,?,?)");
        $st2->execute([
            $user_id,
            strip_tags($company),
            ($country_id !== '' ? (int)$country_id : null),
            strip_tags($address),
            strip_tags($city),
            strip_tags($state),
            strip_tags($zip)
        ]);

        // Auto-login seller and redirect to admin panel (Product Management)
        $stFetch = $pdo->prepare("SELECT * FROM tbl_user WHERE id=?");
        $stFetch->execute([$user_id]);
        $userRow = $stFetch->fetch(PDO::FETCH_ASSOC);
        if ($userRow) {
            $_SESSION['user'] = $userRow;
            header('Location: admin/product.php');
            exit;
        }
        // Fallback: show success message if auto-login fails
        $success_message = 'Registration successful. You can now log in to the admin panel.';
        // Clear POST
        $_POST = [];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seller Registration</title>
  <link rel="stylesheet" href="admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/css/font-awesome.min.css">
  <style>
    body { background: #f7f7f7; }
    .register-box { width: 720px; margin: 40px auto; }
    .panel { box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
  </style>
</head>
<body>

<div class="register-box">
  <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Seller Registration</h3></div>
    <div class="panel-body">
      <?php if($error_message): ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div>
      <?php endif; ?>
      <?php if($success_message): ?>
        <div class="alert alert-success"><?php echo $success_message; ?></div>
      <?php endif; ?>

      <form method="post" action="">
        <?php $csrf->echoInputField(); ?>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Full Name *</label>
              <input type="text" name="cust_name" class="form-control" value="<?php echo htmlspecialchars($_POST['cust_name'] ?? ''); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Company Name</label>
              <input type="text" name="cust_cname" class="form-control" value="<?php echo htmlspecialchars($_POST['cust_cname'] ?? ''); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Email Address *</label>
              <input type="email" name="cust_email" class="form-control" value="<?php echo htmlspecialchars($_POST['cust_email'] ?? ''); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Phone Number *</label>
              <input type="text" name="cust_phone" class="form-control" value="<?php echo htmlspecialchars($_POST['cust_phone'] ?? ''); ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Address *</label>
              <textarea name="cust_address" class="form-control" rows="3"><?php echo htmlspecialchars($_POST['cust_address'] ?? ''); ?></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Country *</label>
              <select name="cust_country" class="form-control">
                <option value="">Select country</option>
                <?php
                $stmtC = $pdo->prepare("SELECT * FROM tbl_country ORDER BY country_name ASC");
                $stmtC->execute();
                $countries = $stmtC->fetchAll(PDO::FETCH_ASSOC);
                $selCountry = $_POST['cust_country'] ?? '';
                foreach ($countries as $c) {
                    $selected = ($selCountry != '' && $selCountry == $c['country_id']) ? 'selected' : '';
                    echo '<option value="'.htmlspecialchars($c['country_id']).'" '.$selected.'>'.htmlspecialchars($c['country_name'])."</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>City *</label>
              <input type="text" name="cust_city" class="form-control" value="<?php echo htmlspecialchars($_POST['cust_city'] ?? ''); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>State *</label>
              <input type="text" name="cust_state" class="form-control" value="<?php echo htmlspecialchars($_POST['cust_state'] ?? ''); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Zip Code *</label>
              <input type="text" name="cust_zip" class="form-control" value="<?php echo htmlspecialchars($_POST['cust_zip'] ?? ''); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Password *</label>
              <input type="password" name="cust_password" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Retype Password *</label>
              <input type="password" name="cust_re_password" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" name="form_register" class="btn btn-primary">Register</button>
          <a class="btn btn-link" href="admin/login.php">Already a seller? Log in</a>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="admin/js/jquery-2.2.3.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
</body>
</html>
