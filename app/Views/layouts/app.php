<!doctype html>
<html lang="en">
  <head>
    <title><?=ucfirst($title)?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/bootstrap/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/bootstrap/datatables.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/summernote/summernote-bs4.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/font-awesome/css/all.css")?>">
    <script src="<?=base_url("assets/bootstrap/jquery.min.js")?>"></script>
    
    <script src="<?=base_url("assets/bootstrap/datatables.min.js")?>"></script>
    <script src="<?=base_url("assets/summernote/summernote-bs4.min.js")?>"></script>
    <style>
        body{
            background-color:var(--shade1)
        }
        .navbar-brand{
            color:var(--primary1)!important;
            font-family:'Lucida Handwriting',cursive

        }
        .navbar-brand>small{
            color:var(--primary2);
            font-family:monospace

        }
        .nav-pills .nav-link.active,
        .nav-pills .show > .nav-link {
        background-color: var(--primary2);
        }
        .nav a{
            color:var(--primary1-thicker)
        }
        .contextual-menu{
            visibility:hidden;
            transition:100ms;
            
        }
        .contextual-menu a{
            color:var(--primary1-thicker);
        }
        table tr:hover .contextual-menu{
            visibility:visible;
        }
    </style>
   
  </head>
  <body>
    <div style="position:fixed;min-height:200px;z-index:100000;top:0;right:0">
        <?= session('notification')??""?>
    </div>

      
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand h2 text-orange" href="#">Simple Office <span class="badge badge-pill badge-warning">LTE</span><small class='small d-block'>Payroll Management Systems</small></a>
            
            <?php if(is_logged_in()):?>
            <a class='btn btn-outline-primary1' href="<?= base_url('logout')?>" onclick='return confirm("Are you sure you want to logout?")'><i class="fa fa-sign-out" aria-hidden="true"></i> Signout</a>
            <?php endif?>
        </div>
    </nav>
    <?php if($title !== "login" && $title !== "read me" ) :?>
        <?= $this->include("components/navigation")?>
    <?php endif?>
    <div class="container mt-3">
         <?=$this->renderSection("content")?>
    </div>
    
 
       <script src="<?=base_url("assets/bootstrap/popper.min.js")?>"></script>
    <script src="<?=base_url("assets/bootstrap/bootstrap.min.js")?>"></script>
     <script>
       $('.toast').toast("show"); 
       $('.datatable').DataTable();
       $('textarea').summernote({
           minHeight:300,
       });
       checkAll = (e)=>{
            let state = e.target.checked;
            let nodes = document.querySelectorAll("td input[type='checkbox']");
            for(let i of nodes){i.checked = state;}
        }
        document.querySelector("th input[type='checkbox']").addEventListener("change",(e)=>{
            let nodes = document.querySelectorAll("td input[type='checkbox']");
            for(let i of nodes){i.checked = e.target.checked;}
        })
    </script>
  </body>
</html>