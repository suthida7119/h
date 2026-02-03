<?php
    include_once("check_login.php");
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - Admin Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #212529;
            color: white;
        }
        .nav-link {
            color: rgba(255,255,255,0.7);
            border-radius: 8px;
            margin-bottom: 5px;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #fff;
            background-color: rgba(255,255,255,0.1);
        }
        .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }
        .badge-status {
            font-weight: 500;
            padding: 0.5em 0.8em;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3 shadow">
            <div class="d-flex align-items-center mb-4 px-2">
                <i class="bi bi-shield-check fs-2 text-primary me-2"></i>
                <span class="fs-5 fw-bold">Admin Manager</span>
            </div>
            <hr>
            <div class="mb-4 px-2">
                <small class="text-secondary d-block">ยินดีต้อนรับ</small>
                <span class="text-info"><i class="bi bi-person-circle me-1"></i> <?php echo $_SESSION['aname']; ?></span>
            </div>
            
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="index2.php" class="nav-link">
                        <i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน
                    </a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class="nav-link">
                        <i class="bi bi-box-seam me-2"></i> จัดการสินค้า
                    </a>
                </li>
                <li class="nav-item">
                    <a href="orders.php" class="nav-link active">
                        <i class="bi bi-cart-check me-2"></i> จัดการออเดอร์
                    </a>
                </li>
                <li class="nav-item">
                    <a href="customers.php" class="nav-link">
                        <i class="bi bi-people me-2"></i> จัดการลูกค้า
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a href="logout.php" class="nav-link text-danger border border-danger">
                        <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index2.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">จัดการออเดอร์</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold m-0 text-dark">รายการสั่งซื้อสินค้า</h2>
                <div class="btn-group">
                    <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> Export</button>
                    <button class="btn btn-primary btn-sm"><i class="bi bi-printer"></i> พิมพ์รายงาน</button>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">รหัสออเดอร์</th>
                                    <th>ลูกค้า</th>
                                    <th>วันที่สั่งซื้อ</th>
                                    <th>ยอดรวม</th>
                                    <th>สถานะ</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 fw-bold">#ORD-1025</td>
                                    <td>คุณสมชาย ใจดี</td>
                                    <td>03/02/2026</td>
                                    <td>1,250.00 ฿</td>
                                    <td><span class="badge bg-warning-subtle text-warning badge-status">รอดำเนินการ</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info text-white"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        <i class="bi bi-cart-x fs-1 d-block mb-2"></i>
                                        ไม่พบรายการคำสั่งซื้อใหม่
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>