<?php


namespace app\controllers;


use tn\phpmvc\Application;
use tn\phpmvc\Controller;
use tn\phpmvc\Request;
use tn\phpmvc\Response;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function home()
    {
        $params = array(
          'name' => 'Titus Njiru'
        );
        return $this->render('home',$params);

    }
    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success','Thanks for contacting us');
                $response->redirect('/contact');
            }
        }
        return $this->render('contact',[
            'model' => $contact
        ]);

    }


}