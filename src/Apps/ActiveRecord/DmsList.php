<?php 

namespace Apps\ActiveRecord;

use Ffcms\Core\Arch\ActiveModel;

/**
 * Class DmsList active record
 * @package Apps\ActiveRecord
 * @property int $id
 * @property string $title
 * @property string $incoming_date
 * @property string $deadline_date
 * @property boolean $accepted
 * @property boolean $finished
 * @property array $keywords
 * @property string $created_at
 * @property string $updated_at
 */
class DmsList extends ActiveModel
{
    protected $table = 'dms_list';

    protected $casts = [
        'keywords' => 'serialize'
    ];
}