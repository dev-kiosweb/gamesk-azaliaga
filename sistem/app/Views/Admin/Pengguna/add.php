				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				                <div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
									    <h5>Tambah Member</h5>
        								<div class="card shadow mb-4">
											<div class="card-body">
												
												<form action="" method="POST" enctype="multipart/form-data">
													<div class="mb-3">
														<label class="col-form-label">Username</label>
														<input type="text" class="form-control" autocomplete="off" name="username">
													</div>
													<div class="mb-3">
														<label class="col-form-label">Password</label>
														<input type="text" class="form-control" autocomplete="off" name="password">
													</div>
													<div class="mb-3">
														<label class="col-form-label">Saldo</label>
														<input type="number" class="form-control" autocomplete="off" name="balance">
													</div>
													<div class="mb-3">
														<label class="col-form-label">Whatsapp</label>
														<input type="number" class="form-control" autocomplete="off" name="wa">
													</div>
													
													<div class="text-right">
													    <a href="<?= base_url(); ?>/admin/pengguna" class="btn btn-warning float-left">Kembali</a>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>