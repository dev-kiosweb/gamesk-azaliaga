				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
						<div class="row">
							<div class="col-lg-12 mt-4">
							    
							    <!-- Row grouping -->
                                      <div class="card shadow pt-4 mb-4">
                                        <h5 class="card-header">Produk</h5>
                                        <div class="card-body">
    										<div class="card-tools">
    											<a href="<?= base_url(); ?>/admin/produk/import" class="btn btn-primary btn-sm">Import Produk</a>
    											<a href="<?= base_url(); ?>/admin/produk/add" class="btn btn-primary btn-sm">Tambah Produk</a>
    										</div>
    									</div>
                                        <div class="card-datatable table-responsive">
                                          <table class="dt-row-grouping table" id="datatable">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Games</th>
                                                <th>Produk</th>
                                                <th>Harga</th>
                                                <th>Harga Reseller</th>
                                                <th>Harga VIP</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
    										    <?php $no = 1; foreach ($product as $loop): ?>
    											<tr>
    												<td><?= $no++; ?></td>
    												<td><?= $loop['games']; ?></td>
    												<td><?= $loop['product']; ?></td>
    												<td>Rp <?= number_format($loop['price'],0,',','.'); ?></td>
    												<td>Rp <?= number_format($loop['reseller_price'],0,',','.'); ?></td>
    												<td>Rp <?= number_format($loop['vip_price'],0,',','.'); ?></td>
    												<td><?= $loop['status']; ?></td>
    												<td>
    												    <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/metode/price/<?= $loop['id']; ?>">
                                                                  <i class="ti ti-pencil me-1"></i> Kostum Harga
                                                              </a>
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/produk/edit/<?= $loop['id']; ?>">
                                                                  <i class="ti ti-pencil me-1"></i> Edit
                                                              </a>
                                                              <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/produk/delete/<?= $loop['id']; ?>');">
                                                                  <i class="ti ti-trash me-1"></i> Delete
                                                              </a>
                                                            </div>
                                                        </div>
    												</td>
    											</tr>
    											<?php endforeach ?>
    										</tbody>
                                            <tfoot>
                                              <tr>
                                                <th>No</th>
                                                <th>Games</th>
                                                <th>Produk</th>
                                                <th>Harga</th>
                                                <th>Harga Reseller</th>
                                                <th>Harga VIP</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                      </div>
                                      <!--/ Row grouping -->
							</div>
						</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<script>
				    $("#datatable").DataTable();
				</script>
				<?php $this->endSection(); ?>