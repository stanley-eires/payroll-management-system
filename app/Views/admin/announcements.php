<?= $this->extend("layouts/app")?>
<?=$this->section("content")?>
<div class="row">
    <div class="col-12 d-flex justify-content-between">
        <h2 class='lead'><?=ucfirst($title)?></h2>
        <button class='btn btn-sm btn-outline-primary1 ml-3' data-toggle="modal" data-target="#new-employee">Add Announcement</button>
    </div>


    <div class="col-12">
        <nav class="nav small">
            <li class="nav-item">
                <a class="nav-link" href="#">All (1)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Published (1)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Draft (0)</a>
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
                        <th class='text-nowrap'>Title</th>
                        <th class='text-nowrap'>Sent To</th>
                        <th class='text-nowrap'>Type</th>
                        <th class='text-nowrap'>Date Type</th>
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
                            <a href="#" class='h6'><?=$key['title']?> </a><?=$key['draft']?" - Draft":""?>
                            <div class="contextual-menu">
                                <a href="#" class='small'>Edit</a>
                            </div>
                        </td>
                        <td><?=$key['sent_to']?></td>
                        <td><i class="fas fa-envelope    "></i></td>
                        <td class='small'> <?=$key['draft']?"Last Modified":"Published"?>
                            <span class='d-block'><?=date("Y-m-d",strtotime('- '.rand(0,60).'days'))?></span>
                        </td>
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
                <h5 class="modal-title" id="my-modal-title">Add New Announcement</h5>
                <button class="close border" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style='max-height:80vh;overflow:auto'>
                <div class="row">

                    <div class="col-md-9 mx-auto ">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="">Add Title<code>*</code></label>
                                <input  class="form-control" type="text" name="">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea  class="form-control" type="text" name=""></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Send Announcements To</label>
                                <select  class="form-control" name="">
                                    <option> - Select - </option>
                                    <option>All Employees</option>
                                    <option>Selected Employee</option>
                                    <option>By Department</option>
                                    <option>By Designation</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer clearfix">
                <button class="btn btn-sm btn-dark float-right">Save Draft</button>
                <button class="btn btn-sm btn-outline-primary1 float-right">Publish</button>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>