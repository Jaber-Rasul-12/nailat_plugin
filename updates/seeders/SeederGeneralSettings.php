<?php

namespace Nailat\Nailat\Updates\Seeders;

use Seeder;
use Nailat\Nailat\Models\Clint;
use Nailat\Nailat\Models\OurWork;
use Nailat\Nailat\Models\Service;
use System\Models\File;

class SeederGeneralSettings extends Seeder
{

    public function run()
    {
        print("\t\tCreate Data General Settings\n");

        // Clint data with images
        $clints = [
            ['name' => 'قناة اليوم', 'image' => '11.webp'],
            ['name' => 'قناة العربية', 'image' => '12.webp'],
            ['name' => 'قناة mbc', 'image' => '10.webp'],
            ['name' => 'قناة sabq', 'image' => '9.webp']
        ];

        // OurWork data with images
        $ourWorks = [
            ['name' => 'المؤتمرات', 'image' => '23.jpeg'],
            ['name' => 'المعارض', 'image' => 'work.jpg'],
            ['name' => 'الفعاليات', 'image' => '22.avif'],
            ['name' => 'الحملات الاعلانية', 'image' => '22.avif']
        ];

        // Services data with images
        $services = [
            ['name' => 'التخطيط و الاستشارات الاستراتيجية', 'image' => '3.webp'],
            ['name' => 'الإنتاج الفني و الإعلامي المطور', 'image' => '4.webp'],
            ['name' => 'إدارة الحملات و الفعاليات المؤسسية', 'image' => '5.webp'],
            ['name' => 'الحلول الرقمية المتقدمة', 'image' => '6.webp'],
            ['name' => 'افكار هدايا دعائية و تذكارية مع الطباعة', 'image' => '7.webp'],
            ['name' => 'تصميم التطبيقات و المواقع الالكترونية', 'image' => '8.webp']
        ];

        // Seed Clint records with images
        foreach ($clints as $clintData) {
            $clint = new Clint();
            $clint->name = $clintData['name'];
            $clint->save();
            
            // Add avatar image if exists
            $this->addImage($clint, 'avatar', $clintData['image']);
        }

        // Seed OurWork records with images
        foreach ($ourWorks as $workData) {
            $ourWork = new OurWork();
            $ourWork->name = $workData['name'];
            $ourWork->save();
            
            // Add avatar image if exists
            $this->addImage($ourWork, 'avatar', $workData['image']);
        }

        // Seed Service records with images
        foreach ($services as $serviceData) {
            $service = new Service();
            $service->name = $serviceData['name'];
            $service->save();
            
            // Add avatar image if exists
            $this->addImage($service, 'avatar', $serviceData['image']);
        }
    }

    /**
     * Add image to the model
     * 
     * @param $model The model instance
     * @param $relation The relation name (usually 'avatar')
     * @param $imageFile The image filename
     */
    private function addImage($model, $relation, $imageFile)
    {
        // Build the full path to the image
        $avatarPath = plugins_path('nailat/nailat/assets/imageforseeder/' . $imageFile);
        
        // Check if file exists before attaching
        if (file_exists($avatarPath)) {
            try {
                $file = new File();
                $file->fromFile($avatarPath);
                $file->save();

                // Attach the file to the model
                $model->{$relation}()->add($file);
                
                print("\t\t✓ Added image: {$imageFile} to {$model->name}\n");
            } catch (\Exception $e) {
                print("\t\t✗ Failed to add image {$imageFile}: " . $e->getMessage() . "\n");
            }
        } else {
            print("\t\t⚠ Image not found: {$avatarPath}\n");
        }
    }
}