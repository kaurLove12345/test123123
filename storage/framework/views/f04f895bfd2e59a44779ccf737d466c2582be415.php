

<?php $__env->startSection('content'); ?>
<section class="" >
    <div class="container-fluid">
        
<div class="row">
    <div class="HomeSec1Data HomeSec1Data2">
        <div class="row">
            <div class="col-xl-12">
                <div class="TitleMn" align="center">
                    <h2>All Products in <b><?php echo e($series); ?></b></h2>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="row py-1 m-0 ResponsiveLot">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot1">
                        <a href="<?php echo e($products->previousPageUrl()); ?>">
                            <button class="btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-6 text-center ResponsiveLot2">
                        <p>Total <b><?php echo e($products->total()); ?></b> | <b><?php echo e($products->count()); ?></b> In This Page | Current Page <b><?php echo e($products->currentPage()); ?></b> </p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot3">
                        <a href="<?php echo e($products->nextPageUrl()); ?>" style="float: right;">
                            <button class="btn btn-info btn-sm" style="background:rgba(58,0,198,1);border:none">Next</button>
                        </a>
                    </div>
                </div>
            </div>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('by-series-select', ['products' => $products,'series' => $series])->html();
} elseif ($_instance->childHasBeenRendered('XExjFbz')) {
    $componentId = $_instance->getRenderedChildComponentId('XExjFbz');
    $componentTag = $_instance->getRenderedChildComponentTagName('XExjFbz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XExjFbz');
} else {
    $response = \Livewire\Livewire::mount('by-series-select', ['products' => $products,'series' => $series]);
    $html = $response->html();
    $_instance->logRenderedChild('XExjFbz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <div class="col-xl-12">
                <div class="row py-1 m-0 ResponsiveLot">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot1">
                        <a href="<?php echo e($products->previousPageUrl()); ?>">
                            <button class="btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-6 text-center ResponsiveLot2">
                        <!--p>Total <b><?php echo e($products->total()); ?></b> | <b><?php echo e($products->count()); ?></b> In This Page | Current Page <b><?php echo e($products->currentPage()); ?></b> </p-->
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot3">
                        <a href="<?php echo e($products->nextPageUrl()); ?>" style="float: right;">
                            <button class="btn btn-info btn-sm" style="background:rgba(58,0,198,1);border:none">Next</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>


  <?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/guest/BrowseProducts/byseries.blade.php ENDPATH**/ ?>