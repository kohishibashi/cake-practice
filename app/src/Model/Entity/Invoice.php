<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property int $patient_id
 * @property string|null $service
 * @property float|null $ammount
 * @property \Cake\I18n\FrozenDate|null $due
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Patient $patient
 */
class Invoice extends Entity
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
        'patient_id' => true,
        'service' => true,
        'ammount' => true,
        'due' => true,
        'created' => true,
        'patient' => true
    ];
}
