				<?php $this->extend('admin'); ?>
				
				<?php $this->section('content'); ?>
				<div class="content">
				    
				    <div class="row">
                                 <div class="col-lg-10 mt-4">
                                     <?= alert(); ?>
                                 <!-- Admin -->
                                 <div class="card shadow mb-4">
								    <div class="card-header py-3">
                                    <h5>Admin</h5>
                                    <div class="card-tools">
										<a href="<?= base_url(); ?>/admin/admin/add" class="btn btn-primary btn-sm">Tambah Akun</a>
									</div>
                                    </div>
									<div class="table-responsive">
										<table class="table-white table table-striped">
											<tr>
												<th width="10">No</th>
												<th>Username</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											<?php $no = 1; foreach ($account as $loop): ?>
											<tr>
												<td><?= $no++; ?></td>
												<td><?= $loop['username']; ?></td>
												<td><?= $loop['status']; ?></td>
												<td>
													<div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/admin/edit/<?= $loop['id']; ?>"
                                                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                                              >
                                                              <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/admin/delete/<?= $loop['id']; ?>');">
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
					    	</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>