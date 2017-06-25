<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Carrier $carrier
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carrier'), ['action' => 'edit', $carrier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carrier'), ['action' => 'delete', $carrier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Patient'), ['controller' => 'Patient', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patient', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carriers view large-9 medium-8 columns content">
    <h3><?= h($carrier->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($carrier->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carrier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carrier Code') ?></th>
            <td><?= $this->Number->format($carrier->carrier_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crated') ?></th>
            <td><?= h($carrier->crated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($carrier->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Patient') ?></h4>
        <?php if (!empty($carrier->patient)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Carrier Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Street Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Zipcoder') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($carrier->patient as $patient): ?>
            <tr>
                <td><?= h($patient->id) ?></td>
                <td><?= h($patient->carrier_id) ?></td>
                <td><?= h($patient->name) ?></td>
                <td><?= h($patient->street_address) ?></td>
                <td><?= h($patient->city) ?></td>
                <td><?= h($patient->state) ?></td>
                <td><?= h($patient->zipcoder) ?></td>
                <td><?= h($patient->email) ?></td>
                <td><?= h($patient->password) ?></td>
                <td><?= h($patient->phone) ?></td>
                <td><?= h($patient->created) ?></td>
                <td><?= h($patient->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Patient', 'action' => 'view', $patient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Patient', 'action' => 'edit', $patient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patient', 'action' => 'delete', $patient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
