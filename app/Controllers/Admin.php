<?php namespace App\Controllers;

class Admin extends BaseController
{
    public function overview()
    {
		$data['title'] =  "overview";
		$faker =  service("faker");
        $data['announcement'] = [];
        for ($i=0; $i < rand(0,10); $i++) {
            array_push($data['announcement'], [
                "title"=>$faker->catchPhrase,
                "details"=>$faker->realText,
            ]);
		}
		$data['birthday'] = [];
        for ($i=0; $i < rand(0, 5); $i++) {
            array_push($data['birthday'], [
                "name"=>$faker->name,
            ]);
		}
		$data['out'] = [];
        for ($i=0; $i < rand(0, 5); $i++) {
            array_push($data['out'], [
                "name"=>$faker->name,
            ]);
		}
		$data['end'] = [];
        for ($i=0; $i < rand(0, 5); $i++) {
            array_push($data['end'], [
                "name"=>$faker->name,
            ]);
		}
		$data['end_t'] = [];
        for ($i=0; $i < rand(0, 5); $i++) {
            array_push($data['end_t'], [
                "name"=>$faker->name,
            ]);
        }




        return view("admin/overview", $data);
    }
    public function employees()
    {
        $data['title'] =  "employees";
        $faker =  service("faker");
        $data['data'] = [];
        for ($i=0; $i < 22; $i++) {
            array_push($data['data'], [
                "emp_name"=>$faker->name,
                "designation"=>$faker->jobTitle,
                "department"=>DEPARTMENTS[rand(0, count(DEPARTMENTS)-1)],
                "emp_type"=>EMP_TYPE[rand(0,count(EMP_TYPE)-1)],
                "status"=>STATUS[rand(0, count(STATUS)-1)]

            ]);
        }
        
        return view("admin/employees", $data);
    }
    public function departments()
    {
        $data['data'] = [];
        $faker =  service("faker");

        for ($i=0; $i < 5; $i++) {
            array_push($data['data'], [
                "dpt_manager"=>$faker->name,
                "department"=>DEPARTMENTS[$i],
                "no_employees"=>mt_rand(0, 20),
            ]);
        }

        $data['title'] =  "departments";
        return view("admin/departments", $data);
    }
    public function designations()
    {
        $data['title'] =  "designations";
        $data['data'] = [];
        $faker =  service("faker");

        for ($i=0; $i < 11; $i++) {
            array_push($data['data'], [
                "title"=>$faker->jobTitle,
                "no_employees"=>mt_rand(0, 20),
            ]);
        }

        return view("admin/designations", $data);
    }
    public function announcements()
    {
		$data['title'] =  "announcements";
		$data['data'] = [];
        $faker =  service("faker");

        for ($i=0; $i < 11; $i++) {
            array_push($data['data'], [
				"title"=>$faker->catchPhrase,
				"sent_to"=>SEND_TO[rand(0, count(SEND_TO)-1)],
				"draft"=>[true,false][rand(0,1)]
            ]);
        }

        return view("admin/announcements", $data);
    }
    public function managePayroll()
    {
        $data['title'] =  "manage payroll";
        $faker =  service("faker");
        $data['data'] = [];
        for ($i=0; $i < 22; $i++) {
            array_push($data['data'], [
                "emp_name"=>$faker->name,
                "designation"=>$faker->jobTitle,
                "type"=>['Deduction','Addition'][rand(0, 1)],
                "amount"=>rand(500, 5000)

            ]);
        }

        return view("admin/manage-payroll", $data);
    }
    public function salaryRevision()
    {
        $data['title'] =  "salary revision";
        $faker =  service("faker");
        $data['data'] = [];
        for ($i=0; $i < 15; $i++) {
            array_push($data['data'], [
                "emp_name"=>$faker->name,
                "addition"=>rand(500, 5000),
                "gross"=>rand(3000, 500000),
                "deduction"=>rand(500, 5000)

            ]);
        }

        return view("admin/salary-revision", $data);
    }
    public function login()
    {
		$data['title'] =  "login";
        return view("admin/login", $data);

    }
    	public function attemptLogin()
    {
        $throttler = service('throttler');

        if ($throttler->check($this->request->getIPAddress(), 2, MINUTE) === false) {
            return Services::response()->setStatusCode(429)->setBody("Too many requests. Please wait " .$throttler->getTokentime()." Seconds");
        }

        if (! $this->validate(['username'	=> 'required', 'password' => 'required'])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

		$credentials = $this->request->getPost(['username',"password"]);
	
        if (! auth_attempt($credentials)) {
            return redirect()->back()->withInput();
        }
        if (session()->has("redirect_url") && session("redirect_url")) {
            $redirectURL = session('redirect_url');
            unset($_SESSION['redirect_url']);
            return redirect()->to($redirectURL);
        } else {
            return redirect()->to("admin");
        }
	}
	
	    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
	public function readMe()
    {
		$data['title'] =  "read me";
        return view("admin/readme", $data);

    }

    //--------------------------------------------------------------------
}
