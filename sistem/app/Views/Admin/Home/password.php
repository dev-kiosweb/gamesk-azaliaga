				<?php $this->extend('admin'); ?>
				
				<?php $this->section('content'); ?>
				<div class="content">
								<div class="row">
									<div class="col-lg-8 mx-auto mt-4">
									    <?= alert(); ?>
										<div class="card shadow mb-4">
    								    <div class="card-header py-3">
                                        	<h5>Ubah Password</h5>
                                        </div>
                                        
											<div class="card-body">
												
												<form action="" method="POST">
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Password Lama</label>
														<input type="password" class="form-control" autocomplete="off" name="passwordl">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Password Baru</label>
														<input type="password" class="form-control" autocomplete="off" name="passwordb">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Ulangi Password Baru</label>
														<input type="password" class="form-control" autocomplete="off" name="passwordbb">
													</div>
													<div class="text-right">
														<button class="btn text-dark" type="reset">Batal</button>
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