<?php
    session_start();
    // ตรวจสอบเบื้องต้นว่าถ้าไม่มี Session ให้เด้งกลับไปหน้า Login (ป้องกันการแอบเข้าผ่าน URL)
    if (!isset($_SESSION['aid'])) {
        header("Location: login.php");
        exit();
    }
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลักแอดมิน - Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f7f6;
        }
        .sidebar {
            min-height: 100vh;
            background: #2c3e50;
            color: white;
        }
        .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        .nav-link.active {
            background: #3498db;
        }
        .stat-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .icon-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3 shadow">
            <div class="text-center my-4">
                <div class="bg-light rounded-circle d-inline-block p-3 mb-2">
                    <i class="bi bi-person-badge text-dark fs-2"></i>
                </div>
                <h6 class="mb-0">Admin Panel</h6>
                <small class="text-info"><?php echo $_SESSION['aname']; ?></small>
            </div>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="index2.php" class="nav-link active">
                        <i class="bi bi-house-door me-2"></i> หน้าหลักแอดมิน
                    </a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class="nav-link">
                        <i class="bi bi-box-seam me-2"></i> จัดการสินค้า
                    </a>
                </li>
                <li class="nav-item">
                    <a href="orders.php" class="nav-link">
                        <i class="bi bi-cart-check me-2"></i> จัดการออเดอร์
                    </a>
                </li>
                <li class="nav-item">
                    <a href="customers.php" class="nav-link">
                        <i class="bi bi-people me-2"></i> จัดการลูกค้า
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a href="logout.php" class="nav-link text-warning border border-warning">
                        <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2">แผงควบคุมระบบ (Dashboard)</h1>
                <div class="text-muted">
                    ยินดีต้อนรับคุณ, <strong><?php echo $_SESSION['aname']; ?></strong>
                </div>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm h-100 p-3 bg-white text-dark">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted small uppercase">สินค้าทั้งหมด</h6>
                                <h3 class="fw-bold mb-0">124</h3>
                            </div>
                            <div class="icon-circle bg-primary-subtle text-primary">
                                <i class="bi bi-box-seam"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm h-100 p-3 bg-white text-dark">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted small uppercase">ออเดอร์ใหม่</h6>
                                <h3 class="fw-bold mb-0">15</h3>
                            </div>
                            <div class="icon-circle bg-success-subtle text-success">
                                <i class="bi bi-cart-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm h-100 p-3 bg-white text-dark">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted small uppercase">ลูกค้า</h6>
                                <h3 class="fw-bold mb-0">890</h3>
                            </div>
                            <div class="icon-circle bg-info-subtle text-info">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm p-5 text-center bg-white rounded-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/1053/1053210.png" width="100" class="mb-4 mx-auto opacity-75">
                        <h2 class="fw-bold">ยินดีต้อนรับสู่ระบบบริหารจัดการ</h2>
                        <p class="text-muted fs-5">เลือกเมนูด้านซ้ายเพื่อเริ่มต้นการจัดการข้อมูลในส่วนต่างๆ</p>
                    </div>
                </div>
            </div>
            
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>