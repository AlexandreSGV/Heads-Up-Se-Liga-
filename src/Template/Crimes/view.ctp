<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crime $crime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Crime'), ['action' => 'edit', $crime->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Crime'), ['action' => 'delete', $crime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crime->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Crimes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crime'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="crimes view large-9 medium-8 columns content">
    <h3><?= h($crime->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($crime->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule') ?></th>
            <td><?= h($crime->schedule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($crime->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($crime->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stolen Objects') ?></th>
            <td><?= h($crime->stolen_objects) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($crime->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $crime->has('user') ? $this->Html->link($crime->user->nome, ['controller' => 'Users', 'action' => 'view', $crime->user->nome]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($crime->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($crime->date) ?></td>
        </tr>
    </table>
</div>
