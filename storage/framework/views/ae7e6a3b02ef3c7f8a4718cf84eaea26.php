<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo' , "Formulario Aluno"); ?>
<form action="<?php echo e(route('aluno.search')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label for=""> Nome</label>
    <input type="text" name="nome"><br>
    <button type="submit">Buscar</button>
    <button><a href="<?php echo e(url('aluno/create')); ?>">Novo</a></button>

</form>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Cpf</th>
                    <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
                <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nome); ?></td>
                <td><?php echo e($item->telefone); ?></td>
                <td><?php echo e($item->cpf); ?></td>
                <td>Editar</td>
                <td><a href="<?php echo e(route('aluno.edit', $item->id)); ?>"> Editar </a></td>

                <td><form action="<?php echo e(route('aluno.destroy',$item)); ?>" method="post">
                <?php echo method_field("DELETE"); ?>
                <?php echo csrf_field(); ?>
                <input type="submit" value="Deletar">
                </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>








<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\pweb2_2024\resources\views/aluno/list.blade.php ENDPATH**/ ?>