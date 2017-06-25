<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property int $patient_id
 * @property float $ammount
 * @property string $service
 * @property \Cake\I18n\FrozenTime $duedate
 * @property \Cake\I18n\FrozenTime $crated
 * @property \Cake\I18n\FrozenTime $modified
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
        '*' => true,
        'id' => false
    ];
}
