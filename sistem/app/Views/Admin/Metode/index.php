				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				
						<div class="row">
							<div class="col-lg-12 mt-4">

								<div class="card shadow mb-4">
								    <div class="card-header">
                                        <h5>Metode Pembayaran</h5>
                                    </div>
									<div class="card-body">
										<div class="card-tools">
											<a href="<?= base_url(); ?>/admin/metode/add" class="btn btn-primary">Tambah Metode</a>
										</div>
										<form action="" method="POST">
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group">
														<label class="text-dark">Pembayaran Saldo</label>
														<div class="input-group">
															<select name="pay_balance" class="form-control">
																<option value="Y" <?= $pay_balance == 'Y' ? 'selected' : ''; ?>>Ya</option>
																<option value="N" <?= $pay_balance == 'N' ? 'selected' : ''; ?>>Tidak</option>
															</select>
															<button class="btn btn-primary" type="submit">Simpan</button>
														</div>
													</div>
												</div>
											</div>
										</form>
										<?= alert(); ?>
									</div>
									<div class="table-responsive">
										<table id="datatable" class="table-white table table-striped">
											<tr class="bg-primary text-white">
												<th width="10">No</th>
												<th>Metode</th>
												<th>Provider</th>
												<th>Kategori</th>
												<th>Kode Unik</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											<?php $no = 1; foreach ($method as $loop): ?>
											<tr>
												<td><?= $no++; ?></td>
												<td>
													<img src="<?= base_url(); ?>/assets/images/method/<?= $loop['image']; ?>" alt="" width="70" class="mr-2 rounded">
													<?= $loop['method']; ?>
												</td>
												<td>
													<?= $loop['provider']; ?>
													<!-- <p class="m-0"><?= $loop['code']; ?></p>-->
												</td>
												<td>
													<?= $loop['category']; ?>
												</td>
												<td>
													<?php
													if ($loop['uniq'] == 'Y') {
														echo "Ya";
													} else {
														echo "Tidak";
													}
													?>
												</td>
												<td><?= $loop['status']; ?></td>
												<td>
													<div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/metode/edit/<?= $loop['id']; ?>"
                                                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                                              >
                                                              <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/metode/delete/<?= $loop['id']; ?>');">
                                                                  <i class="ti ti-trash me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
												</td>
											</tr>
											<?php endforeach ?>
										</table>
									</div>
								</div>
							</div>
						</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>