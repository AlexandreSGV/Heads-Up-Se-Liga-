<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Marker Entity
 *
 * @property int $id
 * @property string $title
 * @property string $address
 * @property float $lat
 * @property float $lng
 * @property string $type
 * @property \Cake\I18n\FrozenDate $date
 * @property string $description
 * @property \Cake\I18n\FrozenTime $schedule
 */
class Marker extends Entity
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
        'address' => true,
        'lat' => true,
        'lng' => true,
        'type' => true,
        'date' => true,
        'description' => true,
        'schedule' => true
    ];
}
