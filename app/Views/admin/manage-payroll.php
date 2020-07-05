<?= $this->extend("layouts/app")?>
<?=$this->section("content")?>
<div class="row">
    <div class="col-12 d-flex justify-content-between">
        <h2 class='lead'><?=ucfirst($title)?></h2>
        <button class='btn btn-sm btn-outline-primary1 ml-3' data-toggle="modal" data-target="#new-employee">Add New</button>
    </div>


    <div class="col-12">
        <nav class="nav small">
            <li class="nav-item">
                <a class="nav-link" href="#">All (1)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Deduction (1)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Addition (0)</a>
            </li>
        </nav>
    </div>
    <div class="col-md-4">
        <div class="form-group d-flex">
            <select class="form-control" name="">
                <option>Bulk Actions</option>
                <option>Move To Trash</option>
            </select>
            <button class='btn btn-sm btn-outline-primary1 ml-3'>Apply</button>
        </div>
    </div>
    <div class="col-12" >
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
                        <th class='text-nowrap'>Employee Name</th>
                        <th class='text-nowrap'>Designation</th>
                        <th class='text-nowrap'>Amount</th>
                        <th class='text-nowrap'>Type</th>
                        <th class='text-nowrap'>Date</th>
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
                            <a href="#" class='h6'><?=$key['emp_name']?></a>
                            <div class="contextual-menu">
                                <a href="#" class='small'>Edit</a>
                            </div>
                        </td>
                        <td><?=$key['designation']?></td>
                        <td  class='text-right'><?=currency($key['amount'])?></td>
                        <td class='<?=$key['type'] === "Addition"?"text-success":"text-danger"?>'><?=$key['type']?></td>
                        <td><?=date("Y-m-d",strtotime('- '.rand(0,60).'days'))?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="new-employee" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centereds modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Manage</h5>
                <button class="close border" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style='max-height:80vh;overflow:auto'>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    
                                    <div class="form-group col-md-12">
                                        <label for="">Employee</label>
                                        <select  class="form-control" name="">
                                            <option> - Select Employee- </option>
                                            <?php for ($i=0; $i < 20 ; $i++):?>
                                            <option> <?=service('faker')->name?></option>
                                            <?php endfor?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Title</label>
                                        <input type="text"  class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Action Type </label>
                                        <select  class="form-control" name="">
                                            <option> - Select - </option>
                                            <option>Deduction</option>
                                            <option>Addition</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Amount</label>
                                        <input type="text"  class="form-control" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Description</label>
                                        <textarea id="" class="form-control" name="" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer clearfix">
                <button class="btn btn-sm btn-outline-primary1 float-right">Save</button>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>