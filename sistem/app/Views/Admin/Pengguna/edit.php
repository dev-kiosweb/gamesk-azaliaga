				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>

								<div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
									    <h5>Edit Member</h5>
        								<div class="card shadow mb-4">
											<div class="card-body">
												
												<form action="" method="POST" enctype="multipart/form-data">
													<div class="mb-3">
														<label class="col-form-label">Username</label>
														<input type="text" class="form-control" autocomplete="off" value="<?= $account['username']; ?>">
														<small class="text-warning">Username tidak dapat diganti</small>
													</div>
													<div class="mb-3" id="tipe-manual">
														<label class="col-form-label">Saldo</label>
														<input type="number" class="form-control" autocomplete="off" name="balance" value="<?= $account['balance']; ?>">
													</div>
													<div class="mb-3" id="tipe-manual">
														<label class="col-form-label">Whatsapp</label>
														<input type="number" class="form-control" autocomplete="off" name="wa" value="<?= $account['wa']; ?>">
													</div>
													<div class="mb-3">
														<label class="col-form-label">Level Member</label>
														<div>
															<select class="form-control" id="level_id" name="level_id">
																<?php foreach($level as $key => $value){ ?>
																	<option value="<?= $value['id'] ?>" <?= $value['id'] == $account['level_id'] ? 'selected' : '' ; ?> ><?= $value['level_name'] ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="mb-3">
														<label class="col-form-label col-md-4 text-dark">Status</label>
														<div class="col-md-8">
															<select name="status" class="form-control">
																<option value="On" <?= $account['status'] == 'On' ? 'selected' : ''; ?>>On</option>
																<option value="Off" <?= $account['status'] == 'Off' ? 'selected' : ''; ?>>Off</option>
															</select>
														</div>
													</div>
													<div class="mb-3">
														<label class="col-form-label col-md-4 text-dark">Password</label>
														<div class="text-right">
														    <button class="btn btn-danger" type="button" id="btn-reset">Reset Password</button>
														</div>
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
				<script>
					$("#btn-reset").on('click', function() {
						Swal.fire({
		                    title: 'Reset password?',
		                    text: "Password pengguna akan direset",
		                    icon: 'warning',
		                    showCancelButton: true,
		                    confirmButtonColor: '#3085d6',
		                    cancelButtonColor: '#d33',
		                    cancelButtonText: 'Batal',
		                    confirmButtonText: 'Reset password'
		                }).then((result) => {
		                    if (result.isConfirmed) {
		                        window.location.href = '<?= base_url(); ?>/admin/pengguna/reset/<?= $account['id']; ?>';
		                    }
		                });
					});
				</script>
				<?php $this->endSection(); ?>