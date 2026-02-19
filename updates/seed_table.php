<?php

namespace Nailat\Nailat\Updates;

use AcornAssociated\CentersManagement\Models\Center;
use Winter\Storm\Database\Updates\Migration;
use Model;
use Seeder;

class SeedTable extends Seeder
{
    public function run()
    {

        Model::unguard();
        $this->call('Nailat\Nailat\Updates\Seeders\SeederGeneralSettings');
        
    }
}
