<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Invoice $invoice
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoices view large-9 medium-8 columns content">
    <h3><?= h($invoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= h($invoice->service) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patient Id') ?></th>
            <td><?= $this->Number->format($invoice->patient_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ammount') ?></th>
            <td><?= $this->Number->format($invoice->ammount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duedate') ?></th>
            <td><?= h($invoice->duedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crated') ?></th>
            <td><?= h($invoice->crated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($invoice->modified) ?></td>
        </tr>
    </table>
</div>
