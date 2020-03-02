<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class='col-lg-12'>
        <a href="" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#newSubMenuModal"><i class="fas fa-plus"></i> Tambah Sub Menu</a>
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">',  '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Url</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>

            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($submenu as $sm) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $sm['title']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?php
                            $status = $sm['status'];
                            if ($status == 1) {
                                echo "Active";
                            } else {
                                echo "non aktive";
                            }
                            ?></td>
                        <td>
                            <a href="<?= base_url('menu/editsubmenu/') . $sm['id'];   ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('menu/submenuhapus/') . $sm['id'];   ?>" class="badge badge-danger">Hapus</a>


                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title menu..">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['menu_id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="status" id="status" checked>
                            <label class="form-check-label" for="status">
                                Active?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>