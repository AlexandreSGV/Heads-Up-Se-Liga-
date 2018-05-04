<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Crimes'), ['controller' => 'Crimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crime'), ['controller' => 'Crimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($user->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Birth') ?></th>
            <td><?= h($user->date_of_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone Number') ?></th>
            <td><?= h($user->telephone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Crimes') ?></h4>
        <?php if (!empty($user->crimes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Schedule') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Stolen Objects') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->crimes as $crimes): ?>
            <tr>
                <td><?= h($crimes->id) ?></td>
                <td><?= h($crimes->title) ?></td>
                <td><?= h($crimes->date) ?></td>
                <td><?= h($crimes->schedule) ?></td>
                <td><?= h($crimes->type) ?></td>
                <td><?= h($crimes->description) ?></td>
                <td><?= h($crimes->stolen_objects) ?></td>
                <td><?= h($crimes->local) ?></td>
                <td><?= h($crimes->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Crimes', 'action' => 'view', $crimes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Crimes', 'action' => 'edit', $crimes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Crimes', 'action' => 'delete', $crimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crimes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
