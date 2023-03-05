				<?php $this->extend('admin'); ?>
				
				<?php $this->section('content'); ?>
				<div class="content">
								<div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
										<div class="card shadow mb-4">
    								    <div class="card-header py-3">
                                        <h5>Edit Admin</h5>
                                        </div>
                                        
											<div class="card-body">
												
												<form action="" method="POST">
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Username</label>
															<input type="text" class="form-control" autocomplete="off" value="<?= $account['username']; ?>">
															<small>Username tidak dapat diganti</small>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Status</label>
															<select name="status" class="form-control">
																<option value="On" <?= $account['status'] == 'On' ? 'selected' : ''; ?>>On</option>
																<option value="Off" <?= $account['status'] == 'Off' ? 'selected' : ''; ?>>Off</option>
															</select>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Password</label>
														<div>
															<button class="btn btn-success" type="button" onclick="btn_reset();">Reset Password</button>
														</div>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Akses</label>
														    <?php $per_active = explode(',', $account['permission']); foreach(['Konfigurasi', 'Admin', 'Games', 'Kategori', 'Produk', 'Pesanan', 'Topup', 'Metode', 'Pengguna', 'Sosmed'] as $per): ?>
														    <div class="form-group form-check">
														        <input type="checkbox" class="form-check-input" id="per-<?= strtolower($per); ?>" name="permission[]" value="<?= $per; ?>" <?= in_array($per, $per_active) ? 'checked' : ''; ?>>
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
				<script>
					function btn_reset() {
						Swal.fire({
		                    title: 'Reset password?',
		                    text: "Password akan direset",
		                    icon: 'warning',
		                    showCancelButton: true,
		                    confirmButtonColor: '#3085d6',
		                    cancelButtonColor: '#d33',
		                    cancelButtonText: 'Batal',
		                    confirmButtonText: 'Reset password'
		                }).then((result) => {
		                    if (result.isConfirmed) {
		                        window.location.href = '<?= base_url(); ?>/admin/admin/reset/<?= $account['id']; ?>';
		                    }
		                });
					}
				</script>
				<?php $this->endSection(); ?>