<?= $this->extend("layouts/app")?>
<?=$this->section("content")?>
    <div class='card border-0 mt-5 col-md-4 mx-auto'>
        <div class="card-header bg-transparent">
            <h5 class="text-orange">Administrator Login</h5>
        </div>
        <div class="card-body">
            <form action="<?=base_url('login')?>" method="POST">
                <div class="form-group">
                    <label for="">Username</label>
                    <input required="" class="form-control" type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input required="" class="form-control" type="password" name="password">
                </div>
                <div class="form-check form-check-inline">
                    <input id="rem" class="form-check-input" type="checkbox" name="" value="true">
                    <label for="rem" class="form-check-label">Remember Me</label>
                </div>
                <div class="form-group clearfix">
                    <button class='btn btn-outline-primary1 btn-sm float-right' type='submit'>Login</button>
                </div>

            </form>
            <p><a href="<?=base_url('readme')?>"><i class="fas fa-hand-point-right"></i> Read Me </a> for authentication details</p>
        </div>
    </div>
<?=$this->endSection()?>