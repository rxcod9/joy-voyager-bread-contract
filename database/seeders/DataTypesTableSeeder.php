<?php

namespace Joy\VoyagerBreadContract\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'contracts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'contracts',
                'display_name_singular' => __('joy-voyager-bread-contract::seeders.data_types.contract.singular'),
                'display_name_plural'   => __('joy-voyager-bread-contract::seeders.data_types.contract.plural'),
                'icon'                  => 'voyager-bread voyager-bread-contract voyager-hook',
                'model_name'            => 'Joy\\VoyagerBreadContract\\Models\\Contract',
                // 'policy_name'           => 'Joy\\VoyagerBreadContract\\Policies\\ContractPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadContract\\Http\\Controllers\\VoyagerBreadContractController',
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
