<?= $this->extend("layouts/app")?>
<?=$this->section("content")?>
<a href="<?=$_SERVER['HTTP_REFERER']??base_url()?>"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
<div class="card card-body">
    <h5 class='display-4'>Simple Office <small>Payroll Management System</small></h5>
    <details open>
        <summary class='lead'>What this project is about</summary>
        <div class='ml-3'>
            <p >Simple Office as the name indicates is a payroll management system that manages your business of company HR professionally and break down the barrier of traditional office and employee management.</p>
            <p>Its one of the two project assessment test by Kimberly Ryan to assertain the competency level of recruitees under the category of full stack developer. This is a light weight version due to time constrain given to complete the project <em>Not up to two days</em>. But i tried as much as possible to touch the major features this type of app requires. Subsequent release would contain more features. Database wasn't used in this version and most of the informations are dummy datas generated with Faker's Library </p>

        </div>
    </details>
    <details open>
        <summary class='lead'>Featured List</summary>
        <div class='ml-3'>
            <ul>
                <li>Powerful and Insightful Dashboard</li>
                <li>Departments</li>
                <li>Designations</li>
                <li>Employee List</li>
                <li>Payroll & Payslip Management</li>
                <li>General Announcement Board</li>
                <li>Responsive Design</li>
                <li>Clean & Easy to Navigate Interface </li>
                <li>Staffs Birthday notifications </li>
                <li>Leave & Staff quiting notification </li>
                <li>Password Protected Pages </li>
            </ul>

        </div>
    </details>
    <details open>
        <summary class='lead'>System Requirements</summary>
        <div class='ml-3'>
            <p>This project is currently been built on codeigniter latest framework and at thus requires a server running PHP version 7.2 or higher. Since Database is not used yet. Subsequent version would require more extension/features to be installed on server</p>
        </div>
    </details>
    <details open>
        <summary class='lead'>Authentication</summary>
        <div class='ml-3'>
            <ul>
                <dt>Username</dt>
                <dd>demo</dd>
            </dl>
            <dl>
                <dt>Password</dt>
                <dd>demo</dd>
            </dl>
        </div>
    </details>
    <details open>
        <summary class='lead'>Contributors/ Library Used</summary>
        <div class='ml-3'>
            <p>This project wasnt entirely built from scratch. I took advantage of some libraries & framework and i would love to acknowledge them for that</p>
            <dl>
                <dt>Code Igniter 4.0.3 [ PHP ]</dt>
                <dd>Server Side Language Framework</dd>
            </dl>
            <dl>
                <dt>Bootstrap 4.3 [ Front End ]</dt>
                <dd>UX/UI Design Framework</dd>
            </dl>
            <dl>
                <dt>Summer Note [ Editor ]</dt>
                <dd>Converting a textarea to a power html editor</dd>
            </dl>
            <dl>
                <dt>DataTable [ Table ]</dt>
                <dd>Adding Functionalities like search, sort, filter to tables</dd>
            </dl>
            <dl>
                <dt>DataTable [ Table ]</dt>
                <dd>Adding Functionalities like search, sort, filter to tables</dd>
            </dl>
            <dl>
                <dt>Zaninotto's Faker Library [ Temporal Data Source ]</dt>
                <dd>Powerful library for generating dummy data for testing and project scaffolding</dd>
            </dl>

        </div>
    </details>
    <details open>
        <summary class='lead'>Developer</summary>
        <div class='ml-3'>
            <ul>
                <li>Name: <?=env('developer.name','Eires Stanley')?></li>
                <li>Email: <?=env('developer.email','stanley.eires@gmail.com')?>thompsonozoagu@gmail.com</li>
                <li>Phone: <?=env('developer.phone','+2347033385484')?></li>
                <li>Website: <?=env('developer.website','')?></li>
            </ul>
        </div>
    </details>
    <h3>Special Thanks to Kimberly Ryan Recruitment Agency</h3>
</div>
    
<?=$this->endSection()?> 