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
                <a class="nav-link" href="#">Active (1)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Inactive (0)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Trash (0)</a>
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
    <div class="col-12 " >
        <div class="card card-body table-responsive">
            <table class="table table datatable">
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
                        <th class='text-nowrap'>Department</th>
                        <th class='text-nowrap'>Employment Type</th>
                        <th class='text-nowrap'>Hire Date</th>
                        <th class='text-nowrap'>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $emp):?>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label" style="visibility:hidden">C</label>
                                <input type="checkbox" class="form-check-input">
                            </div>
                            
                        </td>
                        <td class=''>
                            <a href="#" class='h6'><?=$emp['emp_name']?></a>
                            <div class="contextual-menu">
                                <a href="#" class='small'>Edit</a>
                            </div>
                        </td>
                        <td><?=$emp['designation']?></td>
                        <td><?=$emp['department']?></td>
                        <td><?=$emp['emp_type']?></td>
                        <td><?=date("Y-m-d",strtotime('- '.rand(0,60).'days'))?></td>
                        <td><span class="badge <?=$emp['status'] === "Active"?"badge-success":"badge-danger"?>"><?=$emp['status']?></span></td>
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
                <h5 class="modal-title" id="my-modal-title">New Employee</h5>
                <button class="close border" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style='max-height:80vh;overflow:auto'>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-3 d-flex flex-column  align-items-center">
                                <i class='fa fa-user fa-8x'></i>
                                <button class='btn btn-sm btn-outline-primary1 ml-3 mt-5'><i class="fas fa-upload    "></i> Upload Photo</button>
                            </div>
                            <div class="col-md-9 border">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">First Name <code>*</code></label>
                                        <input  class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Middle Name </label>
                                        <input  class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Last Name <code>*</code></label>
                                        <input  class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Employee ID</label>
                                        <input  class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Email <code>*</code></label>
                                        <input  class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Employee Type <code>*</code></label>
                                        <select  class="form-control" name="">
                                            <option> - Select - </option>
                                            <option>Full Time</option>
                                            <option>Part Time</option>
                                            <option>On Contract</option>
                                            <option>Temporary</option>
                                            <option>Trainee</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Employee End Date <code>*</code></label>
                                        <input  class="form-control" type="date" name="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Date Of Hire <code>*</code></label>
                                        <input  class="form-control" type="date" name="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Employee Status <code>*</code></label>
                                        <select  class="form-control" name="">
                                            <option> - Select - </option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                            <option>Terminated</option>
                                            <option>Resigned</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input id="advanced" class="form-check-input" type="checkbox" onchange="document.querySelector('#show-advanced').classList.toggle('d-none')">
                                            <label for="advanced" class="form-check-label">Show Advanced Fields</label>
                                        </div>
                                    </div>
                                </div>
                                <div class='row d-none' id='show-advanced'> 
                                    <div class="col-12">
                                        <h6>Work</h6><hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Department </label>
                                        <select  class="form-control" name="">
                                            <option> - Select Department- </option>
                                            <?php foreach (DEPARTMENTS as $key):?>
                                            <option> <?=$key?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Job Title </label>
                                        <select  class="form-control" name="">
                                            <option> - Select Designation - </option>
                                            <?php for ($i=0; $i < 20 ; $i++):?>
                                            <option> <?=service('faker')->jobTitle?></option>
                                            <?php endfor?>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="">Location </label>
                                        <select  class="form-control" name="">
                                            <option>Main Location </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Reporting To </label>
                                        <select  class="form-control" name="">
                                            <option> - Select Employee- </option>
                                            <?php for ($i=0; $i < 20 ; $i++):?>
                                            <option> <?=service('faker')->name?></option>
                                            <?php endfor?>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="">Source Of Hire </label>
                                        <select  class="form-control" name="">
                                            <option> - Select - </option>
                                            <option> Direct</option>
                                            <option>Referral </option>
                                            <option>Web </option>
                                            <option>Newspaper</option>
                                            <option> Advertisement</option>
                                            <option>Social Network</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Pay Rate</label>
                                        <input  class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Pay Type </label>
                                        <select  class="form-control" name="">
                                            <option> - Select- </option>
                                            <option> Hourly</option>
                                            <option>Daily</option>
                                            <option> Weekly</option>
                                            <option> Biweekly</option>
                                            <option>Monthly</option>
                                            <option> Contract</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Work Phone</label>
                                        <input  class="form-control" type="text" name="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer clearfix">
                <button class="btn btn-sm btn-outline-primary1 float-right">Create Employee</button>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>