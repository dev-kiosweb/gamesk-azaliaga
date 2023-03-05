			<?php $this->extend('template'); ?>
			
			<?php $this->section('css'); ?>
			<?php $this->endSection(); ?>
			
			<?php $this->section('content'); ?>
			<div class="content" style="min-height: 600px;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="mb-3">
										<img src="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>" alt=""  width="40">
									</div>
									<h4 class="login fw-bold" style="font-size: calc(1.2875rem + 0.45vw);">Selamat Datang Admin</h4>
									<p class="text-muted mb-3">Silahkan login dengan akun kamu</p>
									<?= alert(); ?>
									<form action="" method="POST">
										<div class="form-group">
											<label>Username</label>
											<input type="text" class="form-control" autocomplete="off" placeholder="Masukan Username" name="username">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" name="password">
										</div>
										<button class="btn btn-primary btn-block" type="submit" name="tombol" value="submit">Login Sekarang</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->endSection(); ?>
			
			<?php $this->section('js'); ?>
			<?php $this->endSection(); ?>