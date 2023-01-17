<table class="table table-responsive table-bordered">
    <thead class="table-info">
        <tr class="text-center">
            <th>No</th>
            <th>No Antrian</th>
            <th>Loket</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
        <?php $__currentLoopData = $antrian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="<?php echo e($a->status == 1 ? 'table-danger' : ''); ?>" id="rowId<?php echo e($a->id); ?>">
            <td width="50"><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($a->no_antrian); ?></td>
            <td><?php echo e($a->loket->nama_loket); ?></td>
            <td>
                <?php if($a->status === 0): ?>
                    Belum 
                <?php else: ?>
                    Sudah
                <?php endif; ?>
            </td>
            <td width="250" class="tombolAksi">
                <a href="" class="btn btn-sm btn-danger tombolPrevious" data-tipe="previous" data-id="<?php echo e($a->id); ?>"><i class="mdi mdi-skip-previous"></i></a>
                <a href="" class="btn btn-sm btn-success tombolPanggil" data-id="<?php echo e($a->id); ?>"><i class="mdi mdi-bell-ring"></i> Panggil</a>
                <a href="" class="btn btn-sm btn-danger tombolNext" data-tipe="next" data-id="<?php echo e($a->id); ?>"><i class="mdi mdi-skip-next"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\Users\ilham\OneDrive\Desktop\Laravel App\antrian\resources\views/dashboard/antrian/get_antrian.blade.php ENDPATH**/ ?>