

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        <a href="<?php echo base_url('Homepage/tambah_data');?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NIM</td>
                            <td>Alamat</td>
                            <td colspan="2">Setting</td>
                        </tr>	
                    </thead>
                    <tbody>

                            <?php 
                                $no = 1;
                            foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $mhs['Nama']; ?></td>
                                <td><?php echo $mhs['NIM']; ?></td>
                                <td><?php echo $mhs['alamat']; ?></td>
                            <td>
                                <a href="<?php echo base_url()?>Homepage/edit_data/<?php echo $mhs['id']?>"class="badge badge-primary">Edit</a>
                                <a href="<?php echo base_url()?>Homepage/hapus_data/<?php echo $mhs['id']?>"class="badge badge-danger">Hapus</a>
                            </td>
                            
                            </tr>

                            <?php endforeach; ?>
                            </tbody>
                        </table>

                            </div>
         </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           