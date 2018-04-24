<?php

class HomeController extends Controller
{

    public function index($id = '', $name = '')
    {
        //echo 'I am in the ' .__CLASS__ . ' method = ' . __METHOD__;
        //echo 'Id: is ' . $id . ' and name is: '. $name; //url http://fantasyvirtual/home/index/10/foo prints Id: is 10 and name is: foo
        /**@viewName =we can hard code param viewName: since we know all the views are in the view folder
         * @data = @params which is an array and must get passed as such.
         * What is happening below is I am attaching values for every parameter in my page for later use i.e username = $name, id = $id are all params passed
         * */

        //URL TEST: http://fantasyvirtual/home/index/test/122

        $this->view('home\index', [
            'name' => $name,
            'id' => $id,
        ]);
        var_dump($this);
        // todo a better way of disp page title is to create a protected param @page_title and create a method in the view
        //below is just for educational purposes
        $this->view->page_title = 'This is the Homepage';
        $this->view->render();
    }

    /**
     * /if you type url/home/aboutUs
     * the following will get printed with the view set as is:
     * I am in the homeController method = homeController::aboutUs
     *This is VERY usefull since as you can see it prevents us from creating a new page each time.
     **/
    public function aboutUs()
    {
        // echo 'I am in the ' .__CLASS__ . ' method = ' . __METHOD__;
        $this->view('home\aboutUs', []);
        //var_dump($this);
        $this->view->page_title = 'Learn More About Us';
        $this->view->render();
    }
}

