<?= $this->extend('_layouts/_layouts') ?>
<?= $this->section('content') ?>

<?= $this->include('dashboard/_partials/breadcrumb/breadcrumb') ?>

<section class="content">
    <div class="container-fluid">
        <?= $this->include('dashboard/_partials/small-box/small-box') ?>
        <div class="row">

            <section class="col-lg-7 connectedSortable">
                <?= $this->include('dashboard/_partials/chart-tabs/chart-tabs') ?>
                <?= $this->include('dashboard/_partials/direct-chat/direct-chat') ?>
                <?= $this->include('dashboard/_partials/todo-list/todo-list') ?>
            </section>

            <section class="col-lg-5 connectedSortable">
                <?= $this->include('dashboard/_partials/map-card/map-card') ?>
                <?= $this->include('dashboard/_partials/graph/graph') ?>
                <?= $this->include('dashboard/_partials/calendar/calendar') ?>
            </section>

        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->include('dashboard/script') ?>

<?= $this->endSection() ?>