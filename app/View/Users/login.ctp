<?php echo $this->Session->flash('auth'); ?> <!--permet d afficher le petit message -->

<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('username'); ?>
<?php echo $this->Form->input('password'); ?>
<?php echo $this->Form->end('login'); ?>