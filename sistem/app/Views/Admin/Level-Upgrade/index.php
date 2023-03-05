				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
					<div class="row">
						<div class="col-lg-12 mt-4 ">
							<?= alert(); ?>
								<h5>Upgrade Level Member</h5>
								<div class="card shadow mb-4">
								    <div class="card-datatable table-responsive">
									<table class="table-white table table-striped">
										<tr class="bg-primary text-white">
											<th width="10">No</th>
											<th>Nama User</th>
											<th>Nama Level</th>
											<th>Harga</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
										<?php $no = 1; foreach ($level_upgrade as $key => $value): ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $value['username']; ?></td>
											<td><?= $value['level_name']; ?></td>
											<td>Rp. <?= number_format($value['price'], 0,'.',',') ; ?></td>
											<td><?= $value['status']; ?></td>
											<td>
											    <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= base_url(); ?>/admin/level-upgrade/edit/<?= $value['id']; ?>">
                                                            <i class="ti ti-pencil me-1"></i> Edit
                                                        </a>
                                                        <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/level-upgrade/delete/<?= $value['id']; ?>">
                                                            <i class="ti ti-trash me-1"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
											</td>
										</tr>
										<?php endforeach ?>
										<?php if (count($level_upgrade) == 0): ?>
										<tr>
											<td colspan="6" align="center">Tidak ada data upgrade level</td>
										</tr>
										<?php endif ?>
									</table>
								</div>
								</div>
								
							</div>
						</div>
					</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>