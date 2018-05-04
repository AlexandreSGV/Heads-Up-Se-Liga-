<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crime[]|\Cake\Collection\CollectionInterface $crimes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Novo Crime'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuários'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="crimes index large-9 medium-8 columns content">
    <h3><?= __('Crimes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Título') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Horário') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tipo de Incidente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descrição') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Objetos Roubados / Furtados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Local do incidente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vítima') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($crimes as $crime): ?>
            <tr>
                <td><?= $this->Number->format($crime->id) ?></td>
                <td><?= h($crime->title) ?></td>
                <td><?= h($crime->date) ?></td>
                <td><?= h($crime->schedule) ?></td>
                <td><?= h($crime->type) ?></td>
                <td><?= h($crime->description) ?></td>
                <td><?= h($crime->stolen_objects) ?></td>
                <td><?= h($crime->local) ?></td>
                <td><?= $crime->has('user') ? $this->Html->link($crime->user->id, ['controller' => 'Users', 'action' => 'view', $crime->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $crime->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $crime->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $crime->id], ['confirm' => __('Você tem certeza que deseja deletar # {0}?', $crime->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira Página')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última Página') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}. Total de ocorridos: {{count}}')]) ?></p>
    </div>
</div>
