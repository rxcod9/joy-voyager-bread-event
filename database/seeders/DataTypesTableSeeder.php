<?php

namespace Joy\VoyagerBreadEvent\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'events');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'events',
                'display_name_singular' => __('joy-voyager-bread-event::seeders.data_types.event.singular'),
                'display_name_plural'   => __('joy-voyager-bread-event::seeders.data_types.event.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadEvent\\Models\\Event',
                // 'policy_name'           => 'Joy\\VoyagerBreadEvent\\Policies\\EventPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadEvent\\Http\\Controllers\\VoyagerBreadEventController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
