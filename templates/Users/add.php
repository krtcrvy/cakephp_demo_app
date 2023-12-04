<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                echo $this->Form->control(
                    'gender',
                    array('type' => 'radio', 'options' => [
                        ['value' => 'Male', 'text' => 'Male'],
                        ['value' => 'Female', 'text' => 'Female'],
                        ['value' => 'Other', 'text' => 'Other'],
                    ])
                );
                echo $this->Form->control('contact_number');
                echo $this->Form->control('address');
                echo $this->Form->control('zip_code');
                echo $this->Form->control('country');
                echo $this->Form->control(
                    'marital_status',
                    array('type' => 'select', 'options' => [
                        ['value' => 'Single', 'text' => 'Single'],
                        ['value' => 'Married', 'text' => 'Married'],
                        ['value' => 'Widowed', 'text' => 'Widowed'],
                        ['value' => 'Divorced', 'text' => 'Divorced'],
                    ])
                );
                echo $this->Form->control(
                    'educational_status',
                    array('type' => 'select', 'options' => [
                        ['value' => 'Elementary', 'text' => 'Elementary'],
                        ['value' => 'High School', 'text' => 'High School'],
                        ['value' => 'Senior High School', 'text' => 'Senior High School'],
                        ['value' => 'Undergraduate', 'text' => 'Undergraduate'],
                        ['value' => 'Bachelor\'s Degree', 'text' => 'Bachelor\'s Degree'],
                        ['value' => 'Master\'s Degree', 'text' => 'Master\'s Degree'],
                        ['value' => 'Doctorate Degree', 'text' => 'Doctorate Degree'],
                    ])
                );
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>