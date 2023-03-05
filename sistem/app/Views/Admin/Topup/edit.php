				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
			                    <div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
										<div class="card shadow mb-4">
        								    <div class="card-header py-3">
                                                <h5>Edit Deposit</h5>
                                            </div>
											<div class="card-body">
												
												<form action="" method="POST">
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Topup ID</label>
														<input type="text" class="form-control" autocomplete="off" value="<?= $topup['topup_id']; ?>">
														<small>Topup ID tidak dapat diganti</small>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Username</label>
														<input type="text" class="form-control" autocomplete="off" name="username" value="<?= $topup['username']; ?>">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Metode</label>
														<input type="text" class="form-control" autocomplete="off" name="method" value="<?= $topup['method']; ?>">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Jumlah</label>
														<input type="text" class="form-control" autocomplete="off" name="amount" value="<?= $topup['amount']; ?>">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Status</label>
														<div>
															<select name="status" class="form-control">
																<option value="Pending" <?= $topup['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
																<option value="Success" <?= $topup['status'] == 'Success' ? 'selected' : ''; ?>>Success</option>
																<option value="Canceled" <?= $topup['status'] == 'Canceled' ? 'selected' : ''; ?>>Canceled</option>
															</select>
														</div>
													</div>
													<div class="text-right">
														<button class="btn text-dark" type="reset">Batal</button>
														<button class="btn btn-success" type="button" onclick="terima();">Terima</button>
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
					function terima() {
						Swal.fire({
		                    title: 'Terima topup?',
		                    text: "Saldo akan dikirim ke pengguna",
		                    icon: 'warning',
		                    showCancelButton: true,
		                    confirmButtonColor: '#3085d6',
		                    cancelButtonColor: '#d33',
		                    cancelButtonText: 'Batal',
		                    confirmButtonText: 'Terima'
		                }).then((result) => {
		                    if (result.isConfirmed) {
		                        window.location.href = '<?= base_url(); ?>/admin/topup/accept/<?= $topup['id']; ?>';
		                    }
		                });
					}
				</script>
				<?php $this->endSection(); ?>