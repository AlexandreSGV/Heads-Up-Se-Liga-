<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crime Entity
 *
 * @property int $id
 * @property string $title
 * @property \Cake\I18n\FrozenDate $date
 * @property string $schedule
 * @property string $type
 * @property string $description
 * @property string $stolen_objects
 * @property string $local
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Crime extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'date' => true,
        'schedule' => true,
        'type' => true,
        'description' => true,
        'stolen_objects' => true,
        'local' => true,
        'user_id' => true,
        'user' => true
    ];
}
