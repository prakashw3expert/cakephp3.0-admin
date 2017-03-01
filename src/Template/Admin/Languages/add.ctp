<?php

$this->extend('/Common/Admin/add');

$this->Html->addCrumb($modelClass, array('action' => 'index'));

$title = 'Edit Language';
if (empty($language['id'])) {
    $title = 'Add Language';
}
$this->assign('title', $title);
$this->Html->addCrumb($title, null);

$this->start('form');
echo $this->Form->create($language, [
    'novalidate' => true,
    'align' => [
        'sm' => [
            'left' => 8,
            'middle' => 8,
            'right' => 12
        ],
        'md' => [
            'left' => 4,
            'middle' => 4,
            'right' => 4
        ]
    ]
]);

echo $this->Form->input('name');
echo $this->Form->input('code');

echo '<div class="form-group">
            <label class="control-label col-sm-8 col-md-4">Status</label>
            <div class="switchery-demo col-sm-8 col-md-4">
                ' . $this->Form->checkbox('status', [
                'data-plugin' => "switchery",
                'data-color' => "#5d9cec",
                //'data-size'=>"medium"
            ]) .
            '</div>
        </div>';

$submitBtn = $this->Form->button('Save Language', array('class' => 'btn btn-success'));

$this->assign('btn-submit', $submitBtn);

$this->end();


