<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Appointment $appointment
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('sidebar',array("type"=>"Appointment","typePural"=>"Appointments"))?>
</nav>
<div class="appointments view large-9 medium-8 columns content">
    <h3><?= h($appointment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Doctor') ?></th>
            <td><?= $appointment->has('doctor') ? $this->Html->link($appointment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appointment->doctor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($appointment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patient Id') ?></th>
            <td><?= $this->Number->format($appointment->patient_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crated') ?></th>
            <td><?= h($appointment->crated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($appointment->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Appointment Date') ?></th>
            <td><?= h($appointment->appointment_date) ?></td>
        </tr>
    </table>
</div>
