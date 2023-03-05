				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>

								<div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
        								<div class="card shadow mb-4">
        								    <div class="card-header py-3">
                                                <h5>Kostum Harga</h5>
                                            </div>
											<form action="" method="POST">
												<table class="table table-white">
													<tr>
														<th>Metode</th>
														<th>Harga Member</th>
														<th>Harga Reseller</th>
														<th>Harga VIP</th>
													</tr>
													<?php foreach ($method as $loop): ?>
													<tr>
														<td><img src="<?= base_url(); ?>/assets/images/method/<?= $loop['image']; ?>" alt="" width="100" class="rounded"></td>
														<td>
															<input type="number" class="form-control" autocomplete="off" value="<?= $loop['price']; ?>" name="price[<?= $loop['id']; ?>]">
														</td>
														<td>
															<input type="number" class="form-control" autocomplete="off" value="<?= $loop['reseller_price']; ?>" name="reseller_price[<?= $loop['id']; ?>]">
														</td>
														<td>
															<input type="number" class="form-control" autocomplete="off" value="<?= $loop['vip_price']; ?>" name="vip_price[<?= $loop['id']; ?>]">
														</td>
													</tr>
													<?php endforeach ?>
												</table>
												<div class="card-body">
													
													<div class="text-right">
														<a href="<?= base_url(); ?>/admin/produk" class="btn btn-warning float-left">Kembali</a>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>