<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Contato') ?></legend>
        <?php
            echo $this->Form->control('name',['label' => 'Nome']);
            echo $this->Form->control('email',['label' => 'Email']);
            echo $this->Form->control('title',['label' => 'Título']);
            echo $this->Form->control('message',['label' => 'Mensagem']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
