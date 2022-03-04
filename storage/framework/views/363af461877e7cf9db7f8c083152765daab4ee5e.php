<div>
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-1 small"  wire:model="searchTerm"  
                placeholder="Search For Products , Categories And Collections"
                aria-label="Search" aria-describedby="basic-addon2" style="border: 1px solid rgb(218, 218, 218)">
        </div>
        <?php if(count($products) > 0): ?>

            <ul style="position:absolute; z-index:99999; width:400px; background:white; box-shadow:#8ca5f0 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 5px 5px;">
         
                <li style="background:white;" class="p-2">
                    <p style="padding: 2%" class="alert alert-primary"><b><?php echo e(count($products)); ?> Product Results</b></p>
                </li>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="">
                    <a href="<?php echo e(route('contributor_products.edit', $product->id)); ?>" style="color: black;text-decoration:none;">
                        <div class="row" style="background: white;padding:0px;margin:0px">
                            <div class="col-sm-8">
                                <b>Name : <?php echo e($product->name); ?></b><br>
                                <small>
                                    <b>Toy Hash : <?php echo e($product->toy_hash); ?></b><br>
                                    <b>Collection Name : <?php echo e($product->collection_name); ?></b>
                                </small>
                            </div>
                            <div class="col-sm-4">
                                <?php echo e($product->created_at->diffForHumans()); ?>

                            </div>
                            <div class="col-sm-12">
                                <?php echo e(substr($product->description, 0, 100)); ?>

                                <hr>
                            </div>
                        </div> 
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
    </form>
</div><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/contributor-front-search.blade.php ENDPATH**/ ?>