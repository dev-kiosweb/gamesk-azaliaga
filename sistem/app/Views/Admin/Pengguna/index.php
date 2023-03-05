				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
						<div class="row">
							<div class="col-lg-12 mt-4">
							    <?= alert(); ?>
							    <h5>Member</h5>
								<div class="card shadow mb-4">
                                    
									<div class="card-body">
										<a href="<?= base_url(); ?>/admin/pengguna/add" class="btn btn-primary btn-sm"><i class="ti ti-plus me-md-2"></i> Tambah Akun</a>
									</div>
									<div class="table-responsive">
										<table class="table-white table table-striped">
											<tr class="bg-primary text-white">
												<th width="10">No</th>
												<th>Username</th>
												<th>Whatsapp</th>
												<th>Saldo</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											<?php $no = 1; foreach ($account as $loop): ?>
											<tr>
												<td><?= $no++; ?></td>
												<td><?= $loop['username']; ?></td>
												<td><?= $loop['wa']; ?></td>
												<td>Rp. <?= number_format($loop['balance'],0,',','.'); ?></td>
												<td><?= $loop['status']; ?></td>
												<td>
												    <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/pengguna/edit/<?= $loop['id']; ?>">
                                                                  <i class="ti ti-pencil me-1"></i> Edit
                                                              </a>
                                                              <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/pengguna/delete/<?= $loop['id']; ?>');">
                                                                  <i class="ti ti-trash me-1"></i> Delete
                                                              </a>
                                                            </div>
                                                        </div>
												</td>
											</tr>
											<?php endforeach ?>
											<?php if (count($account) == 0): ?>
											<tr>
												<td colspan="6" align="center">Tidak ada pengguna</td>
											</tr>
											<?php endif ?>
										</table>
									</div>
								</div>
							</div>
						</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>