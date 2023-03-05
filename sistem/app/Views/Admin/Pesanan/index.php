				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				
						<div class="row">
							<div class="col-lg-12 mt-4">
							    
							    <!-- Row grouping -->
                                      <div class="card shadow pt-4 mb-4">
                                        <h5 class="card-header">Pesanan</h5>
                                        <div class="card-datatable table-responsive">
                                          <table class="dt-row-grouping table" id="datatable">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>No Transaksi</th>
                                                <th>Produk</th>
                                                <th>Metode</th>
                                                <th>Provider</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
    										    <?php $no = 1; foreach ($orders as $loop): ?>
    											<tr class="<?= $loop['status']; ?> <?= $loop['provider']; ?> all-orders">
    												<td><?= $no++; ?></td>
    												<td><b class="cursor-pointer" onclick="detail('<?= $loop['order_id']; ?>');"><?= $loop['order_id']; ?></b></td>
    												<td>
    													<p class="mb-1"><?= $loop['product']; ?></p>
    													<?php 
    													if ($loop['zone_id'] !== 'joki') {
        												    if (!empty($loop['zone_id']) AND $loop['zone_id'] != 1) {
        														echo $loop['user_id'] . ' ('.$loop['zone_id'].')';
        													} else {
        														echo $loop['user_id'];
        													}
        												}
    													?>
    												</td>
    												<td><?= $loop['method']; ?></td>
    												<td><?= $loop['provider']; ?></td>
    												<td><?= $loop['status']; ?></td>
    												<td>
    												    <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/pesanan/edit/<?= $loop['id']; ?>"
                                                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                                              >
                                                              <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/pesanan/delete/<?= $loop['id']; ?>');">
                                                                  <i class="ti ti-trash me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
    												</td>
    											</tr>
    											<?php endforeach ?>
    										</tbody>
                                            <tfoot>
                                              <tr>
                                                <th>No</th>
                                                <th>No Transaksi</th>
                                                <th>Produk</th>
                                                <th>Metode</th>
                                                <th>Provider</th>
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
				<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				    <div class="modal-dialog modal-dialog-centered" role="document">
				        <div class="modal-content" style="">
				            <div class="modal-header">
				                <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan</h5>
				                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
				            </div>
				            <div class="modal-body p-0">
				            	
				            </div>
				            <div class="modal-footer">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                              </div>
				        </div>
				    </div>
				</div>
				<script>
					function detail(order_id) {
						$.ajax({
							url: '<?= base_url(); ?>/admin/pesanan/detail/' + order_id,
							success: function(result) {
								$("#modal-detail div div .modal-body").html(result);

								$("#modal-detail").modal('show');
							}
						});
					}
					
					function filter_pesanan(ket) {
					    
					    if (ket == 'Semua') {
					        $(".all-orders").removeClass('d-none');
					    } else if (ket == 'Manual') {
					        
					        $(".all-orders").removeClass('d-none');
					        
					        <?php foreach($provider as $a): ?>
					        $(".<?= $a['provider']; ?>").addClass('d-none');
					        <?php endforeach; ?>
					        
					    } else if (ket == 'Otomatis') {
					        $(".all-orders").removeClass('d-none');
					        $(".Manual").addClass('d-none');
					    } else if (ket == 'Success') {
					        $(".all-orders").addClass('d-none');
					        $(".Success").removeClass('d-none');
					    } else if (ket == 'Canceled') {
					        $(".all-orders").addClass('d-none');
					        $(".Canceled").removeClass('d-none');
					    } else if (ket == 'Pending') {
					        $(".all-orders").addClass('d-none');
					        $(".Pending").removeClass('d-none');
					    } else if (ket == 'Processing') {
					        $(".all-orders").addClass('d-none');
					        $(".Processing").removeClass('d-none');
					    }
					}
					
					$("#datatable").DataTable();
				</script>
				<?php $this->endSection(); ?>