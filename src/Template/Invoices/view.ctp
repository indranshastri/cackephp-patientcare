<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Invoice $invoice
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('sidebar',array("type"=>"Invoice","typePural"=>"Invoices"))?>   
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
            <td><?= $invoice->has('patient') ? $this->Html->link($invoice->patient->name, ['controller' => 'Patients', 'action' => 'view',$invoice->patient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ammount') ?></th>
            <td><?= $this->Number->format($invoice->ammount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duedate') ?></th>
            <td><?= h($invoice->duedate) ?></td>
        </tr>
    </table>
</div>
