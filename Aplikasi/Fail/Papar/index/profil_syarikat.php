<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profil Syarikat</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
	<!-- Header dengan Logo -->
	<nav class="navbar navbar-light bg-light border-bottom">
		<div class="container">
			<a class="navbar-brand d-flex align-items-center" href="#">
				<svg width="50" height="50" class="me-2">
					<circle cx="25" cy="25" r="20" fill="#198754"/>
					<text x="25" y="32" text-anchor="middle" fill="white" font-size="20" font-weight="bold">S</text>
				</svg>
				<span class="fw-bold text-success">Portal Syarikat</span>
			</a>
		</div>
	</nav>

	<!-- Tabs untuk Pilihan Syarikat -->
	<div class="container mt-4">
		<ul class="nav nav-tabs nav-fill" id="companyTabs" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="company1-tab" data-bs-toggle="tab" data-bs-target="#company1" type="button" role="tab" aria-controls="company1" aria-selected="true">
					<i class="bi bi-building me-2"></i>Tanjung Ledang Teknologi
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="company2-tab" data-bs-toggle="tab" data-bs-target="#company2" type="button" role="tab" aria-controls="company2" aria-selected="false">
					<i class="bi bi-building me-2"></i>7 ADA SOLUTION
				</button>
			</li>
		</ul>

		<div class="tab-content" id="companyTabContent">
			<!-- Syarikat 1 -->
			<div class="tab-pane fade show active" id="company1" role="tabpanel" aria-labelledby="company1-tab">
				<div class="container py-4">
					<!-- Hero Section -->
					<div class="card bg-success text-white mb-4">
						<div class="card-body p-5">
							<h1 class="display-5 fw-bold mb-3">Profil Syarikat 1</h1>
							<div class="mb-4">
								<p class="mb-2"><strong>Nombor SSM Baharu: 201103130450</strong> <span class="ms-2">-</span></p>
								<p class="mb-2"><strong>Nombor SSM Lama: JR0023530-D </strong> <span class="ms-2">-</span></p>
								<p class="mb-2"><strong>Nama Syarikat: TANJUNG LEDANG TEKNOLOGI(201103130450)(JR0023530-D) </strong> <span class="ms-2">-</span></p>
							</div>
							<h4 class="fst-italic border-start border-4 border-warning ps-3">
								"Mengubah Ilham Menjadi Kenyataan"
							</h4>
						</div>
					</div>

					<!-- Keterangan Perniagaan -->
					<h2 class="fw-bold mb-4 text-success border-bottom border-success pb-2">Keterangan Perniagaan</h2>
					
					<div class="row g-4 mb-4">
						<!-- Jualan Runcit -->
						<div class="col-md-6">
							<div class="card h-100 border-success">
								<div class="card-header bg-success text-white">
									<h5 class="mb-0"><i class="bi bi-cart-check me-2"></i>Jualan Runcit</h5>
								</div>
								<div class="card-body">
									<p class="text-muted">Kami menjalankan perniagaan jualan runcit, terutamanya melalui platform dalam talian, merangkumi:</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Komputer, peralatan dan aksesori komputer</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Perisian dan aplikasi mudah alih</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Peralatan telekomunikasi dan elektronik</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Buku dan alat tulis</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Produk bakeri dan konfeksi, termasuk kuih tradisional dan kuih raya</li>
									</ul>
								</div>
							</div>
						</div>
						
						<!-- Perkhidmatan -->
						<div class="col-md-6">
							<div class="card h-100 border-success">
								<div class="card-header bg-success text-white">
									<h5 class="mb-0"><i class="bi bi-gear-fill me-2"></i>Perkhidmatan</h5>
								</div>
								<div class="card-body">
									<p class="text-muted mb-3">Selain itu, kami menyediakan pelbagai perkhidmatan, termasuk:</p>
									<div class="list-group list-group-flush">
										<div class="list-group-item">
											<i class="bi bi-code-slash text-success me-2"></i>
											Pengaturcaraan komputer dan pembangunan aplikasi mudah alih
										</div>
										<div class="list-group-item">
											<i class="bi bi-book text-success me-2"></i>
											Latihan komputer
										</div>
										<div class="list-group-item">
											<i class="bi bi-lightbulb text-success me-2"></i>
											Penyelidikan dan pembangunan dalam teknologi maklumat dan komunikasi (TMK)
										</div>
										<div class="list-group-item">
											<i class="bi bi-chat-dots text-success me-2"></i>
											Khidmat nasihat pembangunan aplikasi dan penyelesaian perisian
										</div>
										<div class="list-group-item">
											<i class="bi bi-pen text-success me-2"></i>
											Penulisan bebas untuk pelbagai industri, dengan penggunaan teknologi seperti kecerdasan buatan (KB) dan automasi
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Hubungi Kami -->
					<h2 class="fw-bold mb-4 text-success border-bottom border-success pb-2">Hubungi Kami</h2>
					<div class="card bg-success text-white">
						<div class="card-body p-4">
							<div class="row g-4">
								<div class="col-md-4">
									<div class="d-flex align-items-start">
										<i class="bi bi-telephone-fill fs-3 me-3"></i>
										<div>
											<h6 class="fw-bold">Nombor Telefon Perniagaan</h6>
											<p class="mb-0">- 0122159410</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="d-flex align-items-start">
										<i class="bi bi-whatsapp fs-3 me-3"></i>
										<div>
											<h6 class="fw-bold">Nombor Telefon WhatsApp</h6>
											<p class="mb-0">- 01131944456</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="d-flex align-items-start">
										<i class="bi bi-bank fs-3 me-3"></i>
										<div>
											<h6 class="fw-bold">Nama Akaun Bank</h6>
											<p class="mb-0">- Maybank</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Syarikat 2 -->
			<div class="tab-pane fade" id="company2" role="tabpanel" aria-labelledby="company2-tab">
				<div class="container py-4">
					<!-- Hero Section -->
					<div class="card bg-success text-white mb-4">
						<div class="card-body p-5">
							<h1 class="display-5 fw-bold mb-3">Profil Syarikat 2</h1>
							<div class="mb-4">
								<p class="mb-2"><strong>Nombor SSM Baharu: 202503077808</strong> <span class="ms-2">-</span></p>
								<p class="mb-2"><strong>Nombor SSM Lama: 03711013-A</strong> <span class="ms-2">-</span></p>
								<p class="mb-2"><strong>Nama Syarikat: 7 ADA SOLUTION(202503077808)(03711013-A)</strong> <span class="ms-2">-</span></p>
							</div>
							<h4 class="fst-italic border-start border-4 border-warning ps-3">
								"Mengubah Ilham Menjadi Kenyataan"
							</h4>
						</div>
					</div>

					<!-- Keterangan Perniagaan -->
					<h2 class="fw-bold mb-4 text-success border-bottom border-success pb-2">Keterangan Perniagaan</h2>
					
					<div class="row g-4 mb-4">
						<!-- Jualan Runcit -->
						<div class="col-md-6">
							<div class="card h-100 border-success">
								<div class="card-header bg-success text-white">
									<h5 class="mb-0"><i class="bi bi-cart-check me-2"></i>Jualan Runcit</h5>
								</div>
								<div class="card-body">
									<p class="text-muted">Kami menjalankan perniagaan jualan runcit, terutamanya melalui platform dalam talian, merangkumi:</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Komputer, peralatan dan aksesori komputer</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Perisian dan aplikasi mudah alih</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Peralatan telekomunikasi dan elektronik</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Buku dan alat tulis</li>
										<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Produk bakeri dan konfeksi, termasuk kuih tradisional dan kuih raya</li>
									</ul>
								</div>
							</div>
						</div>
						
						<!-- Perkhidmatan -->
						<div class="col-md-6">
							<div class="card h-100 border-success">
								<div class="card-header bg-success text-white">
									<h5 class="mb-0"><i class="bi bi-gear-fill me-2"></i>Perkhidmatan</h5>
								</div>
								<div class="card-body">
									<p class="text-muted mb-3">Selain itu, kami menyediakan pelbagai perkhidmatan, termasuk:</p>
									<div class="list-group list-group-flush">
										<div class="list-group-item">
											<i class="bi bi-code-slash text-success me-2"></i>
											Pengaturcaraan komputer dan pembangunan aplikasi mudah alih
										</div>
										<div class="list-group-item">
											<i class="bi bi-book text-success me-2"></i>
											Latihan komputer
										</div>
										<div class="list-group-item">
											<i class="bi bi-lightbulb text-success me-2"></i>
											Penyelidikan dan pembangunan dalam teknologi maklumat dan komunikasi (TMK)
										</div>
										<div class="list-group-item">
											<i class="bi bi-chat-dots text-success me-2"></i>
											Khidmat nasihat pembangunan aplikasi dan penyelesaian perisian
										</div>
										<div class="list-group-item">
											<i class="bi bi-pen text-success me-2"></i>
											Penulisan bebas untuk pelbagai industri, dengan penggunaan teknologi seperti kecerdasan buatan (KB) dan automasi
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Hubungi Kami -->
					<h2 class="fw-bold mb-4 text-success border-bottom border-success pb-2">Hubungi Kami</h2>
					<div class="card bg-success text-white">
						<div class="card-body p-4">
							<div class="row g-4">
								<div class="col-md-4">
									<div class="d-flex align-items-start">
										<i class="bi bi-telephone-fill fs-3 me-3"></i>
										<div>
											<h6 class="fw-bold">Nombor Telefon Perniagaan</h6>
											<p class="mb-0">- 0122159410</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="d-flex align-items-start">
										<i class="bi bi-whatsapp fs-3 me-3"></i>
										<div>
											<h6 class="fw-bold">Nombor Telefon WhatsApp</h6>
											<p class="mb-0">- 01131944456</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="d-flex align-items-start">
										<i class="bi bi-bank fs-3 me-3"></i>
										<div>
											<h6 class="fw-bold">Nama Akaun Bank Muamalat</h6>
											<p class="mb-0">-</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Footer
=============================================================================================== -->
	<!-- Footer -->
	<footer class="bg-success text-white text-center py-4 mt-5">
		<div class="container">
			<p class="mb-0">&copy; <span id="year"></span> Hak Cipta Terpelihara</p>
		</div>
	</footer>
<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
	document.getElementById('year').textContent = new Date().getFullYear();
</script>
<!-- nota kaki
=============================================================================================== -->
</body>
</html>