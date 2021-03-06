<?= $this->extend("layouts/app")?>
<?=$this->section("content")?>
<div class="row">
    <div class="col-12 d-flex justify-content-between">
        <h2 class='lead'><?=ucfirst($title)?></h2>
        <button class='btn btn-sm btn-outline-primary1 ml-3' data-toggle="modal" data-target="#new-employee">New Payslip</button>
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
        <div class="col-md-4">
        <div class="form-group d-flex">
            <input type="month" class="form-control">
            <button class='btn btn-sm btn-outline-primary1 ml-3'>Filter</button>
        </div>
    </div>
    <div class="col-12" >
        <div class="card card-body table-responsive">
            <table class="table  datatable">
                <thead class="">
                    <tr>
                        <th class='text-nowrap'> 
                            <div class="form-check">
                                <label class="form-check-label" style="visibility:hidden">C</label>
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </th>
                        <th class='text-nowrap'>Employee Name</th>
                        <th class='text-nowrap'>Gross</th>
                        <th class='text-nowrap'>Deduction</th>
                        <th class='text-nowrap'>Addition</th>
                        <th class='text-nowrap'>Net Pay</th>
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
                                <a href="#" class='small'>Print</a>
                                <a href="#" class='small'>Send to email</a>
                            </div>
                        </td>
                        <td class="text-right"><?=currency($key['gross'])?></td>
                        <td class='text-danger text-right'><?=currency($key['deduction'])?></td>
                        <td class='text-success text-right'><?=currency($key['addition'])?></td>
                        <td class='text-primary text-right'><?=currency($key['gross'] - $key['deduction'] + $key['addition'])?></td>
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
                <h5 class="modal-title" id="my-modal-title">Generate Payslip</h5>
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
                                    
                                    <div class="form-group col-md-4">
                                        <label for="">Employee</label>
                                        <select  class="form-control" name="">
                                            <option> - Select Employee- </option>
                                            <?php for ($i=0; $i < 20 ; $i++):?>
                                            <option> <?=service('faker')->name?></option>
                                            <?php endfor?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Salary Month</label>
                                        <input type="month"  class="form-control" >
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
                <button class="btn btn-sm btn-outline-primary1 float-right">Generate</button>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>