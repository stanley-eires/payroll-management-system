<?= $this->extend("layouts/app")?>
<?=$this->section("content")?>
<div class="row">
    <div class="col-12 d-flex justify-content-between">
        <h2 class='lead'><?=ucfirst($title)?></h2>
        <button class='btn btn-sm btn-outline-primary1 ml-3' data-toggle="modal" data-target="#new">Add New</button>
    </div>
    <div class="col-md-4 my-3">
        <div class="form-group d-flex">
            <select class="form-control" name="">
                <option>Bulk Actions</option>
                <option>Move To Trash</option>
            </select>
            <button class='btn btn-sm btn-outline-primary1 ml-3'>Apply</button>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-body table-responsive">
            <table class="table datatable">
                <thead class="">
                    <tr>
                        <th class='text-nowrap'> 
                            <div class="form-check">
                                <label class="form-check-label" style="visibility:hidden">C</label>
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </th>
                        <th class='text-nowrap'>Title</th>
                        <th class='text-nowrap'>No. Of Employees</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $key):?>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label" style="visibility:hidden">C</label>
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </td>
                        <td>
                            <a href="#" class='h6'><?=$key['title']?></a>
                            <div class="contextual-menu">
                                <a href="#" class='small'>Edit</a>
                            </div>
                        </td>
                        <td><?=$key['no_employees']?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="new" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">New Employee</h5>
                <button class="close border" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style='max-height:80vh;overflow:auto'>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Department Title<code>*</code></label>
                        <input  class="form-control" type="text" name="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Description </label>
                        <textarea class='form-control' cols="30" rows="10" placeholder="Optional"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer clearfix">
                <button class="btn btn-sm btn-outline-primary1 float-right">Create Department</button>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>