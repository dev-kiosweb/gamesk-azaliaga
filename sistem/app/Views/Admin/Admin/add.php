				<?php $this->extend('admin'); ?>
				
				<?php $this->section('content'); ?>
				<div class="content">

								<div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
										    <div class="card shadow mb-4">
        								    <div class="card-header py-3">
                                            	<h5>Tambah Admin</h5>
                                            <div class="card-tools">
        									</div>
                                            </div>
											<div class="card-body">
												
												<form action="" method="POST">
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Username</label>
															<input type="text" class="form-control" autocomplete="off" name="username">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Password</label>
															<input type="text" class="form-control" autocomplete="off" name="password">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Akses</label>
														    <?php foreach(['Konfigurasi', 'Admin', 'Games', 'Kategori', 'Produk', 'Pesanan', 'Topup', 'Metode', 'Pengguna', 'Sosmed'] as $per): ?>
														    <div class="form-group form-check">
														        <input type="checkbox" class="form-check-input" id="per-<?= strtolower($per); ?>" name="permission[]" value="<?= $per; ?>">
														        <label class="form-check-label" for="per-<?= strtolower($per); ?>"><?= $per; ?></label>
														    </div>
														    <?php endforeach; ?>
													</div>
													
													<div class="text-right">
														<a href="<?= base_url(); ?>/admin/admin" class="btn btn-warning float-left">Kembali</a>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>