<?php
session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login : สุธิดา นาสีแสน (บุ๊กบิ๊ก)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }
        .card-header {
            background: #fff;
            border-bottom: none;
            padding: 30px 20px 10px;
            text-align: center;
        }
        .login-icon {
            font-size: 3rem;
            color: #764ba2;
        }
        .btn-primary {
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }
        .form-control:focus {
            border-color: #764ba2;
            box-shadow: 0 0 0 0.25 red rgba(118, 75, 162, 0.25);
        }
    </style>
</head>
<body>

<div class="container p-3">
    <div class="card login-card mx-auto">
        <div class="card-header">
            <div class="login-icon mb-2">
                <i class="bi bi-person-circle"></i>
            </div>
            <h4 class="fw-bold text-secondary">เข้าสู่ระบบหลังบ้าน</h4>
            <p class="text-muted small">สุธิดา นาสีแสน (บุ๊กบิ๊ก)</p>
        </div>
        
        <div class="card-body p-4">
            <form method="post" action="">
                <div class="form-floating mb-3">
                    <input type="text" name="auser" class="form-control" id="floatingInput" placeholder="Username" required autofocus>
                    <label for="floatingInput"><i class="bi bi-person me-2"></i>Username</label>
                </div>
                
                <div class="form-floating mb-4">
                    <input type="password" name="apwd" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword"><i class="bi bi-key me-2"></i>Password</label>
                </div>

                <button type="submit" name="Submit" class="btn btn-primary w-100 mb-3">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Login
                </button>
            </form>

            <?php
            if (isset($_POST['Submit'])) {
                include_once("connectdb.php");
                $user_input = $_POST['auser'];
                $pass_input = $_POST['apwd'];

                $stmt = $conn->prepare("SELECT a_id, a_name, a_password FROM admin WHERE a_username = ?");
                $stmt->bind_param("s", $user_input);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $data = $result->fetch_assoc();
                    if (password_verify($pass_input, $data['a_password'])) {
                        $_SESSION['aid'] = $data['a_id'];
                        $_SESSION['aname'] = $data['a_name'];
                        echo "<div class='alert alert-success text-center'>สำเร็จ! กำลังเปลี่ยนหน้า...</div>";
                        echo "<script>setTimeout(function(){ window.location='index2.php'; }, 1500);</script>";
                    } else {
                        echo "<div class='alert alert-danger text-center'>รหัสผ่านไม่ถูกต้อง</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger text-center'>ไม่พบชื่อผู้ใช้งานนี้</div>";
                }
                $stmt->close();
            }
            ?>
        </div>
        <div class="card-footer bg-light border-0 py-3 text-center">
            <small class="text-muted">&copy; 2024 All Rights Reserved</small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>