<?= $this->extend("layouts/app")?>
<?=$this->section("content")?>
<h2 class='lead'><?=ucfirst($title)?></h2>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-12">
                    <div class="card card-body">
                        <div class='d-flex justify-content-between'>
                            <h5><i class="fas fa-microphone    "></i> Latest Announcement</h5>
                            <a href="<?=base_url("admin/announcements")?>" class='btn btn-sm btn-outline-primary1'>View All</a>
                        </div>
                        <?php if($announcement):?>
                            <?php foreach ($announcement as $key):?>
                                <details>
                                    <summary><?=$key['title']?> <span class="badge badge-light"><?=date("F, d",strtotime('- '.rand(0,60).'days'))?></span></summary>
                                    <p class='ml-3'><?=$key['details']?></p>
                                </details>
                            <?php endforeach?>
                        <?php else:?>
                        <p class='text-orange'>No Announcement Found</p>
                        <?php endif?>
                        
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card card-body">
                        <div class='d-flex justify-content-between'>
                            <h5><i class="fas fa-chart-pie    "></i> Statistics</h5>
                            <a href="#" class='btn btn-sm btn-outline-primary1'><i class="fas fa-redo    "></i> Refresh</a>
                        </div>
                        <div class="row mt-3">
                            <div class="card p-0 col-md-4">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <span class='display-4'><?=rand(0,100)?></span>
                                    <span class='lead'>Employees</span>
                                </div>
                                <a href="<?=base_url("admin/employees")?>" class='btn btn-sm btn-success btn-block'>View Employees</a>
                            </div>
                            <div class="card p-0 col-md-4">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <span class='display-4'><?=rand(0,10)?></span>
                                    <span class='lead'>Departments</span>
                                </div>
                                <a href="<?=base_url("admin/departments")?>" class='btn btn-sm btn-success btn-block'>View Departments</a>
                            </div>
                            <div class="card p-0 col-md-4">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <span class='display-4'><?=rand(0,10)?></span>
                                    <span class='lead'>Designations</span>
                                </div>
                                <a href="<?=base_url("admin/designations")?>" class='btn btn-sm btn-success btn-block'>View Designations</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-transparent py-1">
                            <h5 class='card-title'><i class="fas fa-birthday-cake    "></i> Celebration</h5>
                        </div>
                        <div class="card-body">
                            <?php if ($birthday):?>
                                <p class='font-weight-bolder mb-0'>Upcoming Birthdays</p>
                                <ul class='list-unstyled m-0 small'>
                                <?php foreach ($birthday as $key):?>
                                    <li class='d-flex justify-content-between'><a href="#"><?=$key['name']?></a> <span><?=date("F, d",strtotime('+ '.rand(0,30).'days'))?></span></li>
                                <?php endforeach?>
                                </ul>
                            <?php else:?>
                                <p>No one has birthdays this week!</p>
                            <?php endif?>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-transparent py-1">
                            <h5 class='card-title'><i class="fas fa-plane-departure    "></i> Who Is Out</h5>
                        </div>
                        <div class="card-body">
                            <?php if ($out):?>
                                <p class='font-weight-bolder mb-0'>Staffs On Vacay!</p>
                                <ul class='list-unstyled m-0 small'>
                                <?php foreach ($out as $key):?>
                                    <li class='d-flex justify-content-between'><a href="#"><?=$key['name']?></a> <span><?=date("F, d",strtotime('+ '.rand(0,60).'days'))?></span></li>
                                <?php endforeach?>
                                </ul>
                            <?php else:?>
                                <p>No one is on vacation on this month</p>
                            <?php endif?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-transparent py-1">
                            <h5 class='card-title'><i class="fas fa-stop-circle    "></i> About to end</h5>
                        </div>
                        <div class="card-body">
                            <details open>
                                <summary> Contractual Employees</summary>
                                    <?php if ($end):?>
                                        <ul class='list-unstyled m-0 ml-3 small'>
                                            <?php foreach ($end as $key):?>
                                                <li class='d-flex justify-content-between'><a href="#"><?=$key['name']?></a> <span><?=date("F, d",strtotime('+ '.rand(0,60).'days'))?></span></li>
                                            <?php endforeach?>
                                        </ul>
                                    <?php else:?>
                                        <p class="ml-3">No employee found</p>
                                    <?php endif?> 
                            </details>
                            <details open>
                                <summary> Contractual Employees</summary>
                                    <?php if ($end_t):?>
                                        <ul class='list-unstyled m-0 ml-3 small'>
                                            <?php foreach ($end_t as $key):?>
                                                <li class='d-flex justify-content-between'><a href="#"><?=$key['name']?></a> <span><?=date("F, d",strtotime('+ '.rand(0,60).'days'))?></span></li>
                                            <?php endforeach?>
                                        </ul>
                                    <?php else:?>
                                        <p class="ml-3">No trainee found</p>
                                    <?php endif?> 
                            </details>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?=$this->endSection()?>