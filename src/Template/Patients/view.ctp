<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Patient $patient
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
      <?=$this->Element('sidebar',array("type"=>"Patient","typePural"=>"Patients"))?>
</nav>
<div class="patients view large-9 medium-8 columns content">
    <h3><?= h($patient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Carrier') ?></th>
            <td><?= $patient->has('carrier') ? $this->Html->link($patient->carrier->name, ['controller' => 'Carriers', 'action' => 'view', $patient->carrier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($patient->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street Address') ?></th>
            <td><?= h($patient->street_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($patient->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($patient->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcoder') ?></th>
            <td><?= h($patient->zipcoder) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($patient->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($patient->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($patient->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($patient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($patient->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($patient->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appointments') ?></h4>
        <?php if (!empty($patient->appointments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Name') ?></th>
                <th scope="col"><?= __('Doctor Name') ?></th>
                <th scope="col"><?= __('Appointment Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->appointments as $appointments): ?>
            <tr>
                <td><?= h($appointments->id) ?></td>
                <td><?= h($this->FORMAT->getName($appointments->patient_id,'patients')) ?></td>
                <td><?= h($this->FORMAT->getName($appointments->doctor_id,'doctors')) ?></td>
                <td><?= h($appointments->appointment_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($patient->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Name') ?></th>
                <th scope="col"><?= __('Ammount') ?></th>
                <th scope="col"><?= __('Service') ?></th>
                <th scope="col"><?= __('Duedate') ?></th>
                <th scope="col"><?= __('Crated') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->id) ?></td>
                <td><?= h($this->FORMAT->getName($appointments->patient_id,'patients')) ?></td>
                <td><?= h($invoices->ammount) ?></td>
                <td><?= h($invoices->service) ?></td>
                <td><?= h($invoices->duedate) ?></td>
                <td><?= h($invoices->crated) ?></td>
                <td><?= h($invoices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
