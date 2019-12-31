<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patient Entity
 *
 * @property int $id
 * @property int $Carrier_id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $zipcode
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Carrier $Carrier
 * @property \App\Model\Entity\Appointment[] $appointments
 * @property \App\Model\Entity\Invoice[] $invoices
 */
class Patient extends Entity
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
        'Carrier_id' => true,
        'name' => true,
        'phone' => true,
        'address' => true,
        'city' => true,
        'zipcode' => true,
        'created' => true,
        'Carrier' => true,
        'appointments' => true,
        'invoices' => true
    ];
}
