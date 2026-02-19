<?php namespace Nailat\Nailat\Components;

use Cms\Classes\ComponentBase;
use Nailat\Nailat\Models\Clint;
use Nailat\Nailat\Models\EmailSubscribe;
use Nailat\Nailat\Models\OurWork;
use Nailat\Nailat\Models\Service;
use Nailat\Nailat\Models\SettingWebsiate;
use Flash;

class GeneralComponent extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'GeneralComponent Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [];
    }

        public function getSettingWebsiate()
    {

        return [
            'navbar_title' => SettingWebsiate::get('navbar_title', 'لا يوجد'),
            'navbar_sub_title' => SettingWebsiate::get('navbar_sub_title', 'لا يوجد'),
            'navbar_sub_sub_title' => SettingWebsiate::get('navbar_sub_sub_title', 'لا يوجد'),
            
            'about_us_title_one' => SettingWebsiate::get('about_us_title_one', 'لا يوجد'),
            'about_us_description_one' => SettingWebsiate::get('about_us_description_one', 'لا يوجد'),
            'about_us_title_two' => SettingWebsiate::get('about_us_title_two', 'لا يوجد'),
            'about_us_description_two' => SettingWebsiate::get('about_us_description_two', 'لا يوجد'),

            
            'number_projects' => SettingWebsiate::get('number_projects', 'لا يوجد'),
            'number_exhibitions' => SettingWebsiate::get('number_exhibitions', 'لا يوجد'),
            'number_clients' => SettingWebsiate::get('number_clients', 'لا يوجد'),
            
            'our_work_title' => SettingWebsiate::get('our_work_title', 'لا يوجد'),
            'our_work_description' => SettingWebsiate::get('our_work_description', 'لا يوجد'),
            'our_work_description_two' => SettingWebsiate::get('our_work_description_two', 'لا يوجد'),

            

            'clints1' => SettingWebsiate::get('clints1', 'لا يوجد'),
            'clints2' => SettingWebsiate::get('clints2', 'لا يوجد'),
            'clints3' => SettingWebsiate::get('clints3', 'لا يوجد'),
            'clints4' => SettingWebsiate::get('clints4', 'لا يوجد'),
            'clints_description' => SettingWebsiate::get('clints_description', 'لا يوجد'),
            
            'gifts_title' => SettingWebsiate::get('gifts_title', 'لا يوجد'),
            'gifts_description' => SettingWebsiate::get('gifts_description', 'لا يوجد'),
            
            'map_title' => SettingWebsiate::get('map_title', 'لا يوجد'),
            'numberphone' => SettingWebsiate::get('numberphone', 'لا يوجد'),
            'email' => SettingWebsiate::get('email', 'لا يوجد'),

            'url_facebook' => SettingWebsiate::get('url_facebook', 'لا يوجد'),
            'url_instagram' => SettingWebsiate::get('url_instagram', 'لا يوجد'),
            'url_twitter' => SettingWebsiate::get('url_twitter', 'لا يوجد'),
            'url_linkedin' => SettingWebsiate::get('url_linkedin', 'لا يوجد'),
            'url_youtube' => SettingWebsiate::get('url_youtube', 'لا يوجد'),



        ];
    }

    function onSaveEmail(){
        $email = post('email');
        $check = EmailSubscribe::create(['email' => $email]);
        if($check){
            Flash::success('تم الاشتراك بنجاح');
        }else{
            Flash::error('حدث خطأ');
        }

    }

    public function getClints()
    {
        return Clint::get();
    }
     public function getOurWorks()
    {
        return OurWork::get();
    }
     public function getServices()
    {
        return Service::get();
    }
}
