<?php
session_start();
// ตรวจสอบการ Login (เช็คไฟล์สะกดให้ถูก chek_login.php หรือ check_login.php)
include_once("check_login.php"); 
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - Admin System</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f0f2f5; }
        .sidebar { min-height: 100vh; background: #2c3e50; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); padding: 12px 20px; margin: 4px 10px; border-radius: 8px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background: #3498db; color: #fff; }
        .customer-avatar { width: 40px; height: 40px; border-radius: 50%; background: #e9ecef; display: flex; align-items: center; justify-content: center; color: #adb5bd; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0 shadow">
            <div class="p-4 text-center border-bottom border-secondary mb-3">
                <div class="mb-2"><i class="bi bi-people-fill fs-1 text-info"></i></div>
                <h6 class="mb-0 text-white"><?php echo $_SESSION['aname']; ?></h6>
                <small class="text-info">Administrator</small>
            </div>
            <ul class="nav flex-column">
                <a class="nav-link" href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าหลัก</a>
                <a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a class="nav-link active" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 border-secondary">
                <a class="nav-link text-danger font-weight-bold" href="logout.php"><i class="bi bi-power me-2"></i> ออกจากระบบ</a>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">ข้อมูลลูกค้า <span class="badge bg-primary fs-6">ทั้งหมด 120 ท่าน</span></h2>
                <div class="input-group w-25 shadow-sm">
                    <input type="text" class="form-control" placeholder="ค้นหาชื่อลูกค้า...">
                    <button class="btn btn-white border" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <div class="card overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th class="px-4 py-3">ลูกค้า</th>
                                <th>อีเมล / เบอร์โทรศัพท์</th>
                                <th>วันที่สมัคร</th>
                                <th class="text-center">ยอดสั่งซื้อ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="customer-avatar me-3 text-primary bg-primary-subtle font-weight-bold">สม</div>
                                        <div>
                                            <div class="fw-bold">สมชาย รักดี</div>
                                            <small class="text-muted">ID: C-001</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>somchai@email.com</div>
                                    <small class="text-muted">081-234-5678</small>
                                </td>
                                <td>01 ม.ค. 2569</td>
                                <td class="text-center"><span class="badge bg-secondary">12 ออเดอร์</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light border text-primary" title="ดูรายละเอียด"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-light border text-danger" title="ลบชื่อลูกค้า"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="customer-avatar me-3 text-success bg-success-subtle font-weight-bold">มะ</div>
                                        <div>
                                            <div class="fw-bold">มะลิ สวยงาม</div>
                                            <small class="text-muted">ID: C-002</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>mali@email.com</div>
                                    <small class="text-muted">089-999-8888</small>
                                </td>
                                <td>15 ม.ค. 2569</td>
                                <td class="text-center"><span class="badge bg-secondary">3 ออเดอร์</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light border text-primary"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-light border text-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="mt-5 text-center text-muted small">
                © 2026 Admin Panel - สุธิดา นาสีแสน (บุ๊กบิ๊ก)
            </footer>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>