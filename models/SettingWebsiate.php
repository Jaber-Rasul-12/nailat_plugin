<?php

namespace Nailat\Nailat\Models;

use Model;

/**
 * setting_websiate Model
 */
class SettingWebsiate extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var array Behaviors implemented by this model.
     */
    public $implement = [\System\Behaviors\SettingsModel::class];

    /**
     * @var string Unique code
     */
    public $settingsCode = 'nailat_nailat_setting_websiate';

    /**
     * @var mixed Settings form field definitions
     */
    public $settingsFields = 'fields.yaml';

    /**
     * @var array Validation rules
     */
        public $rules = [
        // Navbar Section
        'navbar_title' => 'required|string|max:255',
        'navbar_sub_title' => 'required|string|max:500',
        'navbar_sub_sub_title' => 'required|string|max:500',

        // About Us Section
        'about_us_title_one' => 'required|string|max:255',
        'about_us_description_one' => 'required|string|max:2000',
        'about_us_title_two' => 'required|string|max:255',
        'about_us_description_two' => 'required|string|max:2000',

        

        // Numbers Section
        'number_projects' => 'required|integer|min:0|max:999999',
        'number_exhibitions' => 'required|integer|min:0|max:999999',
        'number_clients' => 'required|integer|min:0|max:999999',

        // Our Work Section
        'our_work_title' => 'required|string|max:255',
        'our_work_description' => 'required|string|max:1000',
        'our_work_description_two' => 'required|string|max:1000',

        // Clients Section
        'clints1' => 'required|string|max:255',
        'clints2' => 'required|string|max:255',
        'clints3' => 'required|string|max:255',
        'clints4' => 'required|string|max:255',
        'clints_description' => 'required|string|max:2000',

        // Gifts Section
        'gifts_title' => 'required|string|max:255',
        'gifts_description' => 'required|string|max:2000',

        // Footer Contact Section
        'map_title' => 'required|string|max:500',
        'numberphone' => 'required|string|max:50',
        'email' => 'required|email|max:255',

        // Social Media URLs
        'url_facebook' => 'required|url|max:500',
        'url_instagram' => 'required|url|max:500',
        'url_twitter' => 'required|url|max:500',
        'url_linkedin' => 'required|url|max:500',
        'url_youtube' => 'required|url|max:500',
    ];
}
