    <nav class="navbar-expand-sm  container mt-3 ">
        <ul class="collapse navbar-collapse nav nav-pills nav-fill" id="collapsibleNavId">
            <li class="nav-item">
                <a href="<?=base_url("admin")?>" class="nav-link <?=$title==="overview"?"active":""?>">Overview</a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url("admin/employees")?>" class="nav-link <?=$title==="employees"?"active":""?>" >Employees</a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url("admin/departments")?>" class="nav-link <?=$title==="departments"?"active":""?>">Departments</a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url("admin/designations")?>" class="nav-link <?=$title==="designations"?"active":""?>">Designations</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?=$title==="manage payroll" || $title==="salary revision"?"active":""?>" data-toggle="dropdown" href="#" role="button">Payroll</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?=base_url("admin/manage-payroll")?>">Manage</a>
                    <a class="dropdown-item" href="<?=base_url("admin/salary-revision")?>">Salary Revision</a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url("admin/announcements")?>" class="nav-link <?=$title==="announcements"?"active":""?>">Announcements</a>
            </li>
             
        </ul>
    </nav>