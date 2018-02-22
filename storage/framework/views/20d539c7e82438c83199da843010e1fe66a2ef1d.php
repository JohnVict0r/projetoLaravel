<?php $__env->startSection('title', 'Page Not Found'); ?>

<?php $__env->startSection('message', 'Desculpe-nos, a página que está buscando não existe mais!'); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>