<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Marker Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $title
 * @property \Cake\I18n\FrozenTime $Date
 * @property string $Description
 * @property string $type
 * @property float $lat
 * @property float $lng
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
        'name' => true,
        'address' => true,
        'title' => true,
        'Date' => true,
        'Description' => true,
        'type' => true,
        'lat' => true,
        'lng' => true
    ];
}
