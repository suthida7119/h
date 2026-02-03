<?php
    include_once("check_login.php"); // อย่าลืมใส่ .php นะครับ
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - Admin Dashboard</title>
    
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
            background: linear-gradient(180deg, #212529 0%, #343a40 100%);
            color: white;
        }
        .nav-link {
            color: rgba(255,255,255,0.7);
            border-radius: 10px;
            margin: 5px 0;
            transition: 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: #fff;
            background-color: rgba(255,255,255,0.15);
        }
        .nav-link.active {
            background-color: #0d6efd;
        }
        .product-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3 shadow">
            <div class="text-center my-4">
                <i class="bi bi-box-seam text-primary" style="font-size: 2.5rem;"></i>
                <h5 class="mt-2 fw-bold">Inventory System</h5>
                <hr class="bg-light">
            </div>
            
            <div class="mb-4 px-2">
                <p class="text-secondary small mb-1">ผู้ดูแลระบบ:</p>
                <div class="d-flex align-items-center text-info">
                    <i class="bi bi-person-circle me-2"></i>
                    <strong><?php echo $_SESSION['aname']; ?></strong>
                </div>
            </div>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="index2.php" class="nav-link">
                        <i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน
                    </a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class="nav-link active">
                        <i class="bi bi-box-seam-fill me-2"></i> จัดการสินค้า
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
                    <a href="logout.php" class="nav-link text-danger border border-danger">
                        <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-0">จัดการสินค้า</h2>
                    <p class="text-muted small">เพิ่ม แก้ไข และลบรายการสินค้าในระบบ</p>
                </div>
                <button class="btn btn-primary shadow-sm rounded-pill px-4">
                    <i class="bi bi-plus-lg me-2"></i> เพิ่มสินค้าใหม่
                </button>
            </div>

            <div class="row g-3 mb-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="card border-0 shadow-sm p-3">
                        <span class="text-muted small">สินค้าทั้งหมด</span>
                        <h4 class="fw-bold mb-0">45</h4>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 shadow-sm p-3 border-start border-warning border-4">
                        <span class="text-muted small">สต็อกใกล้หมด</span>
                        <h4 class="fw-bold text-warning mb-0">3</h4>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light text-secondary">
                                <tr>
                                    <th class="ps-4 py-3">รูปภาพ</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>หมวดหมู่</th>
                                    <th>ราคา</th>
                                    <th>คงเหลือ</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 py-3">
                                        <img src="https://via.placeholder.com/50" class="product-img shadow-sm" alt="Product">
                                    </td>
                                    <td><span class="fw-bold">สินค้าตัวอย่าง A</span></td>
                                    <td>เสื้อผ้าแฟชั่น</td>
                                    <td class="text-primary fw-bold">290 ฿</td>
                                    <td>12 ชิ้น</td>
                                    <td class="text-center">
                                        <div class="btn-group rounded shadow-sm">
                                            <button class="btn btn-sm btn-white text-warning border-end" title="แก้ไข"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-sm btn-white text-danger" title="ลบ"><i class="bi bi-trash-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        <i class="bi bi-search fs-1 d-block mb-2"></i>
                                        กำลังรอข้อมูลจากฐานข้อมูล...
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