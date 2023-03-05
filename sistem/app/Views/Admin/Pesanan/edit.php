				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				        <div class="row">
							<div class="col-lg-8 mt-4 mb-4">
							    <?= alert(); ?>
										<div class="card shadow">
        								    <div class="card-header">
                                                <h5>Edit Pesanan</h4>
                                            </div>
											<div class="card-body">
												
												<form action="" method="POST">
												    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">No Transaksi</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="games" value="<?= $orders['order_id']; ?>">
                                                        <small class="text-warning">No transaksi tidak dapat diedit</small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Username</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="username" value="<?= $orders['username']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">WhatsApp</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="wa" value="<?= $orders['wa']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Produk</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="product" value="<?= $orders['product']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Metode</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="method" value="<?= $orders['method']; ?>">
                                                    </div>
                                                    <div class="mb-3 <?= $orders['zone_id'] == 'joki' ? 'd-none' : ''; ?>">
														<label for="defaultFormControlInput" class="form-label">User ID</label>
														<input type="text" class="form-control" autocomplete="off" name="user_id" value="<?= $orders['user_id']; ?>">
													</div>
													<div class="mb-3 <?= $orders['zone_id'] == 'joki' ? 'd-none' : ''; ?>">
														<label for="defaultFormControlInput" class="form-label">Zone ID</label>
														<input type="text" class="form-control" autocomplete="off" name="zone_id" value="<?= $orders['zone_id']; ?>">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Nickname</label>
													<input type="text" class="form-control" autocomplete="off" name="nickname" value="<?= $orders['nickname']; ?>"
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Status</label>
														<div>
															<select name="status" class="form-control">
																<option value="Pending" <?= $orders['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
																<option value="Processing" <?= $orders['status'] == 'Processing' ? 'selected' : ''; ?>>Processing</option>
																<option value="Success" <?= $orders['status'] == 'Success' ? 'selected' : ''; ?>>Success</option>
																<option value="Canceled" <?= $orders['status'] == 'Canceled' ? 'selected' : ''; ?>>Canceled</option>
																<option value="Expired" <?= $orders['status'] == 'Expired' ? 'selected' : ''; ?>>Expired</option>
															</select>
														</div>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Keterangan</label>
														<textarea name="ket" cols="30" rows="4" class="form-control"><?= $orders['ket']; ?></textarea>
													</div>
													<div class="text-end mt-3">
														<a href="<?= base_url(); ?>/admin/pesanan" class="btn btn-warning text-right">Kembali</a>
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